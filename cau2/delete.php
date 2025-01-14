<?php
include('db.php');

if (isset($_GET['MaKhoa'])) {
    $MaKhoa = $_GET['MaKhoa'];
    $query = "DELETE FROM khoa_dao_tao WHERE MaKhoa = '$MaKhoa'";
    if ($conn->query($query) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
