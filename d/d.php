<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>

    <!-- Bootstrap 5.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">สมัครสมาชิก</h3>
                </div>

                <div class="card-body">

                    <form method="post" action="">
                        
                        <div class="mb-3">
                            <label class="form-label">ชื่อ-สกุล</label>
                            <input type="text" class="form-control" name="fullname" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">เบอร์โทร</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ความสูง (เซนติเมตร)</label>
                            <input type="number" class="form-control" name="height" min="100" max="220" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สีที่ชอบ</label>
                            <input type="color" class="form-control form-control-color" name="color" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สาขาวิชา</label>
                            <select name="major" class="form-select">
                                <option value="การบัญชี">การบัญชี</option>
                                <option value="การจัดการ">การจัดการ</option>
                                <option value="การตลาด">การตลาด</option>
                                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" class="btn btn-success" name="Submit">สมัครสมาชิก</button>
                            <button type="reset" class="btn btn-secondary">รีเซ็ต</button>
                            <button type="button" class="btn btn-info text-white" onclick="window.location='https://www.msu.ac.th/';">MSU</button>
                            <button type="button" class="btn btn-warning" onclick="window.print();">พิมพ์</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="mt-4">
                <hr>
                <?php
                    if(isset($_POST['Submit'])){
                        $fullname=$_POST['fullname'];
                        $phone=$_POST['phone'];
                        $height=$_POST['height'];
                        $color=$_POST['color'];
                        $major=$_POST['major'];

                        echo "<div class='alert alert-info'>";
                        echo "ชื่อ-สกุล: ".$fullname."<br>";
                        echo "เบอร์โทร: ".$phone."<br>";
                        echo "ความสูง: ".$height." ซม.<br>";
                        echo "สีที่ชอบ: ".$color." <div style='width:50px;height:20px;background:{$color}'></div><br>";
                        echo "สาขาวิชา: ".$major."<br>";
                        echo "</div>";
                    }
                ?>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap 5.3 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
