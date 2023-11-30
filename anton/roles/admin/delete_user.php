<?php
session_start();
include('../../includes/db.php');
include('../../includes/functions_admin.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['user_id'])) {
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
} else {
    header("Location: manage_users.php");
    exit();
}
?>
