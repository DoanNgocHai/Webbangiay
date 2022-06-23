<?php 
	$title = 'Thông Tin Tài Khoản'; 
	require_once('layoutss/header.php');
	require_once('mk.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <style type="text/css">
 	.form-group input{
 		width: 420px;

 	}

 </style>
 <body>
 <div style="background-color:#fff9f2">
 	<div class="container" style="padding: 0px 280px;margin-top: 100px; padding-top:10px">
 		<div style=" background-color: #cfc6c6; border-radius: 10px;">
 			<div class="panel panel-primary" >
	 			<div class="panel-heading" style="padding: 20px 20px">
						<h2 class="text-center" style="color:#f7ab25;font-family: serif ;padding-bottom: 15px; border-bottom: 2px solid #5e5b5b;">THAY ĐỔI MẬT KHẨU</h2>
					</div>
	 			<div class="panel-body"style="padding-left:135px">
			 		<form method="post" onsubmit="return validateForm();" style="">
					 	<div class="form-group" >
						  <label for="pwdd">Mật Khẩu Hiện Tại</label>
						  <input  required="true" type="password" class="form-control" id="pwdd" name="passwordold" minlength="6">
						  <input type="text" name="id" value="<?=$user1['id']?>" hidden="true">

						</div>
						<div class="form-group" >
						  <label for="pwd">Mật Khẩu Mới</label>
						  <input required="true" type="password" class="form-control" id="pwd" name="password" minlength="6">
						</div>
						<div class="form-group">
						  <label for="confirmation_pwd">Xác Minh Mật Khẩu:</label>
						  <input required="true"   type="password" class="form-control" id="confirmation_pwd" minlength="6">
						</div>
						<button class="btn btn-success" style="margin-left: 210px;">Xác Nhận <i class="bi bi-folder-symlink"></i></button>
					 </form>
					 
			 	</div>
		 	<a href="Thongtin.php"><button class="btn btn-outline-danger" style="margin-top: -46px; margin-bottom: 20px; margin-left: 230px;"><i class="bi bi-arrow-return-left">Quay lại</i></button></a>
	 		</div>
 		</div> 		
	 		
	</div>
</div>
	 	
		 	

<?php  
	require_once('layoutss/footer.php');
?>

 </body>
 </html>
 <script type="text/javascript">
	function validateForm() {
		$pwd = $('#pwd').val();
		$confirmPwd = $('#confirmation_pwd').val();
		if($pwd != $confirmPwd) {
			alert("Mật khẩu không khớp, vui lòng kiểm tra lại")
			return false
		}
		return true
	}
</script>