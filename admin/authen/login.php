<?php
	session_start();
	require_once('../../utils/utility.php');
	require_once('../../database/dbhelper.php');
	require_once('process_form_login.php');

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
	<title>Đăng Nhập</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Material+Icons"
rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
rel="stylesheet">
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
	width: 224px;

	
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
	span{
			transform: scale(0.8,0.8);
			position: relative;
			margin-left: 400px;
			padding-left: 60px;
			top: -30px;
			
			cursor: pointer;
		}
	</style>
	
</head>
<body>
<div>
	<div id="main">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKOb5hPunJ3XtYorxbvvZ7o8xRxh84uONfB_e3EHFa6toVTikD5EVqCU_6KnHYeTibuvM&usqp=CAU" alt="IMG" class="bgrimg">

		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="text-center" style="color:#df6609">Đăng Nhập Tài Khoản</h2>
					<h6 style="color: red"> <?=$msg?> </h6>
				</div>
				<div class="panel-body" style="color:#4eddb9">

					<form method="post">		
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input required="true" type="email" class="form-control" id="email" name="email">
						</div>
						
						<div class="form-group">
						  <label for="pwd">Password:</label>
						  <input required="true" type="password" class="form-control" id="pwd" name="password" minlength="6">
						  <span 

						  			class="material-icons-outlined" onclick="nhap(this)">visibility
							</span>
						</div>
						
						<p>
							<a style="color:black" href="register.php">Đăng ký tài khoản</a>
						</p>
						<button class="btn btn-success">Đăng Nhập</button>
		
					</form>	
					<a href="../../index.php" ><button class="btn btn-secondary"style="margin-top:20px">Quay lại</button></a>
				</div>	
			</div>
		</div>
	</div>
</div>
	<script type="text/javascript">
		var e = document.getElementById("pwd");
		function nhap(c){				
			if(e.type == "password"){
				e.type = "text";
				c.innerHTML="visibility_off";
			}
			else{
				e.type = "password";
				c.innerHTML="visibility";
			}
		}

	</script>

</body>
</html>