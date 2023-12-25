<?php
session_start();

if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 3600); // expire the cookie
}

session_destroy();
header("Location: Login.html");
exit();
