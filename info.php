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
} else {
    header("Location: login.php");
    exit();
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
                            <span class="user-name" style="color: black"><?php echo $fullname?></span> <span class="user-icon"><i class="fa-solid fa-user"></i></span>
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
</section>
        <section class="user-details">
            <h2>User Details</h2>
            <form action="saveUserInfo.php" method="POST" enctype="multipart/form-data">
                <!-- Photo -->
                <div class="form-group">
                    <label for="photo">Фото</label>
                    <input type="file" id="photo" name="photo" accept="image/*">
                </div>
                <h2>Внешность</h2>
                <!-- Physical Attributes -->
                <div class="form-group">
                    <label for="height">Рост (см):</label>
                    <input type="text" id="height" name="height">
                </div>
                <div class="form-group">
                    <label for="weight">Вес (кг):</label>
                    <input type="text" id="weight" name="weight">
                </div>
                <div class="form-group">
                    <label for="params">Параметры тела:</label>
                    <input type="text" id="params" name="params">
                </div>
                <div class="form-group">
                    <label for="hair">Цвет Волос:</label>
                    <input type="text" id="hair" name="hair">
                </div>
                <div class="form-group">
                    <label for="eyes">Цвет глаз:</label>
                    <input type="text" id="eyes" name="eyes">
                </div>
                <div class="form-group">
                    <label for="nationality">Национальность:</label>
                    <input type="text" id="nationality" name="nationality">
                </div>
                <h2>Основная Информация</h2>

                <div class="form-group">
                    <label for="age">Возраст</label>
                    <input type="text" id="age" name="age">
                </div>
                <div class="form-group">
                    <label for="gender">Пол</label>
                    <select id="gender" name="gender">
                        <option value="Женский">Женский</option>
                        <option value="Мужской">Мужской</option>
                        <option value="Другое">Другое</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="work">Род занятий</label>
                    <input type="text" id="work" name="work">
                </div>
                <div class="form-group">
                    <label for="contacts">Контакты</label>
                    <input type="text" id="contacts" name="contacts">
                </div>
                <!-- ... other personal information ... -->
                <h2>Опыт</h2>
                <!-- Experience -->
                <div class="form-group">
                    <label for="education">Высшее образование/Пройденные курсы</label>
                    <textarea id="education" name="education" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="participation">Участие в съемках</label>
                    <textarea id="participation" name="participation" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="portfolio">Портфолио</label>
                    <input type="file" id="portfolio" name="portfolio" accept=".pdf,.doc,.docx">
                </div>

                <div class="form-group">
                    <input type="submit" value="Сохранить">
                </div>
            </form>
        </section>
    </section>
    </body>
    </html>
