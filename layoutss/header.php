<?php
  session_start();
  require_once('utils/utility.php');
  require_once('database/dbhelper.php');

  $sql ="select * from Category";
  $menuItem = executeResult($sql);

  $sql ="select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id order by Product.updated_at desc limit 1,40"; 
  $lastesItem = executeResult($sql);
   
  $user1 =(isset($_SESSION['user'])) ? $_SESSION['user']: [];


  
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$title?></title>
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/1029/1029132.png" type="image/x-icon" />

  <link rel="stylesheet" href="./assce/font icon/themify-icons/themify-icons.css">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

	<style type="text/css">
    *{
      margin: 0;
      padding: 0;
      
    }
    p {
    padding-left: 15px;
    padding-top:10px;
    font-weight: bold;
    }
    p:hover {
      color: red;
    }

.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1250px;
}
		.nav {
      height:50px;

    }
		.nav li{
      
			text-transform: uppercase;
			margin-top: 15px;
			margin-right: 20px;
      margin-bottom: -20px;
		}


		.nav li a{
      color: inherit;
			font-weight: bold;
		}
    .carousel-inner img{
      height: 520px;
      width: 100%;
    }
    .product-item:hover{
        background-color: #d1cfc9;
      
         
    }
    .sub-menu {
        background-color:#402312;
        height: 40px;
        line-height: 40px;
        margin-bottom: 10px;
        margin-right: 30px;
        margin-left: 30px;
        padding-left: 50px;
        top: 200px;
    }
    .sub-menu li{
        white-space: nowrap;       
        height: 40px;
        list-style-type: none; 
        display:  inline;
        margin-right: 50px;
    }
    .sub-menu a{
        text-decoration: none;
    }

    .giohang{
        position: fixed;
        z-index: 999999;
        top: 330px;
        left: 5px;
    }

    
    .giohang span{
       color: white;
       background-color: #e3363e;
       border-radius: 8px;
       padding-left: 8px;
       padding-right: 8px;
      
       position: fixed;
       left: 45px;
    }

    .header {
      margin-top: -16px;
      margin-bottom: -10px;
      font-size:14px;
      text-align: right;

      width:100%;
      height: 30px;
      line-height: 30px;



    }
 
    .nav-link {
  z-index: 1;
  position: relative;
  font-size: inherit;
  font-family: inherit;
  color: white;
  padding: 0.5em 1em;
  outline: none;
  border: none;

  overflow: hidden;
  transition: color 0.4s ease-in-out;
}

.nav-link::before {
  content: '';
  z-index: -1;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  background-color: #fed700;
  transform-origin: center;
  transform: translate3d(-50%, -50%, 0) scale3d(0, 0, 0);
  transition: transform 0.6s ease-in-out;
}

.nav-link:hover {
  cursor: pointer;
  color: #161616;
}

.nav-link:hover::before {
  transform: translate3d(-50%, -50%, 0) scale3d(15, 15, 15);
}
span{
  border-right: 1px solid #ccc;
  
}
.incon {
  position: relative;
  top: -56px;
}

.product-item:hover button{
        opacity: 1;
        transform: translateY(100px);
        transition:ease-in-out 0.5s;
        z-index: 999999;
     }
    
     .product-item li{
        list-style-type: none;
     }
     .them{
        opacity: 0;

     }

/* css của phần gì header  */
     .ps-iconbox {
    text-align: center;
    margin: 0 auto;
    max-width: 400px;
    }

    .ps-iconbox__header h3 {
    font-family: "Roboto Condensed", sans-serif;
    font-size: 24px;
    line-height: 1;
    font-weight: 700;
    color: rgb(255, 195, 0);
    text-transform: uppercase;
    margin-top: 5px;
    }
    .ps-iconbox__header p, .ps-iconbox__header p a {
    font-family: "Roboto Condensed", sans-serif;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.7em;
    color: #000;
    }
    .ps-iconbox {
    text-align: center;
    margin: 0 auto;
    max-width: 400px;
    margin-top: 25px;
    }
    .ps-iconbox__header i {
    display: inline-block;
    margin-bottom: 5px;
    font-size: 50px;
    color: #fed700;
    }
    .ps-container {
    background: #e9f2f0;
    }
    .nav{
      padding-top: -15px;
    }


    /* footer */

    .footer-text h3 {
      color: black;
    }
    .footer-text a {
      color: white;
    }
    .footer-text a:hover {
      color: yellow;
    }

    .video {
    padding-top: 73px;
    }
    .hoverrr:hover{

    }
    

	</style>
</head>
<body>
	<!--MENU STAST -->
  <div class="header" style="position: fixed; z-index:999999;background-color: #fff; margin-top: -100px;">    
    <?php 
      if(isset($user1['email'])){?>
        <div style="text-align: right; margin-right: 20px;">
          <span >👑 HacKer Shop Giày</span>
          <span >🅟🅗🅞🅝🅔: 0396337628-0352796182</span>

          <span class="hoverrr"style="color: black;">
            <a href="Thongtin.php"><i class="bi bi-person-circle">          
              </i> <?php echo $user1['email']?>
            </a> 
          </span>
          
          <span style="font-weight:bold;"><a href="admin/authen/logout.php">Đăng xuất</a></span>


        </div>
          
    <?php 
      }else{?>  
        <div style="text-align: right; margin-right: 30px;">
        <span class="hk">👑 HacKer Shop Giày</span>
        <span class="ti-mobile">🅟🅗🅞🅝🅔: 0396337628-0352796182</span>
         <span style="font-weight:bold;">
            <a href="admin/authen/login.php">Đăng nhập</a>
            <a href="admin/authen/register.php">Đăng ký</a>
         </span>
        </div>
            
    <?php } ?>  
    <hr>

  </div> 

 


  <div class="flixed" style="margin-top: -70px;position: fixed; z-index:999999;background-color: #fff;box-shadow: 0 0 20px rgb(0 0 0 / 30%);width: 100%; ;height:72px;padding-left: 26px;">
      <ul class="nav"style="white-space: nowrap;">
      <div class="incon">
        <a class="nav-item" href="index.php">
          <img src="assce/img/tour/logo.png" style="width:300px; height: 210px;">
          </a>

      </div>
        <li class="nav-item" >
          <a class="gth nav-link" href="gioithieu.php">Giới Thiệu</a>

        </li>
        <?php 
            foreach($menuItem as $item){
              echo  '<li class="nav-item">
                    <a class="nav-link" href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
                  </li>';
            }
         ?> 

  </div>

  
 


   <!--MENU stop -->
   