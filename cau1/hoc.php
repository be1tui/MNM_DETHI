<!DOCTYPE html>
<html lang>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "quanlyhoc_db";

        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error); 
        }
        //echo "Connected successfully";
        if (!$conn->select_db($dbname)) {
            die("Không thể chọn cơ sở dữ liệu: " . $conn->error);
        }
    ?>
</body>
</html>
