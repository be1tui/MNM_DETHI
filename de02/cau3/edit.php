<?php
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $MaKhoaVien = $_POST['MaKhoaVien'];
    $TenKhoaVien = $_POST['TenKhoaVien'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $sql = "UPDATE khoavien SET TenKhoaVien='$TenKhoaVien', Phone='$Phone', Email='$Email' WHERE MaKhoaVien='$MaKhoaVien'";
    if ($conn->query($sql) === TRUE) {
        echo "Cập nhật thành công.";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
$MaKhoaVien = $_GET['MaKhoaVien'];
$sql = "SELECT * FROM khoavien WHERE MaKhoaVien='$MaKhoaVien'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa Thông Tin Khoa/Viện</title>
</head>
<body>
    <h1>Sửa Thông Tin Khoa/Viện</h1>
    <form method="POST">
        <label>MaKhoaVien:</label>
        <input type="text" name="MaKhoaVien" value="<?php echo $row['MaKhoaVien']; ?>"><br><br>
        <label>Tên Khoa/Viện:</label>
        <input type="text" name="TenKhoaVien" value="<?php echo $row['TenKhoaVien']; ?>"><br><br>
        <label>Số Điện Thoại:</label>
        <input type="text" name="Phone" value="<?php echo $row['Phone']; ?>"><br><br>
        <label>Email:</label>
        <input type="text" name="Email" value="<?php echo $row['Email']; ?>"><br><br>
        <button type="submit">Cập nhật</button>
    </form>
    <br>
    <a href="index.php">Trở lại</a>
</body>
</html>
