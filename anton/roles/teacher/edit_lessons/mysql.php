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
    <title>Курсы</title>
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
                <li><a href="../../logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Учитель - Курс по запросам MySQL</h1>
        <ul class=courses>
            <li><a href="../topics_edit/mysql/mysql1.php">mysql№1</a></li>
            </ul>
    </main>

    <footer>
        <!-- ... -->
    </footer>
</body>
</html>