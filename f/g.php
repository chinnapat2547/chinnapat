<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>
</head>

<body>
<h1>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</h1>
<form method="post" action="">
กรอกตัวเลข <input type="number" max = "1000" min = "2"           name="a" autofocus required>
<button type="submit" name="Submit">OK </button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
	
	$m = $_POST['a'];
	
	for($i=1; $i<=12; $i++){
		$b = $m * $i ;
		echo "{$m} x {$i} = {$b} <br>";
}
}
?>
</body>

</html>