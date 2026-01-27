<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>
</head>

<body>
<h1> ชินพัฒน์ ลิ่มดิลกธรรม (คิว) </h1>

<form method="post" action="">
ชื่อ-สกุล <input type="text" name="fullname" required autofocus>* <br>
เบอร์โทร <input type="text" name="phone" required>* <br>
ความสูง <input type="number" name="height" max="220" min="100" required> เซนติเมตร<br>
สีที่ชอบ <input type="color" name="color" required>* <br>
สาขาวิชา
<select name="major">
	<option value="การบัญชี">การบัญชี</option>
    <option value="การจัดการ">การจัดการ</option>
    <option value="การตลาด">การตลาด</option>
    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
</select> <br>

<!--<input type="submit" name="Submit" value="สมัครสมาชิก">-->
<button type="submit" name="Submit">สมัครสมาชิก</button>
<button  type="reset">รีเซ็ต</button>
<button type="button" onClick="window.location='https://www.msu.ac.th/';">MSU</button>
<button type="button" onClick="window.print();">พิมพ์</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
	$fullname=$_POST['fullname'];
	$phone=$_POST['phone'];
	$height=$_POST['height'];
	$color=$_POST['color'];
	$major=$_POST['major'];
	
	echo "ชื่อ-สกุล:".$fullname."<br>";
	echo "เบอร์โทร:".$phone."<br>";
	echo "ความสูง:".$height."ซม.<br>";
	echo "สีที่ชอบ:".$color."<div style='background:{$color}'> . </div>";
	echo "สาชาวิชา:".$major."<br>";
}
?>
</body>

</html>
