<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Студент - Курсы</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="courses.php">Курсы</a></li>
                <li><a href="forum.php">Форум</a></li>
                <li><a href="grades.php">Оценки</a></li>
                <li><a href="../../logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="text">
            <h1>Курсы</h1>
            <p>Здесь представлены полезные курсы:</p>
            <ul class="courses">
                <li><a href="lessons/color.php">Цвет</a></li>
                <li><a href="lessons/css.php">CSS</a></li>
                <li><a href="lessons/html.php">HTML</a></li>
                <li><a href="lessons/javaScript.php">JavaScript</a></li>
                <li><a href="lessons/web.php">Web</a></li>
                <li><a href="lessons/php.php">PHP</a></li>
                <li><a href="lessons/mysql.php">MySQL</a></li>
            </ul>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
