<?php
session_start();
?>


<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>
</head>

<body>
<h1>a.php</h1>

<?php
    $_SESSION['name'] = "ชินพัฒน์ ลิ่มดิลกธรรม";
    $_SESSION['nickname'] = "คิว";
    echo $_SESSION['name'];
?>
</body>

</html>