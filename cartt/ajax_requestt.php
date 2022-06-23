<?php
  session_start();
  require_once('../utils/utility.php');
  require_once('../database/dbhelper.php');

  $action = getPost('action');

  switch ($action) {
    case 'cart':
        addcart();
      break;
    case 'sua_cart':
      suacart();
      break;
    case 'checkout':
      checkout();
      break;
    
   
  }
  function checkout(){
    if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0){
      return;
    }
    $fullname = getPost('fullname');
    $phone_number = getPost('phone');
    $address = getPost('address');
    $note = getPost('note');

    $userID = 0;
    $email = 0;
    $user = getUserToken();
    if($user != null){
      $userID = $user['id'];
      $email = $user['email'];
    }
    $orderDatr = date('Y-m-d H:i:s');
    $totalMoney =0;
    foreach($_SESSION['cart'] as $item){
      $totalMoney += $item['price'] * $item['num'];
    }
    $sql = "insert into Orders(user_id, fullname, email, phone_number, address, note, order_date, status, total_money) values($userID,'$fullname','$email','$phone_number','$address','$note','$orderDatr',0,'$totalMoney')";
    execute($sql);
    $sql = "select * from Orders where order_date = '$orderDatr'";
    $OderItem = executeResult($sql, true);
    $OderID = $OderItem['id'];
    foreach($_SESSION['cart'] as $item){
      $product_id = $item['id'];
      $price = $item['price'];
      $num = $item['num'];
      $size = $item['size'];
      $totalmoney = $num * $price;

      $sql = "insert into Order_Details(order_id, product_id,price, num, total_money,SIZE) values ($OderID, $product_id, $price, $num, $totalmoney,$size )";
      execute($sql);
    }
    unset($_SESSION['cart']);
  }

  function suacart(){
    $id = getPost('id');
    $size = getPost('size');
    $num = getPost('num');

    if(!isset($_SESSION['cart'])){
      $_SESSION['cart']=[];
    }
    for($i=0; $i < count($_SESSION['cart']); $i++){
      if($_SESSION['cart'][$i]['id']== $id){ 
        $_SESSION['cart'][$i]['size'] = $size;
        $_SESSION['cart'][$i]['num'] = $num;     
        if($num <= 0 ){
          array_splice($_SESSION['cart'], $i, 1);
        }
        break;
      }
    }
  }

  function addcart(){
    $id = getPost('id');
    $size = getPost('size');
    $num = getPost('num');

    if(!isset($_SESSION['cart'])){
      $_SESSION['cart']=[];
    }
    $kiemtra = false;
    for($i=0; $i < count($_SESSION['cart']); $i++){
      if($_SESSION['cart'][$i]['id']== $id){  
        $_SESSION['cart'][$i]['size'] = $size;   
        $_SESSION['cart'][$i]['num'] += $num;
        $kiemtra = true;
        break;
      }
    }
    if(!$kiemtra){
      $sqll ="select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.id = $id"; 
    
      $product= executeResult($sqll, true);
      $product['size'] = $size;
      $product['num'] = $num;
      $_SESSION['cart'][] = $product;

    }
  }
