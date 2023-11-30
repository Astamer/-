<?php
session_start();

// Check if the user is logged in as a student
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: ../../index.php");
    exit();
}

include_once "../../includes/db.php";

// Fetch student details from the database
$user_id = $_SESSION['user_id'];
$sql_student = "SELECT username FROM users WHERE id = $user_id";
$result_student = $conn->query($sql_student);

if ($result_student->num_rows > 0) {
    $row_student = $result_student->fetch_assoc();
    $studentName = $row_student['username'];
} else {
    $studentName = "Студент";
}

// Fetch enrolled courses for the student
$sql_courses = "SELECT courses.name FROM courses 
                JOIN grades ON courses.id = grades.lesson_id 
                WHERE grades.user_id = $user_id";
$result_courses = $conn->query($sql_courses);

// Fetch upcoming lessons for the student
$sql_lessons = "SELECT lessons.name, courses.name as course_name FROM lessons
                JOIN courses ON lessons.course_id = courses.id
                WHERE lessons.id NOT IN (SELECT lesson_id FROM grades WHERE user_id = $user_id)
                LIMIT 3"; // Displaying the next 3 lessons
$result_lessons = $conn->query($sql_lessons);

// Fetch recent forum activity for the student
$sql_forum = "SELECT forum.comment, forum.lesson_id, lessons.name as lesson_name FROM forum
              JOIN lessons ON forum.lesson_id = lessons.id
              WHERE forum.user_id = $user_id
              ORDER BY forum.id DESC
              LIMIT 3"; // Displaying the last 3 forum comments
$result_forum = $conn->query($sql_forum);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<style>
/* styles.css */

body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f8f8;
    color: #333;
    margin: 0;
    padding: 0;
}

header {
    background-color: #4285f4;
    color: #fff;
    padding: 1em;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

main {
    padding: 20px;
}

.text {
    max-width: 800px;
    margin: 0 auto;
    text-align: justify;
}

.courses {
    list-style: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
}

.courses li {
    box-sizing: border-box;
    width: calc(33.33% - 20px);
    margin: 10px;
    border: 2px solid #4285f4;
    padding: 10px;
    text-align: center;
}

.courses li a {
    text-decoration: none;
    color: #4285f4;
    font-weight: bold;
}

h2 {
    color: #4285f4;
}

footer {
    background-color: #4285f4;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

/* Additional minimalist styles */
body {
    transition: background-color 0.3s ease-in-out;
}

main {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.text {
    padding: 20px;
}

ul {
    padding: 0;
}

li {
    margin-bottom: 10px;
}

footer {
    margin-top: 20px;
    background-color: #fff;
    box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.1);
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="courses.php">Курсы</a></li>
                <li><a href="forum.php">Форум</a></li>
                <li><a href="grades.php">Оценки</a></li>
                <li><a href="../../logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <div class="text">
        <h1>Студент - Главная страница</h1>
        <p>Добро пожаловать, <?php echo $studentName; ?>!</p>

        <h2>Ваши курсы:</h2>
        <ul class="courses">
            <?php
            while ($row_courses = $result_courses->fetch_assoc()) {
                echo "<li><a href='#'>" . $row_courses['name'] . "</a></li>";
            }
            ?>
        </ul>

        <h2>Предстоящие занятия:</h2>
        <ul class="courses">
            <?php
            while ($row_lessons = $result_lessons->fetch_assoc()) {
                $lessonLink = "courses.php?course=" . urlencode($row_lessons['course_name']) . "&lesson=" . urlencode($row_lessons['name']);
                echo "<li><a href='$lessons'>" . $row_lessons['course_name'] . " - " . $row_lessons['name'] . "</a></li>";
            }
            ?>
        </ul>

        <h2>Последние комментарии на форуме:</h2>
        <ul>
            <?php
            while ($row_forum = $result_forum->fetch_assoc()) {
                echo "<li>" . $row_forum['lesson_name'] . ": " . $row_forum['comment'] . "</li>";
            }
            ?>
        </ul>
    </div>
</main>

    <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>