<?php
	$title = 'Quản Lý Đơn hàng';
	$baseUrl = '../';
	require_once('../layouts/header.php');

	$sql = "select * from Orders order by status asc, order_date desc";
	$data = executeResult($sql);
?>

<div class="row" style="padding-top: 50px; margin-top: 50px;">
	<div class="container ">
		<h3>Quản Lý Đơn hàng
		</h3>

		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th>STT</th>
					<th>Họ & tên</th>
					<th>SĐT</th>
					<th>Email</th>
					<th>Chủ Đề</th>
					<th>Nội Dung</th>
					<th>Ngày Tạo</th>
					<th style="width: 140px">Xét đơn</th>
					<th style="width: 140px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '<tr>
					<th>'.(++$index).'</th>
					<td>'.$item['fullname'].'</td>
					<td>'.$item['phone_number'].'</td>
					<td>'.$item['email'].'</td>
					<td>'.$item['address'].'</td>
					<td>'.$item['note'].'</td>
					<td>'.$item['order_date'].'</td>
					<td style="width: 50px">';
		if($item['status'] == 0) {
			echo '<button onclick="changeStatus('.$item['id'].',1)" class="btn btn-warning ">Phê duyệt</button>
				<button onclick="changeStatus('.$item['id'].',2)" class="btn btn-danger">Hủy đơn</button>';
		}	
		else if($item['status'] == 1) {
			echo '<label class="btn btn-success">phê duyệt</label>';
		}
		else{
			echo '<label class="btn btn-danger">Hủy đơn</label>';
		}
			echo	'<td><a href="order_details.php?id='.$item['id'].'">Chi tiết đơn</a></td>';
		echo '</td>
				</tr>';
	}
?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	function changeStatus(id, status){
		$.post('form_api.php',{
			'id':id,
			'status':status,
			'action':'update_status'
		},function(data){
			location.reload();
		})
	}
</script>
<?php
	require_once('../layouts/footer.php');
?>