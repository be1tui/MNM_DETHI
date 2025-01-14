<?php
    setcookie("username", "", time() - 60*60, "/");
    header("Location: login.html");
    exit();
?>
