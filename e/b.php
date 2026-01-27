<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว) - ใบสมัครงาน</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500;700&family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --primary-bg: #0f172a;
            --card-bg: rgba(30, 41, 59, 0.7);
            --accent-color: #ffd700;
            --text-light: #e2e8f0;
        }
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: var(--primary-bg);
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(99, 102, 241, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(255, 215, 0, 0.1) 0%, transparent 40%);
            color: var(--text-light);
            min-height: 100vh;
            padding-bottom: 50px;
        }
        .company-header {
            font-family: 'Kanit', sans-serif;
            padding: 3rem 0;
            text-align: center;
        }
        .company-name {
            font-weight: 700;
            font-size: 3.5rem;
            background: linear-gradient(to right, #fff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 2px;
        }
        .job-card {
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            padding: 40px;
            position: relative;
            overflow: hidden;
        }
        .form-floating > label { color: #94a3b8; }
        .form-control, .form-select {
            background-color: rgba(15, 23, 42, 0.6) !important;
            border: 1px solid rgba(148, 163, 184, 0.2);
            color: #fff !important;
            border-radius: 10px;
        }
        .form-control:focus, .form-select:focus {
            background-color: rgba(15, 23, 42, 0.9) !important;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 4px rgba(255, 215, 0, 0.1);
        }
        .btn-apply {
            background: linear-gradient(135deg, #FFD700 0%, #B8860B 100%);
            color: #000;
            font-weight: 700;
            border: none;
            padding: 12px 40px;
            border-radius: 50px;
            box-shadow: 0 10px 20px rgba(255, 215, 0, 0.2);
            transition: all 0.3s ease;
        }
        .btn-apply:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(255, 215, 0, 0.3);
            background: linear-gradient(135deg, #FFE44D 0%, #DAA520 100%);
        }
        .section-title {
            color: var(--accent-color);
            font-family: 'Kanit';
            font-size: 1.2rem;
            margin-bottom: 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 5px;
        }
        
        /* เพิ่ม CSS สำหรับส่วนแสดงผลลัพธ์ */
        .result-box {
            background: rgba(16, 185, 129, 0.1); 
            border: 1px solid rgba(16, 185, 129, 0.4);
            border-radius: 15px;
            padding: 20px;
            margin-top: 30px;
            color: #fff;
        }
        .result-label { color: var(--accent-color); font-weight: 600; }
    </style>
</head>

<body>

    <div class="container">
        <div class="company-header">
            <div class="company-name">ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="job-card">
                    <h2 class="text-center mb-5 text-white" style="font-family: 'Kanit';">แบบฟอร์มสมัครงาน (Application Form)</h2>

                    <form method="post" action="">
                        
                        <div class="section-title"><i class="bi bi-briefcase me-2"></i>ข้อมูลการสมัคร (Position)</div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="position" name="position" required>
                                        <option selected disabled value="">เลือกตำแหน่งที่ต้องการสมัคร...</option>
                                        <option value="AI Engineer">AI Engineer (วิศวกรปัญญาประดิษฐ์)</option>
                                        <option value="Full Stack Developer">Full Stack Developer (นักพัฒนาเว็บไซต์)</option>
                                        <option value="UX/UI Designer">UX/UI Designer (นักออกแบบประสบการณ์ผู้ใช้)</option>
                                        <option value="Digital Marketing Manager">Digital Marketing Manager (ผู้จัดการการตลาดดิจิทัล)</option>
                                        <option value="Data Analyst">Data Analyst (นักวิเคราะห์ข้อมูล)</option>
                                    </select>
                                    <label for="position">ตำแหน่งที่ต้องการสมัคร</label>
                                </div>
                            </div>
                        </div>

                        <div class="section-title"><i class="bi bi-person-lines-fill me-2"></i>ข้อมูลส่วนตัว (Personal Details)</div>
                        <div class="row g-3 mb-4">
                            <div class="col-md-2">
                                <div class="form-floating">
                                    <select class="form-select" id="title" name="title" required>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                    <label for="title">คำนำหน้า</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="ชื่อ-นามสกุล" required>
                                    <label for="fullname">ชื่อ-สกุล</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                    <label for="dob">วันเดือนปีเกิด</label>
                                </div>
                            </div>
                        </div>

                        <div class="section-title"><i class="bi bi-mortarboard-fill me-2"></i>การศึกษาและความสามารถ (Education & Skills)</div>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="education" name="education" required>
                                        <option selected disabled value="">เลือกระดับการศึกษา...</option>
                                        <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย / ปวช.</option>
                                        <option value="อนุปริญญา">อนุปริญญา / ปวส.</option>
                                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                                        <option value="ปริญญาโท">ปริญญาโท</option>
                                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                                    </select>
                                    <label for="education">ระดับการศึกษาสูงสุด</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="ระบุความสามารถพิเศษ" id="skills" name="skills" style="height: 100px"></textarea>
                                    <label for="skills">ความสามารถพิเศษ (เช่น ภาษา, โปรแกรมคอมพิวเตอร์, ใบรับรอง)</label>
                                </div>
                            </div>
                        </div>

                        <div class="section-title"><i class="bi bi-building-fill-up me-2"></i>ประสบการณ์ทำงาน (Work Experience)</div>
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="ระบุประสบการณ์ทำงาน" id="experience" name="experience" style="height: 120px"></textarea>
                                    <label for="experience">โปรดระบุตำแหน่งงานและบริษัทที่เคยทำ (ถ้ามี)</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center d-flex justify-content-center gap-3">
                            <button type="submit" name="Submit" class="btn btn-apply btn-lg">
                                <i class="bi bi-send-fill me-2"></i> ส่งใบสมัคร
                            </button>
                            <button type="reset" class="btn btn-outline-light btn-lg rounded-pill px-4">
                                ล้างข้อมูล
                            </button>
                        </div>

                    </form>

                    <?php
                    if(isset($_POST['Submit'])){
                        $position = htmlspecialchars($_POST['position']);
                        $title = htmlspecialchars($_POST['title']);
                        $fullname = htmlspecialchars($_POST['fullname']);
                        $dob = htmlspecialchars($_POST['dob']);
                        $education = htmlspecialchars($_POST['education']);
                        $skills = htmlspecialchars($_POST['skills']);
                        $experience = htmlspecialchars($_POST['experience']);
                        
                        include_once("connectdb.php");
                        
                        $sql = "INSERT INTO `application` (`a_id`, `a_position`, `a_title`, `a_fullname`, `a_dob`, `a_education`, `a_skills`, `a_experience`) 
                                VALUES (NULL, '{$position}', '{$title}', '{$fullname}', '{$dob}', '{$education}', '{$skills}', '{$experience}')";
                        
                        mysqli_query($conn, $sql) or die ("INSERT ไม่ได้ Error: " . mysqli_error($conn));
                        
                        echo "<script>";
                        echo "alert('บันทึกข้อมูลสำเร็จ');";
                        echo "</script>";
                        
                    ?>
                        <div class="result-box fade show">
                            <h4 class="mb-3"><i class="bi bi-check-circle-fill text-success"></i> ยืนยันข้อมูลการสมัคร</h4>
                            <div class="row">
                                <div class="col-md-6 mb-2"><span class="result-label">ตำแหน่ง:</span> <?php echo $position; ?></div>
                                <div class="col-md-6 mb-2"><span class="result-label">ชื่อ-สกุล:</span> <?php echo $title . $fullname; ?></div>
                                <div class="col-md-6 mb-2"><span class="result-label">ว/ด/ป เกิด:</span> <?php echo $dob; ?></div>
                                <div class="col-md-6 mb-2"><span class="result-label">การศึกษา:</span> <?php echo $education; ?></div>
                                <div class="col-12 mb-2"><span class="result-label">ความสามารถพิเศษ:</span> <?php echo $skills; ?></div>
                                <div class="col-12"><span class="result-label">ประสบการณ์:</span> <?php echo $experience; ?></div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>