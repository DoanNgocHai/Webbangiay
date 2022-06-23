<?php
	session_start();

	require_once('../../utils/utility.php');
	require_once('../../database/dbhelper.php');
	require_once('process_form_register.php');
	
	$user = getUserToken();
	if($user != null) {
		header('Location: ../');
		die();
	}





?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
	<link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20191122/original/pngtree-sneakers-for-tennis-icon-simple-style-png-image_5177989.jpg" />
	<title>Đăng Ký Tài Khoản</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<style>
		.panel {
			width: 500px;
			margin: 0px auto;
		}

		.btn {
  			z-index: 1;
  			position: relative;
  			font-size: inherit;
  			font-family: inherit;
  			color: white;
  			padding: 0.5em 1em;
  			outline: none;
  			border: none;
 			background-color: hsl(236, 32%, 26%);
  			overflow: hidden;
  			transition: color 0.4s ease-in-out;
		}

.btn::before {
  	content: '';
  	z-index: -1;
  	position: absolute;
  	top: 100%;
  	right: 100%;
  	width: 1em;
  	height: 1em;
  	border-radius: 50%;
  	background-color: #3cefff;
  	transform-origin: center;
  	transform: translate3d(50%, -50%, 0) scale3d(0, 0, 0);
  	transition: transform 0.45s ease-in-out;
}

.btn:hover {
  cursor: pointer;
  color: #161616;
}

.btn:hover::before {
  transform: translate3d(50%, -50%, 0) scale3d(15, 15, 15);
}
#main {
	position: relative ;
	width: 624px;

	
}
.container {
	position: absolute;
	top: 40px;
	left : 800px;

}
.bgrimg {
	width: 1535px;
	height: 745px;
}
	</style>
</head>
<body>
	<div id="main">
		<img src="https://cdn.pixabay.com/photo/2017/09/10/18/55/baby-shoes-2736621_960_720.jpg" alt="IMG" class="bgrimg">

		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="text-center" style="color:#df6609">Đăng Ký Tài Khoản</h2>
					<h6 style="color: red"> <?=$msg?> </h6>
				</div>

				<div class="panel-body" style="color:#4eddb9">
					<form method="post" onsubmit="return validateForm();">
						<div class="form-group">
						  <label for="usr">FullName:</label>
						  <input required="true" type="text" class="form-control" id="usr" name="fullname">
						</div>
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input required="true" type="email" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
						  <label for="phone">Phone:</label>
						  <input type="number" class="form-control" id="phone" name="phone">
						</div>
						<div class="form-group">
						  <label for="pwd">Password:</label>
						  <input required="true" type="password" class="form-control" id="pwd" name="password" minlength="6">
						</div>
						<div class="form-group">
						  <label for="confirmation_pwd">Confirmation Password:</label>
						  <input required="true" type="password" class="form-control" id="confirmation_pwd" minlength="6">
						</div>
						<div class="form-group">
						  <label for="address">Address:</label>
						  <input type="text" class="form-control" id="address" name="address">
						</div>
						<p>
							<a style="color:black" href="login.php">Đã có tài khoản</a>
						</p>
						<button class="btn btn-success">Đăng Ký</button>
					</form>	
					<a href="../../index.php" ><button class="btn btn-secondary"style="margin-top:20px">Quay lại</button></a>
				</div>	
			</div>
		</div>
	</div>
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
</body>
</html>	