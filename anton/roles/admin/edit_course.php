<?php
session_start();
include('../../includes/db.php');
include('../../includes/functions.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];
    $course = getCourseById($conn, $course_id);

    if (!$course) {
        // Курс не найден, перенаправляем обратно
        header("Location: courses.php");
        exit();
    }
} else {
    // Некорректные параметры запроса, перенаправляем обратно
    header("Location: courses.php");
    exit();
}

// Обработка POST-запроса при редактировании
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'edit_course') {
    $new_name = $_POST['new_name'];
    $new_description = $_POST['new_description'];

    editCourse($conn, $course_id, $new_name, $new_description);

    // После успешного редактирования перенаправляем на страницу с курсами
    header("Location: courses.php");
    exit();
}
?>