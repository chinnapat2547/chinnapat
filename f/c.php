<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>
</head>

<body>
<h1> ชินพัฒน์ ลิ่มดิลกธรรม (คิว) </h1>

<form method="post" action="">
กรอกคำแนน <input type="number" max = "100" min = "0"           name="a" autofocus required>
<button type="submit" name="Submit">OK </button>
</form>
<hr>

<?php

if (isset($_POST['Submit'])) {
$score = $_POST['a'];
if ($score >= 80) {
echo "<strong>ได้คะแนน ($score) <br></strong>" ;
echo "<strong>ได้เกรด A</strong> สุดยอด" ;
} else if ($score >= 75){
echo "<strong>ได้คะแนน ($score) <br></strong>" ;
echo "<strong>ได้เกรด B+</strong> เอาเรื่อง" ;
} else if ($score >= 70){
echo "<strong>ได้คะแนน ($score) <br></strong>" ;
echo "<strong>ได้เกรด B</strong> เก่งอยู่" ;
} else if ($score >= 65){
echo "<strong>ได้คะแนน ($score) <br></strong>" ;
echo "<strong>ได้เกรด C+</strong> พอใช้" ;
} else if ($score >= 60){
echo "<strong>ได้คะแนน ($score) <br></strong>" ;
echo "<strong>ได้เกรด C</strong> งั้นๆ" ;
} else if ($score >= 55){
echo "<strong>ได้คะแนน ($score) <br></strong>" ;
echo "<strong>ได้เกรด D+</strong> อ่านหนังสือมั้ง" ;
} else if ($score >= 50){
echo "<strong>ได้คะแนน ($score) <br></strong>" ;
echo "<strong>ได้เกรด D</strong> ลงเรียนใหม่ก็ดี" ;
} else 
echo "<strong>ได้เกรด F</strong> ไปลงเรียนใหม่ไป";
}

?>
</body>

</html>