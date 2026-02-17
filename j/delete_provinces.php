<?php 
    include_once("connectdb.php");
    
    $id = $_GET['id'];
    
    $sql = "DELETE FROM `provinces` WHERE p_id = '$id' ";
    
    mysqli_query($conn, $sql) or die ("ลบไม่ได้: " . mysqli_error($conn));

    echo "<script>";
    echo "window.location='b.php';";
    echo "</script>";
?>