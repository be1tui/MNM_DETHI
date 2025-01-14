<?php
include 'database.php';
$sql_khoavien = "SELECT * FROM khoavien";
$result_khoavien = $conn->query($sql_khoavien);
$sql_sinhvien = "SELECT sv.MaSV, sv.HoTen, sv.Lop, sv.NgaySinh, kv.TenKhoaVien 
                 FROM sinhvien sv 
                 JOIN khoavien kv ON sv.MaKhoaVien = kv.MaKhoaVien";
$result_sinhvien = $conn->query($sql_sinhvien);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông Tin Khoa/Viện và Sinh Viên</title>
</head>
<body>
    <h1>Danh Sách Khoa/Viện</h1>
    <table border="1">
        <tr>
            <th>Mã Khoa/Viện</th>
            <th>Tên Khoa/Viện</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php while ($row = $result_khoavien->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['MaKhoaVien']; ?></td>
            <td><?php echo $row['TenKhoaVien']; ?></td>
            <td><?php echo $row['Phone']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><a href="edit.php?MaKhoaVien=<?php echo $row['MaKhoaVien']; ?>">Sửa</a></td>
            <td><a href="delete.php?MaKhoaVien=<?php echo $row['MaKhoaVien']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td> 
        </tr>
        <?php } ?>
    </table>

    <h1>Danh Sách Sinh Viên</h1>
    <table border="1">
        <tr>
            <th>Mã Sinh Viên</th>
            <th>Họ Tên</th>
            <th>Lớp</th>
            <th>Ngày Sinh</th>
            <th>Khoa/Viện</th>
            <th>Xóa</th>
        </tr>
        <?php while ($row = $result_sinhvien->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['MaSV']; ?></td>
            <td><?php echo $row['HoTen']; ?></td>
            <td><?php echo $row['Lop']; ?></td>
            <td><?php echo $row['NgaySinh']; ?></td>
            <td><?php echo $row['TenKhoaVien']; ?></td>
            <td><a href="delete.php?MaSV=<?php echo $row['MaSV']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
