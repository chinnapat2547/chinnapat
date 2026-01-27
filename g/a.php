<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>
</head>

<body>
<h1> ชินพัฒน์ ลิ่มดิลกธรรม (คิว) </h1>

<table border="1">
<tr>
	<th>Order ID</th>
    <th>สินค้า</th>
    <th>ประเภทสินค้า</th>
    <th>วันที่</th>
    <th>ประเทศ</th>
    <th>จำนวนเงิน</th>
    <th>รูป</th>
</tr>

<?php
	include_once("connectdb.php");
	//$sql = "SELECT * FROM `popsupermarket` 
	//WHERE p_country = 'Sweden' 
	//AND p_category = 'Vegetables'
	//ORDER BY p_product_name ASC ";
	$sql = "SELECT * FROM `popsupermarket`";
	$rs = mysqli_query($conn, $sql);
	$total = 0;
	while ($data = mysqli_fetch_array($rs)){
		$total += $data['p_amount'];
?>

<tr>
	<td><?php echo $data['p_order_id'];?></td>
    <td><?php echo $data['p_product_name'];?></td>
    <td><?php echo $data['p_category'];?></td>
    <td><?php echo $data['p_date'];?></td>
    <td><?php echo $data['p_country'];?></td>
    <td align="right"><?php echo number_format($data['p_amount'],0);?></td>
    <td><img src ="IMG/<?php echo $data['p_product_name'];?>.jpg" width="50"></td>
</tr>
<?php } ?>

<tr>
	<td></td>
	<td></td>
    <td></td>
    <td></td>
    <td></td>
    <td align="right"><b><?php echo number_format($total,0);?></b></td>
    <td></td>
</tr>
</table>
</body>

</html>