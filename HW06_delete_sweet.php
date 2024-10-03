<?php
require_once 'condb.php';

if (isset($_POST['clothing_id'])) {
    $c_id = $_POST['clothing_id'];
    try {
        $sql = "DELETE FROM tb_clothing WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $c_id);
        $stmt->execute();
        echo "Data deleted successfully.";
        header("Location:HW05_show_clothing.php"); // Redirect to ... ปรับแก้ชื่อไฟล์ตามที่ต้องการให้ไป
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>