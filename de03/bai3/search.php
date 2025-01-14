<?php
include 'database.php';
$search_result = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search_name = $_POST['search_name'];
    $sql = "SELECT sv.MaSV, sv.HoTen, sv.Lop, sv.NgaySinh, kv.TenKhoaVien 
            FROM sinhvien sv 
            JOIN khoavien kv ON sv.MaKhoaVien = kv.MaKhoaVien
            WHERE sv.HoTen LIKE '%$search_name%'";
    $search_result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tìm Kiếm Sinh Viên</title>
</head>
<body>
    <h1>Tìm Kiếm Thông Tin Sinh Viên</h1>
    <form method="POST">
        <label for="search_name">Nhập họ tên:</label>
        <input type="text" id="search_name" name="search_name" required>
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php if ($search_result && $search_result->num_rows > 0) { ?>
        <h2>Kết Quả Tìm Kiếm</h2>
        <table border="1">
            <tr>
                <th>Mã Sinh Viên</th>
                <th>Họ Tên</th>
                <th>Lớp</th>
                <th>Ngày Sinh</th>
                <th>Khoa/Viện</th>
            </tr>
            <?php while ($row = $search_result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['MaSV']; ?></td>
                <td><?php echo $row['HoTen']; ?></td>
                <td><?php echo $row['Lop']; ?></td>
                <td><?php echo $row['NgaySinh']; ?></td>
                <td><?php echo $row['TenKhoaVien']; ?></td>
            </tr>
            <?php } ?>
        </table>
    <?php } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
        <p>Không tìm thấy sinh viên nào!</p>
    <?php } ?>
    <br>
    <a href="index.php">Trở lại</a>
</body>
</html>
