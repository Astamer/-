<?php
session_start();

include_once "../../includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_grade"])) {
    $grade_id = $_POST["grade_id"];
    $new_grade = $_POST["new_grade"];

    // Проверяем, является ли пользователь преподавателем
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
        header("Location: ../../index.php");
        exit();
    }

    // Запрос на обновление оценки
    $query = "UPDATE grades SET grade = ? WHERE id = ?";
    $statement = $conn->prepare($query);

    if (!$statement) {
        die('Error in query preparation: ' . $conn->error);
    }

    $statement->bind_param('di', $new_grade, $grade_id);
    $statement->execute();

    if ($statement->affected_rows > 0) {
        header("Location: grades.php"); // Перенаправляем на страницу с оценками после успешного обновления
        exit();
    } else {
        echo "Failed to update grade.";
    }

    $statement->close();
}
?>
