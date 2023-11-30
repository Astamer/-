<?php
session_start();
include('../../includes/db.php');
include('../../includes/functions_admin.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add_user') {
    $new_username = $_POST['new_username'];
    $new_email = $_POST['new_email'];
    $new_role = $_POST['new_role'];
    $new_password = $_POST['new_password'];

    // Выполняем добавление нового пользователя
    $result = addUser($conn, $new_username, $new_email, $new_role, $new_password);

    if ($result) {
        // Успешное добавление, перенаправляем на страницу управления пользователями
        header("Location: manage_users.php");
        exit();
    } else {
        // В случае ошибки выводим сообщение
        $error_message = "Не удалось добавить пользователя.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор - Добавить пользователя</title>
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
        <h1>Администратор - Добавить пользователя</h1>
        <?php if (isset($error_message)): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="new_username">Имя пользователя:</label>
            <input type="text" id="new_username" name="new_username" required>

            <label for="new_email">Электронная почта:</label>
            <input type="email" id="new_email" name="new_email" required>

            <label for="new_password">Пароль:</label>
            <input type="password" id="new_password" name="new_password" required>

            <label for="new_role">Роль:</label>
            <select id="new_role" name="new_role" required>
                <option value="admin">Администратор</option>
                <option value="teacher">Преподаватель</option>
                <option value="student">Студент</option>
            </select>

            <input type="hidden" name="action" value="add_user">
            <button type="submit">Добавить пользователя</button>
        </form>
    </main>

 <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
