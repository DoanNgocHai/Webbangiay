<?php
  session_start();
  require_once($baseUrl.'../utils/utility.php');
  require_once($baseUrl.'../database/dbhelper.php');

  $user = getUserToken();
  if($user == null) {
    header('Location: '.$baseUrl.'authen/login.php');
    die();
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/128/1029/1029132.png" type="image/x-icon"/>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?=$baseUrl?>../assets/css/dashboard.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
  .nav li{
    margin-right: 30px;
  }
  .nav li a{
    color: black;
    font-weight: bold;
  }
</style>

<body>
<div>
  <div style="background-color: white;text-align: right;margin-top: -50px; padding-right: 20px;width: 100%;position: fixed; z-index:999999;"">
    <a href="<?=$baseUrl?>authen/logout.php">Đăng xuất</a>
  </div>
  <div >
      <ul class="nav"style=" padding-left: 300px ;background-color: white;width: 100%; box-shadow: 0 0 20px rgb(0 0 0 / 30%);position: fixed; z-index:999999;margin-top: -26px;">
        <li class="nav-item" >
          <a class="gth nav-link a" href="<?=$baseUrl?>">TRANG CHỦ</a>
        </li>
        <li class="nav-item" >
          <a class="gth nav-link" href="<?=$baseUrl?>category">CATEGOTY</a>
        </li>
        <li class="nav-item" >
          <a class="gth nav-link" href="<?=$baseUrl?>product">QUẢN LÝ SẢN PHẨM</a>
        </li>
        <li class="nav-item" >
          <a class="gth nav-link" href="<?=$baseUrl?>order">QUẢN LÝ ORDER</a>
        </li>
        <li class="nav-item" >
          <a class="gth nav-link" href="<?=$baseUrl?>user">QUẢN LÝ NGƯỜI DÙNG</a>
        </li>
      </ul>  

  </div>


      