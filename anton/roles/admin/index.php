<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор - Главная</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="manage_users.php">Управление пользователями</a></li>
                <li><a href="manage_courses.php">Управление курсами</a></li>
                <li><a href="../../logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Администратор - Главная</h1>

        <div class="button-container">
            <a href="manage_users.php">Управление пользователями</a>
        </div>

        <div class="button-container">
            <a href="manage_courses.php">Управление курсами</a>
        </div>
    </main>
 <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
