
<?php 
    $title = 'Trang chủ';
    require_once('layoutss/header.php');
    
 ?>
  
  <div> 
   <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner" style="margin-top:100px">
    <div class="carousel-item active">
      <img src="https://giayxshop.vn/wp-content/uploads/2021/10/5875457-2048x1365.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="https://storage.googleapis.com/cdn.nhanh.vn/store/28758/bn/bannere.jpg" alt="Chicago" >
    </div>
    <div class="carousel-item">
      <img src="https://storage.googleapis.com/cdn.nhanh.vn/store/28758/bn/banner1.jpg" alt="New York">
    </div>
    <div class="carousel-item">
      <img src="https://storage.googleapis.com/cdn.nhanh.vn/store/28758/bn/banner2.jpg" alt="New York">
    </div>
    <div class="carousel-item">
      <img src="https://anhdep123.com/wp-content/uploads/2021/01/anh-giay-converse.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<section class="ps-features pt-40 pb-20 bg--cover">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-4">
                  <div class="ps-iconbox ps-iconbox--inverse">
                    <div class="ps-iconbox__header">
						          <i class="ti-star"></i>
						          <h3>Cam Kết chính hãng</h3>
						          <p>100 % Authentic</p>
                    </div>
                    <div class="ps-iconbox__content">
                      <p>Cam kết sản phẩm chính hãng từ Châu Âu, Châu Mỹ...</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-4">
                  <div class="ps-iconbox ps-iconbox--inverse">
                    <div class="ps-iconbox__header">
					          	<i class="ti-car"></i>
                      <h3>Giao hàng hỏa tốc</h3>
                      <p>Express delivery</p>
                    </div>
                    <div class="ps-iconbox__content">
                      <p>SHIP hỏa tốc 1h nhận hàng trong nội thành HCM</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-4">
                  <div class="ps-iconbox ps-iconbox--inverse">
                    <div class="ps-iconbox__header">
						          <i class="ti-headphone-alt"></i>
						          <h3>Hỗ trợ 24/24</h3>
						          <p>Supporting 24/24</p>
                    </div>
					<div class="ps-iconbox__content">
						<p>Gọi ngay <a href="#"></a> </p>
					</div>
                  </div>
                </div>
          </div>
        </div>
      </section>
  
</ul>
   <!-- banner stop -->
   <!-- product stast -->
   
<div style="background-color: #ede8da">
  
    <h2 style="margin-top: 40px;padding-top: 15px;font-family: serif ;font-family: cursive ;margin-left: 40PX; color: #f5a122">SẢN PHẨM BÁN CHẠY</h2>
  <div class="container"style=" padding: 5px 100px;">
    <div class="row" style="background-color:#f2f2f2;">
      <?php 

        foreach($lastesItem as $item){
          if($item['deleted']==0){
            echo '<div class="col-md-3 col-6 product-item"style="border:10px solid #404c54;border-radius: 10px;">
                    <div>
                      <button class="btn btn-success them"style=" margin-left: 10%; margin-right: 10%; width: 80%; border-radius: 5px;"onclick="themgiohang('.$item['id'].',38,1)"><i class="bi bi-cart-plus-fill"></i>Thêm giỏ hàng</button>
                        
                      <a href="detell.php?id='.$item['id'].'">
                       <button class="btn btn-secondary them"style=" margin-left: 10%; margin-right: 10%; margin-top: 15px; width: 80%; border-radius: 5px;"><i class="bi bi-cart-plus-fill"></i>Xem sản phẩm</button>
                      </a>           
                    </div>
                    <a href="detell.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%; height:220px;margin-top:-76px;border-radius: 5px;"></a>
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
    <?php 
      foreach($menuItem as $item){
        $sql ="select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.category_id = ".$item['id']." order by Product.updated_at desc limit 0,4"; 
        $items = executeResult($sql);
        if($items == null ) continue;
    ?>
     
      <div style="background-color: #ede8da; margin-top: 35px;">
          <h2 style="padding: 20px;margin-top: 30px; margin-left: 30PX;"><?=$item['name']?></h2>
          <div class="container"style="background-color: #f2f2f2">
            <div class="row" >
              <?php 
                foreach($items as $item){
                  if($item['deleted']==0){
                    echo '<div class="col-md-3 col-6 product-item"style="border:10px solid #404c54;border-radius: 10px;">
                        <div>
                          <button class="btn btn-success them"style=" margin-left: 10%; margin-right: 10%; width: 80%; border-radius: 5px;"onclick="themgiohang('.$item['id'].',38,1)"><i class="bi bi-cart-plus-fill"></i>Thêm vào giỏ hàng</button>
                            
                          <a href="detell.php?id='.$item['id'].'">
                           <button class="btn btn-secondary them"style=" margin-left: 10%; margin-right: 10%; margin-top: 15px; width: 80%; border-radius: 5px;"><i class="bi bi-cart-plus-fill"></i>Xem sản phẩm</button>
                          </a>           
                        </div>
                          <a href="detell.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%; height:220px; margin-top:-76px;border-radius: 5px;"></a>
                        
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
    <?php
      }
     ?>
     
  
  <?php 
    require_once('layoutss/footer.php')
   ?>
	
</body>
</html>