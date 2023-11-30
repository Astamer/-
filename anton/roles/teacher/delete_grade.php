<?php
session_start();

include_once "../../includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_grade"])) {
    $grade_id = $_POST["grade_id"];

    // Проверяем, является ли пользователь преподавателем
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
        header("Location: ../../index.php");
        exit();
    }

    // Запрос на удаление оценки
    $query = "DELETE FROM grades WHERE id = ?";
    $statement = $conn->prepare($query);

    if (!$statement) {
        die('Error in query preparation: ' . $conn->error);
    }

    $statement->bind_param('i', $grade_id);
    $statement->execute();

    if ($statement->affected_rows > 0) {
        header("Location: grades.php"); // Перенаправляем на страницу с оценками после успешного удаления
        exit();
    } else {
        echo "Failed to delete grade. Error: " . $conn->error; // Выводим сообщение об ошибке
    }

    $statement->close();
}
?>
