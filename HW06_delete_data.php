<?php
require_once 'condb.php';

if (isset($_POST['delete']) && isset($_POST['clothing_id'])) {

    $c_id = $_POST['clothing_id'];
    try {
        // เรียกดูข้อมูลที่จะลบ
        $sql = "SELECT * FROM tb_clothing WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $c_id);
        $stmt->execute();
        $clothing = $stmt->fetch(PDO::FETCH_ASSOC);

        // แสดงข้อความยืนยันลบข้อมูล
        echo "Are you sure you want to delete the following clothing?<br>";
        echo "id: " . $clothing['id'] . "<br>";
        echo "Brand: " . $clothing['brand'] . "<br>";
        echo "Type: " . $clothing['type'] . "<br>";
        echo "Zise: " . $clothing['zise'] . "<br>";
        echo "Price: " . $clothing['price'] . "<br>";
        echo "Quantity: " . $clothing['quantity'] . "<br>";

        // สร้างปุ่มยืนยันลบข้อมูล
        echo "<form action='HW06_delete_data.php' method='POST'>";
        echo "<input type='hidden' name='clothing_id' value='$c_id'>";
        echo "<input type='submit' name='confirm_delete' value='Confirm Delete'>";
        echo "</form>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}



if (isset($_POST['confirm_delete']) && isset($_POST['clothing_id'])) {
    $c_id = $_POST['clothing_id'];
    try {
        $sql = "DELETE FROM tb_clothing WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $c_id);
        $stmt->execute();
        echo "Data deleted successfully.";
        header("Location:HW06_show_clothing.php"); // Redirect to ... ปรับแก้ชื่อไฟล์ตามที่ต้องการให้ไป
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>