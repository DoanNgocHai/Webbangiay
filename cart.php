<?php 
    $title = 'Trang Giỏ Hàng';
    require_once('layoutss/header.php');

    

 ?>
   

   <!-- product stast -->
   <div style="margin-top: 100px; padding-top: 20px;" >
     <h1 style="text-align: center; color: #46434d;font-family: serif ;">GIỎ HÀNG</h1><hr>
  
    <h3 style=" margin-left: 30PX; font-family:cursive;">Các sản phẩm bạn đã chọn</h3>
   </div>
    
  <div class="container" style="margin-top: 20px; margin-buttom: 20PX;">
    <div class="row" >
        <table class="table table-bordered">
            <tr>
              <th>STT</th>
              <th>Thumbnail</th>
              <th>Tiêu đề</th>
              <th>Gía</th>
              <th>size</th>
              <th>Số lượng</th>
              <th>Tổng giá</th>
            </tr>
        
        <?php 
            if(!isset($_SESSION['cart'])){
            $_SESSION['cart']=[];
             }
             $index = 0;
            foreach($_SESSION['cart'] as $item){

              echo '<tr>
            <td>'.(++$index).'</td>
              <td><img src="'.$item['thumbnail'].'" style=" height: 40px; width:40px"></td>
              <td>'.$item['title'].'</td>
              <td>'.number_format($item['price']).'VND</td>

              <td>
                <div style="display: flex">
                  <button class="btn btn-light" style="border:1px solid #dce0e0;" onclick="thaydoi1('.$item['id'].',-1)">-</button>
                  <input type="number" id="size_'.$item['id'].'" value="'.$item['size'].'" class="form-control" style="width:80px; "onchange="loiam('.$item['id'].')"/>
                  <button class="btn btn-light" style="border:1px solid #dce0e0;" onclick="thaydoi1('.$item['id'].',1)">+</button>
                </div>
              </td>
             

              <td style="display: flex">
              <button class="btn btn-light" style="border:1px solid #dce0e0;" onclick="thaydoi('.$item['id'].',-1)">-</button>
              <input type="number" id="num_'.$item['id'].'" value="'.$item['num'].'" class="form-control" style="width:80px; "onchange="loiam('.$item['id'].')"/>
              <button class="btn btn-light" style="border:1px solid #dce0e0;" onclick="thaydoi('.$item['id'].',1)">+</button>
              </td>

              <td>'.number_format($item['price']*$item['num']).'VND</td>
              <td><button onclick="suagiohang('.$item['id'].',0,0)">Xóa</button></td>
            </tr>';
            }
         ?>
      </table>
      <a href="checkout.php"><button class="btn btn-success ">Đến thanh toán <i class="bi bi-arrow-right-circle-fill"></i></button></a>
    </div>
  </div>
  <script type="text/javascript">
       

      function thaydoi(id,congtru1){
        num = parseInt($('#num_'+ id).val())
        num += congtru1

        $('#num_'+ id).val(num);
        suagiohang(id,size=parseInt($('#size_'+id).val()) , num)
      }
      function thaydoi1(id,congtru1){
        size = parseInt($('#size_'+id).val())
        size += congtru1
        $('#size_'+id).val(size);

         suagiohang(id, size, parseInt($('#num_'+ id).val()))
      }
      function loiam(id){
        $('#num_'+id).val(Math.abs($('#num_'+id).val()))
        $('#size_'+id).val(Math.abs($('#size_'+id).val()))
        suagiohang(id, $('#size_'+id).val(), $('#num_'+id).val())
      }
      function suagiohang(productId,size, num){
          $.post('cartt/ajax_requestt.php', {
              'action': 'sua_cart',
              'id': productId,
              'size':size,    
              'num': num
          }, function(data){
              location.reload()
          })
      }
      
  </script>
  
  <?php 
    require_once('layoutss/footer.php')
   ?>
	
</body>
</html>