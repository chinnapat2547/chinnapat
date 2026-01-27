<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>
</head>

<body>
<h1>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</h1>
<form method="post" action="">
กรอกรหัสนิสิต <input type="number" name="a" autofocus required>
<button type="submit" name="Submit">OK </button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
	$id = $_POST['a'];
	$y = substr($id, 0,2);
	echo "{$y}";
	echo "<img src='http://202.28.32.210/picture/{$y}/{$id}.jpg' width='400'> ";
		//echo "{$y} <br>";
}

?>
</body>

</html>