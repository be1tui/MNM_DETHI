<?php
include 'database.php';

$sql = "DELETE FROM sinhvien WHERE MaKhoaVien = 'LUAT'";
if ($conn->query($sql) === TRUE) {
    echo "Xóa thành công các sinh viên ngành Luật.";
} else {
    echo "Lỗi: " . $conn->error;
}
?>
