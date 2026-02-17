<?php 
	include_once("connectdb.php");
    $id = $_GET['id'];
	$sql = "DELETE FROM `regions` WHERE r_id='{$_GET['id']}'";
	mysqli_query($conn, $sql); or die ("ลบไม่ได้");

    echo "<script>";
    echo "window.location='a.php'";
    echo "</script>";
?>
