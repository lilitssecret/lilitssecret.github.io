<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_COOKIE['email'])) {
        header("Location: login.php");
        exit();
    }
    $email = $_COOKIE['email'];

    $photo = $_FILES['photo']['name'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $params = $_POST['params'];
    $hair = $_POST['hair'];
    $eyes = $_POST['eyes'];
    $nationality = $_POST['nationality'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $work = $_POST['work'];
    $contacts = $_POST['contacts'];
    $education = $_POST['education'];
    $participation = $_POST['participation'];
    $portfolio = $_FILES['portfolio']['name'];

    $userData = "Email: $email\n";
    $userData .= "Photo: $photo\n";
    $userData .= "Height: $height\n";
    $userData .= "Weight: $weight\n";
    $userData .= "Parameters: $params\n";
    $userData .= "Hair Color: $hair\n";
    $userData .= "Eye Color: $eyes\n";
    $userData .= "Nationality: $nationality\n";
    $userData .= "Age: $age\n";
    $userData .= "Gender: $gender\n";
    $userData .= "Work: $work\n";
    $userData .= "Contacts: $contacts\n";
    $userData .= "Education: $education\n";
    $userData .= "Participation: $participation\n";
    $userData .= "Portfolio: $portfolio\n\n";

    $file = fopen("user_details.txt", "a");
    fwrite($file, $userData);
    fclose($file);

    $_SESSION['message'] = 'Ваша заявка была принята';
    header("Location: index.php");
} else {
    header("Location: info.php");
}
?>
