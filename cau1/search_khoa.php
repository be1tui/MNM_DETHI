<?php
include 'hoc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $TenKhoa = $_POST['TenKhoa'];
    $sql = "SELECT * FROM khoa_dao_tao WHERE TenKhoa LIKE '%$TenKhoa%'";
    $result = $conn->query($sql);

    echo "<h2>Kết quả tìm kiếm</h2>";
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
        echo "<tr><td colspan='3'>Không tìm thấy</td></tr>";
    }
    echo "</table><br>";
}
?>

<form method="post">
    <label>Nhập tên khoa:</label>
    <input type="text" name="TenKhoa" required><br>
    <button type="submit">Tìm kiếm</button>
</form>
