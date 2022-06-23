<?php
	$title = 'Thong tin đơn hàng';
	$baseUrl = '../';
	require_once('../layouts/header.php');
	$orderId = getGet('id');
	$sql = "select Order_details.*, Product.title, Product.thumbnail from  Order_details left join Product on Order_details.product_id = Product.id where Order_details.order_id = $orderId";
	$data = executeResult($sql);
?>

<div class="row" style="padding-top: 50px; margin-top: 50px;">
	<div class="container table-responsive">
		<h3>Chi tiết đơn hàng</h3>

		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>	
					<th>Hình ảnh</th>
					<th>Sản phẩm</th>
					<th>số lượng</th>
					<th>Size</th>

					<th>Tổng tiền</th>
				</tr>
			</thead>
			<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo 	'<tr>
					<th><img src="'.fixUrl($item['thumbnail']).'" style="height:120px; width: 120px;"></td>
					<td>'.$item['title'].'</td>
					<td>'.$item['num'].'</td>
					<td>'.$item['SIZE'].'</td>
					<td>'.number_format($item['total_money']).'VND</td>
				</tr>';
	}
?>
			</tbody>
		</table>
	</div>
</div>


</script>
<?php
	require_once('../layouts/footer.php');
?>