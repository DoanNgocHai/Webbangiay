<?php 
    $title = 'Trang Thanh toán';
    require_once('layoutss/header.php');
     $user1 =(isset($_SESSION['user'])) ? $_SESSION['user']: [];

 ?>
   

    <h2 style="text-align: center;padding-top: 20PX; margin-top: 100px;font-family: serif">XÁC NHẬN MUA HÀNG</h2>
  <div class="container" style="margin-top: 20px; margin-buttom: 20PX;overflow-x: scroll;">
    <?php if (isset($_SESSION['user'])) {?>
      <form method="post" onsubmit="return donhang();">     
        <div class="row">     
          <div class="col-md-6"style="box-sizing: border-box;">       
            <label for="note" style="font-size: 30px;">Thông tin khách hàng</label>
            <div class="form-group">
              <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$user1['fullname']?>" placeholder="Nhập họ và tên">
            </div>
            <div class="form-group">
              <input required="true" type="tel" class="form-control" id="phone" name="phone" value="<?=$user1['phone_number']?>" placeholder="Nhập SĐT">
            </div>
            <div class="form-group">
              <input required="true" type="text" class="form-control" id="address" name="address" value="<?=$user1['address']?>" placeholder="Nhập địa chỉ">
            </div>
             <div class="form-group">
              <label for="note">Nội dung yêu cầu:</label>
              <input type="text" class="form-control" id="note" name="note">
            </div>
          </div>
          <div class="col-md-6 ">
            <table class="table table-bordered">
              <tr>
                <th>STT</th>
                <th>Thumbnail</th>
                <th>Tiêu đề</th>
                <th>Gía</th>
                <th>Size</th>
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
                  <td>'.$item['size'].'</td>
                  <td>'.$item['num'].'</td>

                  <td>'.number_format($item['price']*$item['num']).'VND</td>
                </tr>';
                }
             ?>
            </table>        
               <button class="btn btn-success">Thanh toán <i class="bi bi-clipboard-check"></i></button> 
          </div>        
        </div>
         
      </form>
      <a href="cart.php"><button class="btn btn-outline-danger"><i class="bi bi-arrow-return-left"> Quay lại </i></button></a>

          <?php } 
            else{?>
              <table class="table table-bordered">
              <tr>
                <th>STT</th>
                <th>Thumbnail</th>
                <th>Tiêu đề</th>
                <th>Gía</th>
                <th>Size</th>
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
                  <td>'.$item['size'].'</td>
                  <td>'.$item['num'].'</td>

                  <td>'.number_format($item['price']*$item['num']).'VND</td>
                </tr>';
                }
             ?>
            </table>        
              <p style="color:red; text-align: center;">Bạn cần phải đăng nhập tài khoản trước</p>
              <div style="text-align: center;">
                <a href="cart.php"><button class="btn btn-outline-danger"><i class="bi bi-arrow-return-left"> Quay lại </i></button></a>
                <a href="admin/authen/login.php"><button class="btn btn-outline-info">Đăng nhập</button></a>
              </div>
              
            <?php } ?>  
              
          </div>
        </div>
     
      
    
  </div>
  
  <script type="text/javascript">
      function donhang(){
        $.post('cartt/ajax_requestt.php',{
          'action':'checkout',
          'fullname': $('[name=fullname]').val(),
          'phone': $('[name=phone]').val(),
          'address': $('[name=address]').val(),
          'note': $('[name=note]').val()


        }, function(){
          window.open('complate.php', '_self');
        })
        return false;
      }
  </script>
  
  <?php 
    require_once('layoutss/footer.php')
   ?>
	
</body>
</html>