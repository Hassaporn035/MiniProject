<?php
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
        <h3 class="mt-4">ฟอร์มกรอกข้อมูลร้านขายเสื้อผ้า</h3>
        <hr>
        <form action="HW06_script_insertData1.php" method="post">
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" name="brand" id="brand" aria-describedby="brand">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="type">
            </div>
            <div class="mb-3">
                <label for="zise" class="form-label">Zise</label>
                <input type="text" class="form-control" name="zise" id="zise" aria-describedby="zise">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="price">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity" aria-describedby="quantity">
            </div>
            
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        </form>
        <hr>
        <p class="text-end">
            <a href="index.php">กลับหน้าหลัก</a>
        </p>
    </div>

</body>

</html>