<?php
include 'hoc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $MaKhoa = $_POST['MaKhoa'];
    $TenKhoa = $_POST['TenKhoa'];
    $DienThoai = $_POST['DienThoai'];

    $sql = "INSERT INTO khoa_dao_tao (MaKhoa, TenKhoa, DienThoai) 
            VALUES ('$MaKhoa', '$TenKhoa', '$DienThoai')";
    if ($conn->query($sql) === TRUE) {
        echo "Thêm khoa thành công!";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<form method="post">
    <label>Mã Khoa:</label>
    <input type="text" name="MaKhoa" required><br>
    <label>Tên Khoa:</label>
    <input type="text" name="TenKhoa" required><br>
    <label>Điện Thoại:</label>
    <input type="text" name="DienThoai" required><br>
    <button type="submit">Thêm</button>
</form>
