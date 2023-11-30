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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Студент - Курсы</title>
    <link rel="stylesheet" href="../../../css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Главная</a></li>
                <li><a href="../courses.php">Курсы</a></li>
                <li><a href="../forum.php">Форум</a></li>
                <li><a href="../grades.php">Оценки</a></li>
                <li><a href="../../../logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Студент - Курс по запросам MySQL</h1>
        <ul class=courses>
            <li><a href="../../../topics/mysql/mysql1.php">mysql№1</a></li>
            </ul>
    </main>

 <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>