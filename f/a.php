     <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>
</head>

<body>
<h1> ชินพัฒน์ ลิ่มดิลกธรรม (คิว) </h1>

<?php
	echo "บทที่ 10 PHP <br>";
	print ("วิชาเว็บโปรแกรมมิ่ง <br>");
	
	$name = "Chinnapat Limdilokthum";
	$age = 21.5;
	
	echo gettype($name);
	echo "<br>";
	echo gettype($age);
	echo "<hr>";
	var_dump ($age);
	echo "<br>";
	var_dump ($name);
	echo "<br>";
	echo "$name";
	echo "<hr>";
	
	$a = 10;
	$b = 5;
	$c = 2;
	$x = $a + $b * $c;
	echo "ผลรวมของ a+b*c = $x";
	
?>

</body>
</html>