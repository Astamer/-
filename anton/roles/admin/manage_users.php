<?php
session_start();
include('../../includes/db.php');
include('../../includes/functions_admin.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Обработка удаления пользователя
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'delete_user' && isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Выполняем удаление пользователя
    $result = deleteUser($conn, $user_id);

    if ($result) {
        // Успешное удаление, перенаправляем на страницу управления пользователями
        header("Location: manage_users.php");
        exit();
    } else {
        // В случае ошибки выводим сообщение
        $error_message = "Не удалось удалить пользователя.";
    }
}

$users = getAllUsers($conn); // Получаем данные о пользователях

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор - Пользователи</title>
    <link rel="stylesheet" href="../../css/styles.css?v=2">

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
        <h1>Администратор - Пользователи</h1>
        
        <?php if (is_array($users) && count($users) > 0): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Имя пользователя</th>
                    <th>Email</th>
                    <th>Роль</th>
                    <th>Пароль</th>
                    <th>Действия</th>
                </tr>

                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['id']; ?></td>
                        <td><?= $user['username']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['role']; ?></td>
                        <td><?= $user['password']; ?></td>
                        <td>
                            <a href="edit_user.php?user_id=<?php echo $user['id']; ?>">Редактировать</a>
                            <a href="?action=delete_user&user_id=<?= $user['id']; ?>" onclick="return confirm('Вы уверены?')">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>Данные отсутствуют.</p>
        <?php endif; ?>

        <div class="button-container">
            <a href="add_user.php">Добавить пользователя</a>
        </div>
    </main>

 <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>