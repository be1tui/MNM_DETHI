<?php
include('db.php');
$search = '';
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM khoa_dao_tao WHERE TenKhoa LIKE '%$search%'";
} else {
    $query = "SELECT * FROM khoa_dao_tao";
}
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tìm kiếm khoa</title>
</head>
<body>
    <h1>Tìm kiếm khoa</h1>
    <form method="POST" action="search.php">
        <input type="text" name="search" value="<?php echo $search; ?>" placeholder="Nhập tên khoa">
        <input type="submit" value="Tìm kiếm">
    </form>
    <table border="1">
        <tr>
            <th>MaKhoa</th>
            <th>TenKhoa</th>
            <th>DienThoai</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['MaKhoa']; ?></td>
                <td><?php echo $row['TenKhoa']; ?></td>
                <td><?php echo $row['DienThoai']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="index.php">Trở lại</a>
</body>
</html>
