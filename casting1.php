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
</section>

<section class="casting-info">
    <div class="casting-details">
        <div class="casting-photo">
            <!-- Include the casting photo here -->
            <img src="images/2.jpg" alt="Casting Photo">
        </div>
        <div class="casting-description">
            <h2>Основная Информация:</h2>
            <p>31 декабря, четверг</p>
            <p>Дворец Болоана Шолака</p>
            <p>Набор актеров для второго плана</p>
            <p>+7-707-4532167</p>
        </div>
    </div>
    <div class="about-casting">
        <div class="about-section">
            <h2>О нас:</h2>
            <p>SAU Media ent. объявляет о кастинге для нового фильма!</p>
            <p>Для участия в кастинге приглашаются актеры и актрисы от 18 до 45 лет.</p>
        </div>
        <div class="requirements-section">
            <h2>Требования:</h2>
            <p>- Опыт работы в кино и на телевидении приветствуется</p>
            <p>- Умение играть на камеру.</p>
            <p>- Свободное владение казахским и русским языками</p>
        </div>
    </div>
    <div class="casting-buttons">
        <button class="apply-btn" onclick="openDatePicker()">Записаться</button>
        <button class="contact-btn">Связаться</button>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <label for="castingDate">Выберите дату кастинга:</label>
            <input type="date" id="castingDate" min="2023-01-01" max="2023-12-31">
            <br>
            <label for="castingTime">Выберите время кастинга:</label>
            <select id="castingTime">
                <option value="9:00">9:00</option>
                <option value="11:00">11:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
            </select>
            <br>
            <a href="Register.html" class="button-link">Записаться</a>
        </div>
    </div>
</section>
<script>
    function openDatePicker() {
        document.getElementById('myModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    function openRegistrationForm() {
        const selectedDate = document.getElementById('castingDate').value;
        const selectedTime = document.getElementById('castingTime').value;
        // You can now process this information, possibly through a form submission or AJAX call
        // For example, you can pass this to your server for further processing or validation
        alert(`You selected Date: ${selectedDate}, Time: ${selectedTime}. Now open the registration form.`);
        // Here, you can open your registration form using modal or another way as you prefer
        // Close the modal after submission
        closeModal();
    }
</script>

</body>
</html>