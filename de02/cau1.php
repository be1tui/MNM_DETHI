<!-- Câu 1: Sử dụng ngôn ngữ PHP viết chương trình tính tổng các số lẻ từ 1 đến n, 
trong đó n được nhập từ bàn phím. Nếu n < 2, yêu cầu người dùng nhập lại. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng Các Số Lẻ</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Nhập số n: </label>
        <input type="number" id="number" name="number" min="2" required>
        <button type="submit">Tính tổng</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["number"]);        
        if ($n < 2) {
            echo "<p>Vui lòng nhập một số lớn hơn hoặc bằng 2.</p>";
        } else {
            $sum = 0;
            for ($i = 1; $i <= $n; $i += 2) {
                $sum += $i;
            }
            echo "<p>Tổng các số lẻ từ 1 đến $n là: $sum</p>";
        }
    }
    ?>
</body>
</html>
