<?php
require_once('database/dbhelper.php');
if(!empty($_POST)) {
	$id = getPost('id');
	$role_id = getPost('role_id');
	$passwordold1 = getPost('passwordold');
	$password1 = getPost('password');
	
	$passwordold = getSecurityMD5($passwordold1);
	$password = getSecurityMD5($password1);
	$created_at = $updated_at = date("Y-m-d H:i:s");
	$sql = "select * from User where id = $id";
	$xuat = executeResult($sql,true);
	$mk = $xuat['password'];
	if($passwordold==$mk){
		$sql = "update User set password = '$password', updated_at = '$updated_at' where id = $id";
	execute($sql);
	?>
	<script type="text/javascript">
		window.location.href = "Thongtin.php";
	</script>
	<?php } 
	else{ ?>
	<script type="text/javascript">
		alert("Mật khẩu hiện tại không dúng");

	</script>

	<?php } ?>

<?php } ?>
	
	



