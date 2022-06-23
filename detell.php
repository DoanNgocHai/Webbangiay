<?php 
    $title = 'Trang Chi Tiết Sản Phẩm';
    require_once('layoutss/header.php');
    $productId = getGet('id');

    $sqll ="select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.id = $productId"; 
    
    $product= executeResult($sqll, true);


    $categoryID = $product['category_id'];
    $sql ="select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.category_id = $categoryID order by Product.updated_at desc limit 0,4"; 
    $lastesItem = executeResult($sql);
 ?>
   
  <style type="text/css">
      .muctry{
          padding: 0px;

      }
      .muctry li{
          list-style-type: none ;
          display: inline;
      }
      .muctry li a{
          color: black;
      }
      .size input{
          margin-right: 20px;

      }
  </style>
   <!--CHI TIET-->

  
  <div class="container" style="margin-top:100px; padding-top:20px">
       <h1 style="text-align: center; color: #46434d;font-family: serif ;">CHI TIẾT SẢN PHẨM</h1><hr>
     <div class="row" style="margin-top:20px; z-index: 999999">
         <div class="col-md-6" >
            <img src="<?=$product['thumbnail']?>" style="height: 450px; width: 100%;">  
          </div>
      <div class="col-md-6">
        <ul class="muctry">
          <li>
            <a href="index.php" style="font-weight: bold;">TRANG CHỦ</a> ->
          </li>
          <li>
            <a href="category.php?id=<?=$product['category_id']?>"style="font-weight: bold;"><?=$product['category_name']?></a> ->
          </li>
           <li>
              <a style="font-weight: bold;" href="detell.php?id=<?=$product['id']?>"><?=$product['title']?></a>
          </li>
        </ul>
        <div class="chitiet" style="margin-left: 15px;">
             <h3><?=$product['title']?></h3>
             <p>
               <span style="margin-right: 10px;color: red; font-size: 30px;"><?=number_format($product['price'])?>đ </span>
             
               <span style="text-decoration: line-through;"><?=number_format($product['discount'])?>đ</span>
             </p>
             <!--start size -->
             <div>
               <h5>Chọn size (từ 38 đến 43) </h5>
               <div style="display: flex;" >
                 <button class="btn btn-light" style="border:1px solid #dce0e0;" onclick="thaydoisize(-1)">-</button>
                 <input type="number" name="size" class="form-control" step="1" value="38" style="max-width: 60px;border:1px solid #dce0e0;" onchange="loiam1()">
                 <button class="btn btn-light" style="border:1px solid #dce0e0;" onclick="thaydoisize(1)">+</button>
               </div>
             </div>
              
             <!--stop size -->
             
             <!--So luong -->
             <div >
                <h5>Chọn số lượng: </h5>
               <div style="display: flex;" >
                 <button class="btn btn-light" style="border:1px solid #dce0e0;" onclick="thaydoi(-1)">-</button>
                 <input type="number" name="num" class="form-control" step="1" value="1" style="max-width: 60px;border:1px solid #dce0e0;" onchange="loiam()">
                 <button class="btn btn-light" style="border:1px solid #dce0e0;" onclick="thaydoi(1)">+</button>
               </div>
             </div>

              <!-- Gio hang -->
             <button class="btn btn-success"style="font-size: 28px; margin-top: 15px; width: 100%; border-radius: 0px;"onclick="themgiohang(<?=$product['id']?>,$('[name=size]').val(),$('[name=num]').val())">
              <i class="bi bi-cart-plus-fill"></i> Thêm vào giỏ hàng</button>

            <a href="cart.php"> <button class="btn btn-secondary"style="font-size: 28px; margin-top: 15px; width: 100%;background-color: #c9c9c9; color: black;border: none; border-radius: 0px;"><i class="bi bi-cart4"></i> Xem giỏ hàng</button></a>
        </div>
      </div>
      <div style="margin-top: 20PX">
          <h4>GIỚI THIỆU SẢN PHẨM</h4>
          <?=$product['description']?>
      </div>
     </div>
  </div>
   
  <h3 style="border-bottom: 3px solid #3d7eeb;margin-top: 20px; margin-left: 30PX; text-align: center; font-weight: bold;">CÁC SẢN PHẨM LIÊN QUAN</h3>
  <div style="background-color:#f0f1f2;">
    <div class="container">  
    <div class="row" style="padding-top: 15px;margin-bottom: 20px;">
      <?php 
        foreach($lastesItem as $item){
          if($item['deleted']==0){
            echo '<div class="col-md-3 col-6 product-item">
          <div>
            <button class="btn btn-success them"style=" margin-left: 10%; margin-right: 10%; width: 80%; border-radius: 5px;"onclick="themgiohang('.$item['id'].',38,1)"><i class="bi bi-cart-plus-fill"></i>Thêm vào giỏ hàng</button>
              
            <a href="detell.php?id='.$item['id'].'">
             <button class="btn btn-secondary them"style=" margin-left: 10%; margin-right: 10%; margin-top: 15px; width: 80%; border-radius: 5px;"><i class="bi bi-cart-plus-fill"></i>Xem sản phẩm</button>
            </a>           
          </div>
                  <a href="detell.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%; height:220px; margin-top:-65px"></a>
                  <p>'.$item['category_name'].'</p>
                  <p>'.$item['title'].'</p>
                  <p style="color: red;">'.number_format($item['price']).'VND</p>
                  <p style="color: black;text-decoration: line-through;">'.number_format($item['discount']).'VND</p>
               
                </div>';
          }
          }
          
     ?>
    </div>
    
  </div>
  </div>
  <script type="text/javascript">
      
        function themgiohang(productId,size, num){
          $.post('cartt/ajax_requestt.php', {
              'action': 'cart',
              'id': productId, 
              'size': size,  
              'num': num
          }, function(data){
              location.reload()
          })
      }
      function thaydoisize(cong1){
        size = parseInt($('[name=size]').val())
        size += cong1
        if (size < 38) size = 38;
        if(size > 43) size = 43;
        $('[name=size]').val(size);
      }
      function loiam1(){
        $('[name=size]').val(Math.abs($('[name=size]').val()))
        }

      function thaydoi(congtru1){
        num = parseInt($('[name=num]').val())
        num += congtru1
        if(num < 1) num = 1;
        $('[name=num]').val(num);
      }
      function loiam(){
        $('[name=num]').val(Math.abs($('[name=num]').val()))
      }

     
  </script>
  <?php 
    require_once('layoutss/footer.php')
   ?>
	
</body>
</html>