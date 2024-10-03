<?php
include "header.php";

require_once 'condb.php';

$sql = "SELECT * FROM tb_clothing";
$stmt = $conn->prepare($sql);
$stmt->execute();

$clothing = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <h1>Clothing Records</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="HW06_form_insertData1_01.php" class="btn btn-primary btn-sm">Add Clothing</a>
        </div>
        <table id="clothingTable" class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Zise</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clothing as $ct) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ct['id']); ?></td>
                        <td><?php echo htmlspecialchars($ct['brand']); ?></td>
                        <td><?php echo htmlspecialchars($ct['type']); ?></td>
                        <td><?php echo htmlspecialchars($ct['zise']); ?></td>
                        <td><?php echo htmlspecialchars($ct['price']); ?></td>
                        <td><?php echo htmlspecialchars($ct['quantity']); ?></td>
                        <td>

                            <form action="HW07_form_updateData.php" method="POST" style="display:inline;">
                                <input type="hidden" name="clothing_id" value="<?php echo $ct['id']; ?>">
                                <input type="submit" name="edit" value="Edit" class="btn btn-warning btn-sm">
                            </form>

                            <form action="HW06_delete_data.php" method="POST" style="display:inline;">
                                <input type="hidden" name="clothing_id" value="<?php echo $ct['id']; ?>">
                                <button type="button" class="delete-button btn btn-danger btn-sm" data-clothing-id="<?php echo $ct['id']; ?>">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
            <a href="index.php">ย้อนกลับไปหน้าหลัก</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() { // ใช้งาน DataTables เมื่อเว็บโหลดเสร็จแล้ว
            // เลือกตารางข้อมูลและเปิดใช้งาน DataTables
            let table = new DataTable('#clothingTable');
        });
    </script>

    <script>
        // ฟังก์ชันสาหรับแสดงกล่องยืนยัน ํ SweetAlert2
        function showDeleteConfirmation(clothingId) {
            Swal.fire({
                title: 'คุณแน่ใจหรือไม่?',
                text: 'คุณจะไม่สามารถเรียกคืนข้อมูลกลับได ้!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ลบ',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                if (result.isConfirmed) {
                    // หากผู้ใช้ยืนยันให้ส่งค่าฟอร์มไปยัง ่ delete.php เพื่อลบข้อมูล
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = 'HW06_delete_sweet.php';
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'clothing_id';
                    input.value = clothingId;
                    form.appendChild(input);
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        }
        // แนบตัวตรวจจับเหตุการณ์คลิกกับองค์ปุ่มลบทั้งหมดที่มีคลาส delete-button
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const clothingId = button.getAttribute('data-clothing-id');
                showDeleteConfirmation(clothingId);
            });
        });
    </script>

    <?php include "footer.php"; ?>
</body>

</html>