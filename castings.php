<?php
session_start();

if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
    $file = fopen("users.txt", "r");
    while (($line = fgets($file)) !== false) {
        $fields = explode(",", trim($line));
        if ($fields[0] == $email) {
            $fullname = $fields[2] . ' ' . $fields[3];
            break;
        }
    }
    fclose($file);
}
?>

<!DocType html>
<html lang="en">
<head>
    <!-- -->
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <title>Best EduNy</title>
    <link rel="stylesheet" href = "css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1320f1c566.js" crossorigin="anonymous"></script>
</head>
<body>
<section class = "header">
    <nav>
        <i class="fa-solid fa-bars""></i>
        <a href = "cabinet.php"><img src = "../FinalProjectWork/images/logo.png" alt=""></a>
        <div class = "nav-links">
            <ul>
                <li> <a href = "index.php"> Главная </a></li>
                <li> <a href = "partners.html"> Партнеры </a></li>
                <li> <a href = "models.html"> Модели </a></li>
                <li> <a href = "aboutUs.html"> О нас </a></li>
                <li>
                    <a href="#">
                        <div class="user-box">
                            <span class="user-name" style="color: black"><?php if(isset($fullname)) echo $fullname?></span> <span class="user-icon"><i class="fa-solid fa-user"></i></span>
                        </div>
                    </a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="logout.php" style="color: black">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ... (existing code) -->

    <section class="banner" style="margin-bottom: 60px">
        <div class="text-box">
            <h1>StarQ</h1>
            <div class="search-container">
                <form action="" method="get">
                    <input type="text" placeholder="Поиск" name="search">
                    <button type="submit"><i class="fa-solid fa-search"></i></button>
                </form>
            </div>
        </div>
        <img src="images/banner.jpg" alt="Banner Image">
    </section>

    <!--- course part ---->
    <section class ="course">
        <section class="course">
            <h1>Кастинги <a href="#"><i class="fa-solid fa-circle-arrow-right" style="font-size: 30px;"></i></a></h1>

        </section>

        <div class="row">
            <div class="course-col" >
                <img src="images/2.jpg" alt="Image">
                <div class="description">
                    <p>Кастинг для нового сериала в г. Алматы</p>
                </div>
                <a href="casting1.php"><i class="fa-solid fa-angle-right"></i></i></a>
            </div>
            <div class="course-col">
                <img src="images/3.jpg" alt="Image">
                <div class="description">
                    <p>Кастинг на главную роль драматического к..</p>
                </div>
                <a><i class="fa-solid fa-angle-right"></i></i></a>
            </div>
        </div>
    </section>
</body>
</html>