<?php 
	$title = 'Trang Tài Khoản'; 
	require_once('layoutss/header.php');
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 <div style="background-color:#fff9f2">
 <div class="container" style="margin-top: 100px; padding: 0px 100px; padding-top: 10px;">
	<div class="col-md-12 table-responsive" style=" ; background-color: #cfc6c6; border-radius: 10px;">
		<h2 style="margin-top:20px; color:#1b6be3; text-align: center;border-bottom: 2px solid #5e5b5b;font-family: serif ;">THÔNG TIN TÀI KHOẢN</h2>
        <div class="panel panel-primary"  style="margin-top:40px; margin-left: 80px; ">
			<div class="panel-body">
					<div class="form-group">
					  <label style="font-size: 18px; font-weight: bold;">Họ & Tên:  </label>
					  <label style="color: #000000;"><?=$user1['fullname']?></label>
					</div>
				
					<div class="form-group">
					  <label style="font-size: 18px; font-weight: bold;">Email:  </label>
					  <label> <?=$user1['email']?></label>
					</div>
					<div class="form-group">
					  <label style="font-size: 18px; font-weight: bold;">SĐT:  </label>
					  <label> <?=$user1['phone_number']?></label>
					</div>
					<div class="form-group">
					  <label style="font-size: 18px; font-weight: bold;">Địa Chỉ:  </label>
					  <label> <?=$user1['address']?></label>
					</div>
					<a href="thaydoiTT.php"><button class="btn btn-secondary">Thay Đổi Thông Tin</button></a>

					<a href="thaydoi.php"><button class="btn btn-secondary">Thay Đổi Mật Khẩu</button></a><br>					
					<a href="index.php"><button class="btn btn-outline-danger" style="margin-top: 10px; margin-bottom: 20px;"><i class="bi bi-arrow-return-left">Quay lại</i></button></a>
				
			</div>
		</div>
	</div>
</div>
</div>
 <?php 
	require_once('layoutss/footer.php');
 ?>
 </body>
 </html>