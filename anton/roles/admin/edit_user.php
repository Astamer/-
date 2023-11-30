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

    // Убедитесь, что $course_id установлен, и функция вызывается с правильными параметрами
    editCourse($conn, $course_id, $new_name, $new_description);

    // После успешного редактирования перенаправляем на страницу с курсами
    header("Location: courses.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование курса</title>
    <link rel="stylesheet" href="../../css/styles.css?v=2">
</head>
<body>
    <header>
        <!-- Навигационное меню, если необходимо -->
    </header>

    <main>
        <h1>Редактирование курса</h1>
        
        <form method="post" action="">
            <input type="hidden" name="course_id" value="<?php echo $course['id']; ?>">
            <label for="new_name">Новое название курса:</label>
            <input type="text" name="new_name" value="<?php echo $course['name']; ?>" required>
            
            <label for="new_description">Новое описание курса:</label>
            <textarea name="new_description" required><?php echo $course['description']; ?></textarea>
            
            <button type="submit" name="action" value="edit_course">Сохранить изменения</button>
        </form>
    </main>

    <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
