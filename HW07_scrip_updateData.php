<?php
include('condb.php');
// include('header.php');
// include('footer.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>
    <!-- <div class="container"> -->
    <!-- <h1>insert user</h1> -->
    <?php
    $id = $_POST['id'];
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $zise = $_POST['zise'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];


    $sql = "UPDATE tb_clothing SET brand=?, type=?, zise=?, price=?, quantity=? WHERE id=? ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $brand);
    $stmt->bindParam(2, $type);
    $stmt->bindParam(3, $zise);
    $stmt->bindParam(4, $price);
    $stmt->bindParam(5, $quantity);
    $stmt->bindParam(6, $id);

    $result = $stmt->execute();


    //if ($result !== false) {
    //    echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
    //} else {
    //    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล";
    //}

    //SweetAlert
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    if ($result) {
        echo '<script>
            setTimeout(function() {
                Swal.fire({
                position: "center",
                icon: "success",
                title: "แก้ไขข้อมูลสําเร็จ",
                showConfirmButton: false,
                timer: 1500
                }).then(function() {
                window.location = "HW05_show_clothing.php"; // Redirect to.. ปรับแก้ชื่อไฟล์ตามที่ต้องการให้ไป
                });
                }, 1000);
                </script>';
    } else {
        echo '<script>
                setTimeout(function() {
                Swal.fire({
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: true,
                // timer: 1500
                }).then(function() {
                window.location = "HW05_show_clothing.php"; // Redirect to.. ปรับแก้ชื่อไฟล์ตามที่ต้องการให้ไป 
                });
                }, 1000);
                </script>';
    }
    ?>
    <!-- <hr> -->
    <!-- <a href="index.php" class="btn btn-primary">กลับหน้าหลัก</a> -->
    </div>
</body>

</html>