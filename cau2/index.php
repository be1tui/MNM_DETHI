<?php
include('db.php');
$query = "SELECT * FROM khoa_dao_tao";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách khoa</title>
</head>
<body>
    <h1>Danh sách khoa</h1>
    <table border="1">
        <tr>
            <th>MaKhoa</th>
            <th>TenKhoa</th>
            <th>DienThoai</th>
            <th>Chỉnh sửa</th>
            <th>Xóa</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['MaKhoa']; ?></td>
                <td><?php echo $row['TenKhoa']; ?></td>
                <td><?php echo $row['DienThoai']; ?></td>
                <td><a href="edit.php?MaKhoa=<?php echo $row['MaKhoa']; ?>">Sửa</a></td>
                <td><a href="delete.php?MaKhoa=<?php echo $row['MaKhoa']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="add.php">Thêm khoa mới<br></a>
    <a href="search.php">Tìm kiếm khoa</a>
</body>
</html>
