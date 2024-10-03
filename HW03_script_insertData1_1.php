<?php
require 'condb.php';
include "header.php";
include "footer.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>
    <div class="container">
        <h2>Insert Data</h2>
        <?php

        $brand = $_POST['brand'];
        $type = $_POST['type'];
        $zise = $_POST['zise'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO tb_clothing (brand, type, zise, price, quantity) VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $brand);
        $stmt->bindParam(2, $type);
        $stmt->bindParam(3, $zise);
        $stmt->bindParam(4, $price);
        $stmt->bindParam(5, $quantity);

        $result = $stmt->execute(); // สั่งให้ SQL ทำงาน

        // if ($result !== false) {
        //     echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
        // } else {
        //     echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล";
        // }


        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> ';
        if($result){
            echo '<script>
            setTimeout(function() {
            Swal.fire({
            position: "center",
            icon: "success",
            title: "เพิ่มข้อมูลสําเร็จ",
            showConfirmButton: false,
             timer: 1500
            }).then(function() {
            window.location = "index.php"; // Redirect to.. ปรับแก้ชื่อไฟล์ตามที่ต้องการให้ไป
            });
            }, 10);
            </script>';
            }else{
            echo '<script>
            setTimeout(function() {
            Swal.fire({
            position: "center",
            icon: "error",
            title: "เกิดข้อผิดพลาด",
            showConfirmButton: false,
             timer: 1500
            }).then(function() {
            window.location = "index.php"; // Redirect to.. ปรับแก้ชื่อไฟล์ตามที่ต้องการให้ไป
            });
            }, 10);
            </script>';
            }
            



        ?>
        
</body>

</html>