<?php
    include 'hoc.php';
    $sql = "SELECT * FROM khoa_dao_tao";
    $result = $conn->query($sql);

    echo "<h2>Thông tin Khoa</h2>";
    echo "<table border='1'>
    <tr>
        <th>Mã Khoa</th>
        <th>Tên Khoa</th>
        <th>Điện Thoại</th>
    </tr>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['MaKhoa']}</td>
                    <td>{$row['TenKhoa']}</td>
                    <td>{$row['DienThoai']}</td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Không có dữ liệu</td></tr>";
    }
    echo "</table>";
    $conn->close();
?>
    
