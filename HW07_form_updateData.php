<?php
include('condb.php');
include('header.php');
include('footer.php');


$id = $_POST['clothing_id'];
$sql = "SELECT * FROM tb_clothing WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->execute();
$clothing = $stmt->fetch(PDO::FETCH_ASSOC);

$id = $clothing['id'];
$brand = $clothing['brand'];
$type = $clothing['type'];
$zise = $clothing['zise'];
$price = $clothing['price'];
$quantity = $clothing['quantity'];

?>

<div class="container">
    <h3 class="mt-4">ฟอร์มแก้ไขข้อมูล</h3>
    <hr>
    <form action="HW07_scrip_updateData.php" method="post">

        <div class="mb-3">
            <!--<label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" id="id" aria-describedby="id" value="<?php echo $id; ?> " readonly>-->
            <input type="hidden" name="id" value="<?php echo $id; ?> ">
        </div>

        <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" name="brand" id="brand" aria-describedby="brand" value="<?php echo $brand; ?>">
        </div>

        <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="type" value="<?php echo $type; ?>">
        </div>

        <div class="mb-3">
                <label for="zise" class="form-label">Zise</label>
                <input type="text" class="form-control" name="zise" id="zise" aria-describedby="zise" value="<?php echo $zise; ?>">
        </div>

        <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="price" value="<?php echo $price; ?>">
        </div>

        <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity" aria-describedby="quantity" value="<?php echo $quantity; ?>">
        </div>

        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    </form>
    <hr>
    <p class="text-end">
        <a href="index.php">กลับหน้าหลัก</a>
    </p>
</div>