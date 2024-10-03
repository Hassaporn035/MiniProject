<?php
include "header.php";
require 'condb.php';
include "footer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data PRODUCT</title>
</head>

<body>
    <div class="container">
        <h1>Insert Data PRODUCT</h1>
        <?php
        $brand = "kloset";
        $type = "dress";
        $zise = "xxl";
        $price = "250";
        $quantity = "2";

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