<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .main-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        .header-title {
            color: #0d6efd;
            font-weight: 600;
        }
        .color-preview {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-block;
            vertical-align: middle;
            border: 2px solid #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            margin-left: 10px;
        }
    </style>
</head>

<body class="d-flex align-items-center min-vh-100 py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="card main-card p-4 mb-4">
                    <div class="text-center mb-4">
                        <h2 class="header-title">ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</h2>
                        <p class="text-muted">ระบบสมัครสมาชิก</p>
                    </div>

                    <form method="post" action="">
                        
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="ระบุชื่อ-สกุลของคุณ" required autofocus>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="0xx-xxx-xxxx" required>
                            </div>

                            <div class="col-md-6">
                                <label for="height" class="form-label">ความสูง (cm) <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="height" id="height" max="220" min="100" placeholder="ระบุความสูง" required>
                                    <span class="input-group-text">ซม.</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="major" class="form-label">สาขาวิชา</label>
                                <select name="major" id="major" class="form-select">
                                    <option value="การบัญชี">การบัญชี</option>
                                    <option value="การจัดการ">การจัดการ</option>
                                    <option value="การตลาด">การตลาด</option>
                                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="color" class="form-label">สีที่ชอบ <span class="text-danger">*</span></label>
                                <input type="color" class="form-control form-control-color w-100" name="color" id="color" value="#563d7c" title="Choose your color" required>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button type="submit" name="Submit" class="btn btn-primary px-4">
                                <i class="bi bi-person-plus-fill"></i> สมัครสมาชิก
                            </button>
                            <button type="reset" class="btn btn-secondary px-4">รีเซ็ต</button>
                            <button type="button" class="btn btn-outline-info px-4" onClick="window.location='https://www.msu.ac.th/';">MSU</button>
                            <button type="button" class="btn btn-outline-dark px-4" onClick="window.print();">พิมพ์</button>
                        </div>

                    </form>
                </div>

                <?php
                if(isset($_POST['Submit'])){
                    $fullname = htmlspecialchars($_POST['fullname']);
                    $phone = htmlspecialchars($_POST['phone']);
                    $height = htmlspecialchars($_POST['height']);
                    $color = htmlspecialchars($_POST['color']);
                    $major = htmlspecialchars($_POST['major']);
					
					include_once("connectdb.php");
					
					$sql = "INSERT INTO `register` (`r_ID`, `r_Name`, `r_Phone`, `r_Height`, `r_Color`, `r_Major`) 
        VALUES (NULL, '{$fullname}', '{$phone}', '{$height}', '{$color}', '{$major}')";
					mysqli_query($conn, $sql) or die ("INSERT ไม่ได้");
					
					echo "<script>";
					echo "alert('เพิ่มข้อมูลสำเร็จ');";
					echo "</script>";
					
                ?>
                    <div class="alert alert-success shadow-sm" role="alert">
                        <h4 class="alert-heading"><i class="bi bi-check-circle-fill"></i> ข้อมูลสมาชิก</h4>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6 mb-2"><strong>ชื่อ-สกุล:</strong> <?php echo $fullname; ?></div>
                            <div class="col-sm-6 mb-2"><strong>เบอร์โทร:</strong> <?php echo $phone; ?></div>
                            <div class="col-sm-6 mb-2"><strong>สาขาวิชา:</strong> <?php echo $major; ?></div>
                            <div class="col-sm-6 mb-2"><strong>ความสูง:</strong> <?php echo $height; ?> ซม.</div>
                            <div class="col-12 mt-2">
                                <strong>สีที่ชอบ:</strong> 
                                <span style="color: <?php echo $color; ?>; font-weight:bold;"><?php echo $color; ?></span>
                                <span class="color-preview" style="background-color:<?php echo $color; ?>;"></span>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>