<?php
	$title = 'Thông Tin Tài Khoản'; 
	require_once('layoutss/header.php');
    require_once('xuly.php');

?>
	<style type="text/css">
 	.form-group input{
 		width: 420px;


 	}
 	</style>

<div class="container" style="margin-top: 100px; padding: 10px 280px">
	<div style=" background-color: #cfc6c6; border-radius: 10px; padding: 20px 20px;">
		<h2 style="color:#f7ab25; text-align: center;border-bottom: 2px solid #5e5b5b;font-family: serif ;padding-bottom: 15px;padding-top: 10px;">THAY ĐỔI THÔNG TIN TÀI KHOẢN</h2>
        <div class="panel panel-primary">
			<div class="panel-body" style="padding-left:135px; padding-top:10px">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Họ & Tên:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$user1['fullname']?>">
					  <input type="text" name="id" value="<?=$user1['id']?>" hidden="true">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$user1['email']?>">
					</div>
					<div class="form-group">
					  <label for="phone_number">SĐT:</label>
					  <input required="true" type="tel" class="form-control" id="phone_number" name="phone_number" value="<?=$user1['phone_number']?>">
					</div>
					<div class="form-group">
					  <label for="address">Địa Chỉ:</label>
					  <input required="true" type="text" class="form-control" id="address" name="address" value="<?=$user1['address']?>">
					</div>
					<button class="btn btn-success" style="margin-left: 210px;">Thay Đổi <i class="bi bi-folder-symlink"></i></button>
				</form>
			</div>
			<a href="Thongtin.php"><button class="btn btn-outline-danger" style="margin-top: -46px; margin-bottom: 20px; margin-left: 230px;"><i class="bi bi-arrow-return-left">Quay lại</i></button></a>
		</div>
	</div>
</div>



<?php
	require_once('layoutss/footer.php')
?>