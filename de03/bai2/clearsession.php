<?php
session_start();
session_unset();
session_destroy();

echo "<h1>Bạn đã đăng xuất thành công!</h1>";
echo "<a href='login.html'>Đăng nhập lại</a>";
?>
