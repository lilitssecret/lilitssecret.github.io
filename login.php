<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $file = fopen("users.txt", "r");
    $success = false;
    while (($line = fgets($file)) !== false) {
        $fields = explode(",", trim($line));
        if ($fields[0] == $email && $fields[1] == $password) {
            $success = true;
            break;
        }
    }
    fclose($file);
    if ($success) {
        setcookie("email", $email, time() + 86400);
        header("Location: info.php");
        exit();
    } else {
        echo "<script>alert('User is not registered. Please check the entered data.');</script>";
        echo "<script>history.go(-1);</script>";
    }
}

