<?php
    include 'database.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $MaKhoa = $_POST['MaKhoa'];
        $TenKhoa = $_POST['TenKhoa'];
        $DienThoai = $_POST['DienThoai'];

        $query = "INSERT INTO khoa_dao_tao (MaKhoa, TenKhoa, DienThoai) VALUES ('$MaKhoa', '$TenKhoa', '$DienThoai')";
        if ($conn->query($query) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Lỗi: ". $conn->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTsF-8">
    <title>Thêm khoa</title>
</head>
<body>
    <h1>Thêm khoa mới</h1>
    <form method="POST" action="add.php">     
        <label for="MaKhoa">MaKhoa:</label><br>
        <input type="text" name="MaKhoa" required><br>
        <label for="TenKhoa">TenKhoa:</label><br>
        <input type="text" name="TenKhoa" required><br>
        <label for="DienThoai">DienThoai:</label><br>
        <input type="text" name="DienThoai" required><br><br>
        <input type="submit" value="Thêm">
    </form>
    <br>
    <a href="index.php">Trở lại</a>
</body>
</html>