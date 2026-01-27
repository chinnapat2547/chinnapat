<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ชินพัฒน์ ลิ่มดิลกธรรม (คิว) - Stock Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f8f9fa;
        }
        .main-card {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(45deg, #198754, #20c997); /* ปรับหัวเป็นโทนเขียวให้เข้ากับธีมใหม่ */
            color: white;
        }
        .table-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            background-color: #fff;
            padding: 2px;
        }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="card main-card">
        <div class="card-header p-4">
            <h2 class="mb-0 fw-bold"><i class="bi bi-shop-window"></i> รายการสินค้า Pop Supermarket</h2>
            <p class="mb-0 opacity-75">โดย: ชินพัฒน์ ลิ่มดิลกธรรม (คิว)</p>
        </div>
        <div class="card-body p-4">
            
            <div class="table-responsive">
                <table id="productTable" class="table table-hover align-middle" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>Order ID</th>
                            <th>สินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันที่</th>
                            <th>ประเทศ</th>
                            <th class="text-end">จำนวนเงิน</th>
                            <th class="text-center">รูปภาพ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once("connectdb.php");
                            $sql = "SELECT * FROM `popsupermarket` ORDER BY p_order_id ASC";
                            $rs = mysqli_query($conn, $sql);
                            $total = 0;
                            
                            while ($data = mysqli_fetch_array($rs)){
                                $total += $data['p_amount'];
                                
                                // --- 1. จัดการสีตัวอักษรสินค้า (Product Name Color) ---
                                $prodName = $data['p_product_name'];
                                $textColor = '#212529'; // สีดำปกติถ้าไม่เข้าเงื่อนไข

                                // ใช้ stripos เพื่อเช็คคำโดยไม่สนตัวพิมพ์เล็ก-ใหญ่
                                if (stripos($prodName, 'Mango') !== false || stripos($prodName, 'Banana') !== false) {
                                    $textColor = '#d39e00'; // สีเหลืองเข้ม (Gold) ให้อ่านง่ายบนพื้นขาว
                                } elseif (stripos($prodName, 'Orange') !== false || stripos($prodName, 'Carrot') !== false) {
                                    $textColor = '#fd7e14'; // สีส้ม (Orange)
                                } elseif (stripos($prodName, 'Apple') !== false) {
                                    $textColor = '#dc3545'; // สีแดง (Red)
                                } elseif (stripos($prodName, 'Broccoli') !== false) {
                                    $textColor = '#198754'; // สีเขียวเข้ม (Green)
                                } elseif (stripos($prodName, 'Beans') !== false) {
                                    $textColor = '#8bc34a'; // สีเขียวอ่อน (Light Green)
                                }

                                // --- 2. จัดการสีป้ายประเภท (Badge Color) ---
                                $catName = $data['p_category'];
                                $badgeClass = 'bg-secondary'; // Default สีเทา

                                if ($catName == 'Vegetables') {
                                    $badgeClass = 'bg-success'; // สีเขียว ตามที่ขอ
                                } elseif ($catName == 'Fruit') {
                                    $badgeClass = 'bg-warning text-dark'; // สีเหลืองส้ม
                                }
                        ?>
                        <tr>
                            <td data-order="<?php echo $data['p_order_id'];?>">
                                <strong>#<?php echo $data['p_order_id'];?></strong>
                            </td>
                            
                            <td>
                                <span style="font-weight:bold; font-size: 1.1em; color: <?php echo $textColor; ?>;">
                                    <?php echo $data['p_product_name'];?>
                                </span>
                            </td>

                            <td>
                                <span class="badge rounded-pill <?php echo $badgeClass; ?>" style="font-weight: 500; padding: 8px 12px;">
                                    <?php echo $data['p_category'];?>
                                </span>
                            </td>
                            
                            <td><?php echo date('d/m/Y', strtotime($data['p_date']));?></td>
                            <td><?php echo $data['p_country'];?></td>
                            <td class="text-end fw-bold"><?php echo number_format($data['p_amount'], 0);?> ฿</td>
                            <td class="text-center">
                                <img src="IMG/<?php echo $data['p_product_name'];?>.jpg" class="table-image shadow-sm" alt="<?php echo $data['p_product_name'];?>" onerror="this.onerror=null; this.src='https://via.placeholder.com/50?text=No+Img';">
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot class="table-light">
                        <tr class="fw-bold fs-5">
                            <td colspan="5" class="text-end">ยอดรวมทั้งหมด:</td>
                            <td class="text-end text-success"><?php echo number_format($total, 0);?> ฿</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#productTable').DataTable({
            "language": {
                "lengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
                "zeroRecords": "ไม่พบข้อมูลที่ค้นหา",
                "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                "infoEmpty": "ไม่มีข้อมูล",
                "infoFiltered": "(คัดกรองจากทั้งหมด _MAX_ รายการ)",
                "search": "ค้นหา:",
                "paginate": {
                    "first": "หน้าแรก",
                    "last": "หน้าสุดท้าย",
                    "next": "ถัดไป",
                    "previous": "ก่อนหน้า"
                }
            },
            "order": [[ 0, "asc" ]] 
        });
    });
</script>

</body>
</html>