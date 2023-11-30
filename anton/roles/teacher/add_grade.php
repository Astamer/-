<?php
session_start();

include_once "../../includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_grade"])) {
    $user_id = $_POST["user_id"];
    $lesson_id = $_POST["lesson_id"];
    $new_grade = $_POST["new_grade"];

    // Проверяем, является ли пользователь преподавателем
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
        header("Location: ../../index.php");
        exit();
    }

    // Запрос на добавление новой оценки
    $query = "INSERT INTO grades (user_id, lesson_id, grade) VALUES (?, ?, ?)";
    $statement = $conn->prepare($query);

    if (!$statement) {
        die('Error in query preparation: ' . $conn->error);
    }

    $statement->bind_param('iii', $user_id, $lesson_id, $new_grade);
    $statement->execute();

    if ($statement->affected_rows > 0) {
        header("Location: grades.php"); // Перенаправляем на страницу с оценками после успешного добавления
        exit();
    } else {
        echo "Failed to add grade.";
    }

    $statement->close();
}
?>
