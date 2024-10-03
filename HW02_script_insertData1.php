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

        $sql = "INSERT INTO tb_clothing (brand, type, zise, price, quantity) VALUES ('$brand', '$type', '$zise', '$price', '$quantity')";
        $result = $conn->exec($sql);

        if ($result !== false) {
            echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
        } else {
            echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล";
        }
        ?>
        <hr>
        <a href="index.php">Home</a>
    </div>
</body>

</html>