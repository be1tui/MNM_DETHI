<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == '1234') {
    $_SESSION['username'] = $username;
    echo "<h1>Đăng nhập thành công</h1>";
    echo "<p>Chào mừng, " . htmlspecialchars($username) . "!</p>";
    echo "<a href='clearsession.php'>Đăng xuất</a>";
} else {
    echo "<h1>Đăng nhập thất bại</h1>";
    echo "<p>Tên tài khoản hoặc mật khẩu không đúng.</p>";
    echo "<a href='login.html'>Thử lại</a>";
}
?>
