<?php
        include 'hoc.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $MaKhoa = $_POST['MaKhoa'];
            $TenKhoa = $_POST['TenKhoa'];
            $DienThoai = $_POST['DienThoai'];

            $sql = "UPDATE khoa_dao_tao SET TenKhoa='$TenKhoa', DienThoai='$DienThoai' WHERE MaKhoa='$MaKhoa'";
            if ($conn->query($sql) === TRUE) {
                echo "Cập nhật thành công!";
            } else {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        }

        if (isset($_GET['MaKhoa'])) {
            $MaKhoa = $_GET['MaKhoa'];
            $result = $conn->query("SELECT * FROM khoa_dao_tao WHERE MaKhoa='$MaKhoa'");
            $row = $result->fetch_assoc();
        }
        $conn->close();
    ?>

<form method="post">
    <label>Mã Khoa:</label>
    <input type="text" name="MaKhoa" required><br>
    <label>Tên Khoa:</label>
    <input type="text" name="TenKhoa" required><br>
    <label>Điện Thoại:</label>
    <input type="text" name="DienThoai" required><br>
    <button type="submit">Cập nhật</button>
</form>

