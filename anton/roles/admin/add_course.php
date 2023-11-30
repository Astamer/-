<!-- В файле add_course.php -->

<?php
session_start();
include('../../includes/db.php');
include('../../includes/functions_admin.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add_course') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Вызываем функцию для добавления курса
    $result = addCourse($conn, $name, $description);

    if ($result) {
        // Успешное добавление, перенаправляем на страницу управления курсами
        header("Location: manage_courses.php");
        exit();
    } else {
        // В случае ошибки выводим сообщение
        $error_message = "Не удалось добавить курс.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор - Добавить курс</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="manage_users.php">Пользователи</a></li>
                <li><a href="manage_courses.php">Курсы</a></li>
                <li><a href="../../logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Администратор - Добавить курс</h1>
        <?php if (isset($error_message)): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="name">Название курса:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Описание курса:</label>
            <textarea id="description" name="description" required></textarea>

            <input type="hidden" name="action" value="add_course">
            <button type="submit">Добавить курс</button>
        </form>
    </main>

   <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
