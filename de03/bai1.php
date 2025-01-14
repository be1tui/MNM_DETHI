<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 1</title>
</head>
<body>
    <form method="post">
        <input type="text" name="a" placeholder="Nhap so a"><br><br>
        <input type="text" name="b" placeholder="Nhap so b"><br><br>
        <button type="submit">Tính</button><br><br>
    </form>
    <?php
    if (isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        if ($a == 0) {
            if ($b == 0) {
                echo "Phuong trinh vo so nghiem";
            } else {
                echo "Phuong trinh vo nghiem";
            }
        } else {
            $x = -$b / $a;
            echo "Nghiem cua phuong trinh la: $x";
        }
    }
    ?>
</body>
</html>