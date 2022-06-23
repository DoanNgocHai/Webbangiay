<?php

$fullname = $email = $msg = '';

if(!empty($_POST)) {
	$fullname = getPost('fullname');
	$email = getPost('email');
	$phone_number = getPost('phone');
	$pwd = getPost('password');
	$address = getPost('address');

	//validate
	if(empty($fullname) || empty($email) || empty($pwd) || strlen($pwd) < 6) {
	} else {
		//Validate thanh cong
		$userExist = executeResult("select * from User where email = '$email'", true);
		if($userExist != null) {
			$msg = 'Email đã được đăng ký trên hệ thống';
		} else {
			$created_at = $updated_at = date('Y-m-d H:i:s');

			$pwd = getSecurityMD5($pwd);

			$sql = "insert into User (fullname, email,phone_number, password,address, role_id, created_at, updated_at, deleted) 
					values ('$fullname', '$email','$phone_number', '$pwd','$address', 2, '$created_at', '$updated_at', 0)";
			execute($sql);
			header('Location: login.php');
			die();
		}
	}
}