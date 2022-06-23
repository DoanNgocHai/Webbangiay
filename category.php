<?php
    $title = 'Trang Hãng Giày'; 
    require_once('layoutss/header.php');
    $category_id = getGet('id');

    if($category_id == null || $category_id ==''){

    }
    $sql ="select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.category_id = $category_id order by Product.updated_at desc limit 0,20"; 

    $lastesItem = executeResult($sql);

 ?>
   

   <!-- product stast -->
  <div style="background-color:#fff9f2">
    <div style="margin-top: 100px; background-color:#ebd3bc;padding-top: 10px;">
       <h2 style="padding-left: 30PX;padding-bottom: 10px ;border-bottom: 3px solid #8c4804 ; margin-bottom: 20px;">MỤC SẢN PHẨM</h2>
    </div>
   
  <div class="container" style="padding:2px 100px">
    <div class="row" style="background-color: #f5f8fa; ">
      <?php 
        foreach($lastesItem as $item){
          if($item['deleted']==0){
          echo '<div class="col-md-3 col-6 product-item" style="border:10px solid #404c54;border-radius: 10px;">
        <div>
          <button class="btn btn-success them"style=" margin-left: 10%; margin-right: 10%; width: 80%; border-radius: 5px;"onclick="themgiohang('.$item['id'].',38,1)"><i class="bi bi-cart-plus-fill"></i>Thêm giỏ hàng</button>
            
          <a href="detell.php?id='.$item['id'].'">
           <button class="btn btn-secondary them"style=" margin-left: 10%; margin-right: 10%; margin-top: 15px; width: 80%; border-radius: 5px;"><i class="bi bi-cart-plus-fill"></i>Xem sản phẩm</button>
          </a>           
        </div>
                
                  <a href="detell.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%; height:220px;margin-top:-76px; border-radius: 5px"></a>
                  
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
    require_once('layoutss/footer.php')
   ?>
	
</body>
</html>