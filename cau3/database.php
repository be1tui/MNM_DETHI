<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dataname = "quanlyhoc_db";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Kết nối thất bại: ". $conn->connect_error);
    }
    if (!$conn->select_db($dataname)) {
        die("Không thể chọn cơ sở dữ liệu: ". $conn->error);
    }
?>