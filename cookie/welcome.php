<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    
    setcookie("username", $username, time() + 60*60, "/"); 

    echo "<h2>Xin chào, $username!</h2><br>";
    echo "Chúc mừng $username đăng nhập thành công!<br>";
    echo "<br><br>";
    echo "<a href='clearcookie.php'>Clear</a>";
} else {
    echo "Vui lòng đăng nhập qua <a href='login.html'>login.html</a>";
}
?>
