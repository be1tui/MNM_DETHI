<?php
include('db.php');

if (isset($_GET['MaKhoa'])) {
    $MaKhoa = $_GET['MaKhoa'];
    $query = "SELECT * FROM khoa_dao_tao WHERE MaKhoa = '$MaKhoa'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $TenKhoa = $_POST['TenKhoa'];
    $DienThoai = $_POST['DienThoai'];
    $query = "UPDATE khoa_dao_tao SET TenKhoa='$TenKhoa', DienThoai='$DienThoai' WHERE MaKhoa='$MaKhoa'";
    if ($conn->query($query) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa khoa</title>
</head>
<body>
    <h1>Sửa thông tin khoa</h1>
    <form method="POST" action="edit.php?MaKhoa=<?php echo $MaKhoa; ?>">
        <label for="TenKhoa">TenKhoa:</label><br>
        <input type="text" name="TenKhoa" value="<?php echo $row['TenKhoa']; ?>" required><br>
        <label for="DienThoai">DienThoai:</label><br>
        <input type="text" name="DienThoai" value="<?php echo $row['DienThoai']; ?>" required><br><br>
        <input type="submit" value="Cập nhật">
    </form>
    <br>
    <a href="index.php">Trở lại</a>
</body>
</html>
