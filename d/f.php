<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปข้อมูลผู้สมัคร - NexGen Innovations</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500;700&family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        /* CSS ชุดเดิมแบบอลังการ */
        :root {
            --primary-bg: #0f172a;
            --card-bg: rgba(30, 41, 59, 0.9);
            --accent-color: #ffd700;
            --text-light: #e2e8f0;
        }
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: var(--primary-bg);
            background-image: radial-gradient(circle at 50% 50%, rgba(255, 215, 0, 0.05) 0%, transparent 60%);
            color: var(--text-light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .result-card {
            background: var(--card-bg);
            border: 1px solid rgba(255, 215, 0, 0.3);
            border-radius: 20px;
            box-shadow: 0 0 40px rgba(255, 215, 0, 0.1);
            backdrop-filter: blur(20px);
            max-width: 800px;
            width: 100%;
            overflow: hidden;
        }
        .result-header {
            background: linear-gradient(90deg, #1e293b 0%, #334155 50%, #1e293b 100%);
            padding: 2rem;
            text-align: center;
            border-bottom: 2px solid var(--accent-color);
        }
        .header-logo {
            font-family: 'Kanit';
            font-weight: 700;
            font-size: 1.8rem;
            color: #fff;
            text-transform: uppercase;
        }
        .data-section { padding: 2rem; }
        .label-text { color: #94a3b8; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 5px; }
        .value-text { font-size: 1.1rem; color: #fff; font-weight: 500; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 5px; margin-bottom: 1.5rem; }
        .long-text-box { background: rgba(0,0,0,0.3); padding: 15px; border-radius: 10px; border-left: 3px solid var(--accent-color); min-height: 80px; }
    </style>
</head>

<body>

<?php
if(isset($_POST['Submit'])) {
    // รับค่าจาก e.php
    $position   = htmlspecialchars($_POST['position']);
    $title      = htmlspecialchars($_POST['title']);
    $fullname   = htmlspecialchars($_POST['fullname']);
    $dob        = htmlspecialchars($_POST['dob']);
    $education  = htmlspecialchars($_POST['education']);
    $skills     = nl2br(htmlspecialchars($_POST['skills'])); 
    $experience = nl2br(htmlspecialchars($_POST['experience']));

    // คำนวณอายุ
    $birthDate = new DateTime($dob);
    $today     = new DateTime();
    $age       = $today->diff($birthDate)->y;
    $thaiDate  = $birthDate->format('d/m/Y'); 
?>
    <div class="result-card">
        <div class="result-header">
            <div class="header-logo"><i class="bi bi-hexagon-fill text-warning me-2"></i>NexGen Innovations</div>
            <h4 class="mt-3 text-white">ใบสรุปข้อมูลการสมัครงาน</h4>
        </div>

        <div class="data-section">
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="label-text">Position Applied For</div>
                    <div class="value-text text-warning fs-4" style="border-bottom: none;"><?php echo $position; ?></div>
                </div>
                <div class="col-md-6">
                    <div class="label-text">Full Name</div>
                    <div class="value-text"><?php echo $title . " " . $fullname; ?></div>
                </div>
                <div class="col-md-3">
                    <div class="label-text">Date of Birth</div>
                    <div class="value-text"><?php echo $thaiDate; ?></div>
                </div>
                <div class="col-md-3">
                    <div class="label-text">Age</div>
                    <div class="value-text"><?php echo $age; ?> ปี</div>
                </div>
                <div class="col-12">
                    <div class="label-text">Education</div>
                    <div class="value-text"><?php echo $education; ?></div>
                </div>
                <div class="col-md-6">
                    <div class="label-text">Special Skills</div>
                    <div class="value-text long-text-box fs-6"><?php echo empty($skills) ? "-" : $skills; ?></div>
                </div>
                <div class="col-md-6">
                    <div class="label-text">Work Experience</div>
                    <div class="value-text long-text-box fs-6"><?php echo empty($experience) ? "-" : $experience; ?></div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="e.php" class="btn btn-outline-warning rounded-pill px-4">
                    <i class="bi bi-arrow-left"></i> กลับหน้าฟอร์ม
                </a>
                <button onclick="window.print()" class="btn btn-warning rounded-pill px-4 ms-2">
                    <i class="bi bi-printer"></i> พิมพ์ใบสมัคร
                </button>
            </div>
        </div>
    </div>
<?php
} else {
    // กรณีเปิดไฟล์ f.php โดยตรง
    echo '<div class="text-center text-white">';
    echo '<h1 class="display-1"><i class="bi bi-exclamation-triangle"></i></h1>';
    echo '<h1>Access Denied</h1>';
    echo '<p>กรุณากรอกข้อมูลผ่านแบบฟอร์ม</p>';
    // แก้ปุ่มกลับให้ไปที่ e.php
    echo '<a href="e.php" class="btn btn-warning">กลับไปหน้าฟอร์ม (e.php)</a>';
    echo '</div>';
}
?>

</body>
</html>