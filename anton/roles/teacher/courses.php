<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учитель - Курсы</title>
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
        <h1>Курсы</h1>
        <p>Выберите курс для изменения</p>
        <ul class=courses>
                <li><a href="edit_lessons/color.php">Цвет</a></li>
                <li><a href="edit_lessons/css.php">css</a></li>
                <li><a href="edit_lessons/html.php">html</a></li>
                <li><a href="edit_lessons/javaScript.php">javaScript</a></li>
                <li><a href="edit_lessons/web.php">web</a></li>
                <li><a href="edit_lessons/php.php">php</a></li>
                <li><a href="edit_lessons/mysql.php">mysql</a></li>
                <li><a href="manage_courses.php">Изменить название курсов и их описание</a></li>
            </ul>
    </main>

 <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
