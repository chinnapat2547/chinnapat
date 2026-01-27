<?php
                    $host = "localhost";
					$user = "root";
					$pws = "chinnapat";
					$db = "4104db";
					$conn = mysqli_connect($host, $user, $pws, $db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้"); 
					mysqli_query($conn, "SET NAMES utf8");
?>