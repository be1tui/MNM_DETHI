<?php
include 'database.php';
$sql = "SELECT sv.MaSV, sv.HoTen, sv.Lop, sv.NgaySinh, kv.TenKhoaVien 
        FROM sinhvien sv 
        JOIN khoavien kv ON sv.MaKhoaVien = kv.MaKhoaVien
        WHERE kv.TenKhoaVien = 'Sư phạm Toán'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sinh Viên Ngành Sư Phạm Toán</title>
</head>
<body>
    <h1>Danh Sách Sinh Viên Ngành Sư Phạm Toán</h1>
    <table border="1">
        <tr>
            <th>Mã Sinh Viên</th>
            <th>Họ Tên</th>
            <th>Lớp</th>
            <th>Ngày Sinh</th>
            <th>Khoa/Viện</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['MaSV']; ?></td>
            <td><?php echo $row['HoTen']; ?></td>
            <td><?php echo $row['Lop']; ?></td>
            <td><?php echo $row['NgaySinh']; ?></td>
            <td><?php echo $row['TenKhoaVien']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="index.php">Trở lại</a>
</body>
</html>
