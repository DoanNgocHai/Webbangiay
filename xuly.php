<?php
	require_once('database/dbhelper.php');
	if(!empty($_POST)) {
		$id = getPost('id');

		$fullname = getPost('fullname');
		$email = getPost('email');
		$phone_number = getPost('phone_number');
		$address = getPost('address');
		
		$created_at = $updated_at = date("Y-m-d H:i:s");
		$sql = "update User set fullname = '$fullname', email = '$email', phone_number = '$phone_number', address = '$address', updated_at = '$updated_at' where id = $id";
		
		execute($sql);
		$sql = "select * from User where email = '$email' and deleted = 0";
		$userExist = executeResult($sql, true);
		$_SESSION['user'] = $userExist;
?>	
	<script type="text/javascript">
		window.location.href = "Thongtin.php";
	</script>	
	
<?php } ?>