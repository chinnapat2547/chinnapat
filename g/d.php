<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปยอดขายตามประเทศ - ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            font-weight: 600;
        }
        .chart-container {
            position: relative;
            margin: auto;
            height: 300px;
            width: 100%;
        }
        /* แต่งตารางให้สวยเข้ากับกราฟ */
        .table-custom thead {
            background-color: #343a40;
            color: white;
        }
        .total-row {
            background-color: #e9ecef;
            font-weight: bold;
            font-size: 1.1em;
        }
    </style>
</head>

<body>

<?php
    include_once("connectdb.php");

    // 1. เตรียมตัวแปร
    $labels = array();
    $dataSales = array();
    $tableData = array(); // สร้าง Array ใหม่เพื่อเก็บข้อมูลไว้แสดงในตารางด้านล่าง
    $grandTotal = 0;      // ตัวแปรเก็บยอดรวมทั้งหมด

    $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country` ORDER BY total DESC";
    $rs = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_array($rs)){
        // เก็บข้อมูลสำหรับกราฟ
        $labels[] = $data['p_country'];
        $dataSales[] = $data['total'];
        
        // เก็บข้อมูลสำหรับตาราง และคำนวณยอดรวม
        $tableData[] = $data; 
        $grandTotal += $data['total'];
    }
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h2 class="fw-bold text-primary">Dashboard สรุปยอดขาย</h2>
            <p class="text-muted">โดย: ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-header py-3">
                    <span class="text-primary"><i class="bi bi-bar-chart-fill"></i> ยอดขายแยกตามประเทศ (Bar Chart)</span>
                </div>
                <div class="card-body">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header py-3">
                    <span class="text-success">สัดส่วนยอดขาย (Pie Chart)</span>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header py-3">
                    <i class="bi bi-table"></i> ตารางรายละเอียดข้อมูล
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered mb-0 table-custom align-middle">
                            <thead>
                                <tr class="text-center">
                                    <th width="10%">ลำดับ</th>
                                    <th width="40%">ประเทศ</th>
                                    <th width="25%">ยอดขาย (บาท)</th>
                                    <th width="25%">คิดเป็นร้อยละ (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i = 1;
                                    // วนลูปจากตัวแปร $tableData ที่เราเก็บไว้ตอนแรก
                                    foreach($tableData as $row) { 
                                        // คำนวณเปอร์เซ็นต์ใน PHP เลย
                                        $percent = ($row['total'] / $grandTotal) * 100;
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++; ?></td>
                                    <td>
                                        <span class="fw-bold text-primary"><?php echo $row['p_country']; ?></span>
                                    </td>
                                    <td class="text-end">
                                        <?php echo number_format($row['total'], 0); ?>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <span class="me-2"><?php echo number_format($percent, 2); ?>%</span>
                                            <div class="progress" style="width: 50px; height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $percent; ?>%"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr class="total-row">
                                    <td colspan="2" class="text-center">รวมทั้งสิ้น</td>
                                    <td class="text-end text-success"><?php echo number_format($grandTotal, 0); ?> บาท</td>
                                    <td class="text-end">100.00%</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<script>
    Chart.register(ChartDataLabels);

    const labels = <?php echo json_encode($labels); ?>;
    const salesData = <?php echo json_encode($dataSales); ?>;
    const backgroundColors = [
        'rgba(255, 99, 132, 0.8)', 'rgba(54, 162, 235, 0.8)', 'rgba(255, 206, 86, 0.8)',
        'rgba(75, 192, 192, 0.8)', 'rgba(153, 102, 255, 0.8)', 'rgba(255, 159, 64, 0.8)', 'rgba(201, 203, 207, 0.8)'
    ];

    // --- Bar Chart ---
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                data: salesData,
                backgroundColor: backgroundColors,
                borderRadius: 5
            }]
        },
        options: {
            responsive: true,
            layout: { padding: { top: 25 } },
            plugins: {
                legend: { display: false },
                datalabels: {
                    anchor: 'end', align: 'top',
                    color: '#444', font: { weight: 'bold', family: 'Prompt' },
                    formatter: (value) => new Intl.NumberFormat('th-TH', { notation: "compact" }).format(value)
                }
            },
            scales: {
                y: { beginAtZero: true, grid: { color: '#f0f0f0' } },
                x: { grid: { display: false } }
            }
        }
    });

    // --- Pie Chart ---
    new Chart(document.getElementById('pieChart'), {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: salesData,
                backgroundColor: backgroundColors,
                borderColor: '#fff', borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom', labels: { font: { family: 'Prompt' } } },
                datalabels: {
                    color: '#fff', font: { weight: 'bold', size: 12, family: 'Prompt' },
                    formatter: (value, ctx) => {
                        let sum = 0;
                        let dataArr = ctx.chart.data.datasets[0].data;
                        dataArr.map(data => { sum += Number(data); });
                        return (value * 100 / sum).toFixed(1) + "%";
                    }
                }
            }
        }
    });
</script>

</body>
</html>