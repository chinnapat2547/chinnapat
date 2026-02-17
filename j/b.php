<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ชินพัฒน์ ลิ่มดิลกธรรม(คิว)</title>
</head>

<body><h1> ข้อมูลจังหวัด ชินพัฒน์ ลิ่มดิลกธรรม(คิว) </h1>

<form method="post" action="" enctype="multipart/form-data">
    ชื่อจังหวัด <input type="text" name="pname" autofocus required><br>
    รูปภาพ<input type="file" name="pimage"><br>
    ชื่อภาค
    <select name="rid">
<?php
    include_once("connectdb.php");
    $sql3 = "SELECT * FROM `regions` ORDER BY `regions`.`r_id` ASC";
    $rs3 = mysqli_query($conn, $sql3);
    while($data3 = mysqli_fetch_array($rs3)){
?>
    <option value="<?php echo $data3['r_id'];?>"><?php echo $data3['r_name'];?></option>
<?php } ?>
    </select><br><br>
    <button type="submit" name="Submit">บันทึก</button>
</form>
<br>
<br>

<?php 
if(isset($_POST['Submit'])){
    include_once("connectdb.php");
    $pname = $_POST['pname'];
    $rid = $_POST['rid'];
    
    // แก้ไข 2: เปลี่ยน my_file เป็น pimage ให้ตรงกับ form
    $ext = pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION);
    
    // แก้ไข 3: ลบวงเล็บก้ามปูที่เกินมา และแก้ $rif เป็น $rid
    // หมายเหตุ: ตรงนี้ต้องดูว่าในฐานข้อมูล column ที่ 3 เก็บแค่นามสกุลไฟล์ หรือชื่อไฟล์เต็มๆ
    // ถ้าเก็บแค่นามสกุลไฟล์ (เช่น .jpg) ให้ใช้โค้ดด้านล่างนี้:
    $sql2 = "INSERT INTO `provinces` VALUES (NULL, '{$pname}', '.{$ext}', '{$rid}' )";
    
    mysqli_query($conn, $sql2) or die ("insert ไม่ได้: " . mysqli_error($conn));
    $pic_id = mysqli_insert_id($conn);
    
    // แก้ไข 4: อัปโหลดไฟล์
    copy($_FILES['pimage']['tmp_name'], "imgs/".$pic_id.".".$ext);
}
?>

<table border="1">
    <tr>
        <th>รหัส</th>
        <th>ชื่อจังหวัด</th>
        <th>รูปภาพ</th>
        <th>ภาค</th>
        <th>ลบ</th>
    </tr>

<?php
    include_once("connectdb.php");
    $sql = "SELECT * FROM `provinces` AS p 
    INNER JOIN `regions` AS r 
    ON p.r_id = r.r_id 
    ORDER BY p.p_name ASC";
    $rs = mysqli_query($conn, $sql);
    
    while($data = mysqli_fetch_array($rs)){
?>
    <tr>
        <td><?php echo $data['p_id']; ?></td>
        <td><?php echo $data['p_name']; ?></td>
        <td><img src="imgs/<?php echo $data['p_id'];?><?php echo $data['p_ext'];?>" width="120"></td>
        <td><?php echo $data['r_name']; ?></td>

        <td width="50" align="center">
            <a href="delete_provinces.php?id=<?php echo $data['r_id']; ?>" onclick="return confirm('ยืนยันการลบ?');">
            <img src="imgs/bin.png" width="50">
    </tr>
<?php
    } 
?>

</table>

</body>
</html>