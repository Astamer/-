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
        <h1>Студент - Курс по использованию css</h1>
        <ul class=courses>
                <li><a href="../topics_edit/css/css1.php">css№1</a></li>
               <li><a href="../topics_edit/css/css2.php">css№2</a></li>
               <li><a href="../topics_edit/css/css3.php">css№3</a></li>
               <li><a href="../topics_edit/css/css4.php">css№4</a></li>
            </ul>
    </main>

    <footer>
        <!-- ... -->
    </footer>
</body>
</html>