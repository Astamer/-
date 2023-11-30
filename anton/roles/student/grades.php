<?php
session_start();

include_once "../../includes/db.php";

// Проверяем, является ли пользователь студентом
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: ../../index.php");
    exit();
}

// Получаем ID студента
$user_id = $_SESSION['user_id'];




// Запрос для получения оценок студента
$query = "SELECT courses.name AS course_name, lessons.name AS lesson_name, grades.grade
          FROM grades
          INNER JOIN lessons ON grades.lesson_id = lessons.id
          INNER JOIN courses ON lessons.course_id = courses.id
          WHERE grades.user_id = ?
          ORDER BY courses.id, lessons.id";

$statement = $conn->prepare($query);
$statement->bind_param('i', $user_id);
$statement->execute();
$result = $statement->get_result();

// Получаем оценки студента
$grades = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
       table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            color: black; /* Добавляем цвет текста */
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
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
    <h1>Оценки</h1>

    <!-- Вывод таблички с оценками -->
    <table>
        <thead>
        <tr>
            <th>Курс</th>
            <th>Урок</th>
            <th>Оценка</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($grades as $grade): ?>
            <tr>
                <td><?php echo $grade['course_name']; ?></td>
                <td><?php echo $grade['lesson_name']; ?></td>
                <td><?php echo $grade['grade']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>

 <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
