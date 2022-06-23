<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
      <footer style="background-color: #63615e; margin-top:10px">
        <div class="ps-footer">
          <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-4">
                  <div class="ps-iconbox ps-iconbox--inverse">
                    <div class="footer-text">
						          <h3>Hỗ Trợ Khách Hàng </h3>
                      <a href="#">Hướng dẫn chọn size</a><br>
                      <a href="#">Chính sách khách hàng thân thiết</a><br>
                      <a href="#">Chính sách đổi hàng</a><br>
                      <a href="#">Thanh toán, Giao nhận</a><br>
                      <a href="#">Bug hàng bị chém</a><br>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-4">
                  <div class="ps-iconbox ps-iconbox--inverse">
                    <div class="footer-text">
                      <h3>Hệ Thống Cửa Hàng </h3>
                      <a href="#">Nhà Trắng, Mỹ</a><br>
                      <a href="#">Tokyo, Nhật Bản</a><br>
                      <a href="#">Hà Nội, Việt Nam</a><br>
                      <a href="#">ĐH Kiến Trúc, Đà Nẵng</a><br>
                      <a href="#">Trái tim của em</a><br>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-4">
                  <div class="ps-iconbox ps-iconbox--inverse">
                    <div class="footer-text">
                      <h3>Tiện Ích </h3>
                      <a href="index.php">Trang Chủ</a><br>
                      <a href="https://www.facebook.com/doanngochai2001">Facebook</a><br>
                      <a href="https://www.instagram.com/hai2262001/">Intasgram</a><br>
                      <a href="https://www.youtube.com/watch?v=f7kD3Sr-qDQ">Youtube</a><br>
                      <a href="https://www.youtube.com/watch?v=s8dd9664d8w">Zalo</a><br>
                  
                    </div>
                  </div>
                </div>
          </div>
        </div>
     </footer>
    <!--Gior hang -->
    <?php 
      if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=[];
      }
      $count = 0;
    
      foreach( $_SESSION['cart'] as $item){
        $count += $item['num'];
      }
     ?>
   <div class="giohang">
      <?php if($count >0){ ?>
        <a href="cart.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6CfqHpxO31stJFxlxxnQFaTqQI90NUI18ZA&usqp=CAU" style="height: 50px; width: 50px; border-radius: 60px"></a>
      <span><?=$count?></span>
      <?php } else{} ?>

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
   </script>
   <script type="text/javascript">
    var login = document.querySelector('#btn-Dangky')
    var ddlogin = document.getElementById('btn-dd')
    var logout = document.querySelector('#btn-Dangnhap')
    var thoat = document.getElementById('btn-thoat')
    var logout1 = document.querySelector('#logout')
    var login1 = document.querySelector('#login')
  
    
    ddlogin.onclick = function() {      
        login1.classList.remove('login')
    }
    login.onclick = function() {
        login1.classList.add('logout')
        logout1.classList.remove('logout')
    }
    logout.onclick = function() {
        logout1.classList.add('logout')
        login1.classList.remove('logout')
    }
  </script>
    
</body>
</html>