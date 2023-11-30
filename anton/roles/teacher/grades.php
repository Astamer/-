<?php
session_start();

include_once "../../includes/db.php";

// Проверяем, является ли пользователь преподавателем
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: ../../index.php");
    exit();
}

// Получаем ID преподавателя
$teacher_id = $_SESSION['user_id'];

// Запрос для получения всех студентов
$query_students = "SELECT id, username FROM users WHERE role = 'student'";
$result_students = $conn->query($query_students);

if (!$result_students) {
    die('Error in query for students: ' . $conn->error);
}

// Получаем всех студентов
$students = $result_students->fetch_all(MYSQLI_ASSOC);

// Запрос для получения всех курсов
$query_courses = "SELECT id, name FROM courses";
$result_courses = $conn->query($query_courses);

if (!$result_courses) {
    die('Error in query for courses: ' . $conn->error);
}

// Получаем все курсы
$courses = $result_courses->fetch_all(MYSQLI_ASSOC);

// Запрос для получения всех оценок с именами пользователей
$query_grades = "
    SELECT grades.id, users.username AS user_name, lessons.name AS lesson_name, courses.name AS course_name, grades.grade
    FROM grades
    INNER JOIN users ON grades.user_id = users.id
    INNER JOIN lessons ON grades.lesson_id = lessons.id
    INNER JOIN courses ON lessons.course_id = courses.id
";

$result_grades = $conn->query($query_grades);

if (!$result_grades) {
    die('Error in query for grades: ' . $conn->error);
}

// Получаем все оценки
$grades = $result_grades->fetch_all(MYSQLI_ASSOC);
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

        .edit-form {
            margin-top: 10px;
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
            <th>Студент</th>
            <th>Лекция</th>
            <th>Курс</th>
            <th>Оценка</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($grades as $grade): ?>
            <tr>
                <td><?php echo $grade['user_name']; ?></td>
                <td><?php echo $grade['lesson_name']; ?></td>
                <td><?php echo $grade['course_name']; ?></td>
                <td><?php echo $grade['grade']; ?></td>

                <td>

                    <!-- Форма для редактирования оценки -->
                    <form class="edit-form" method="post" action="edit_grade.php">
                        <input type="hidden" name="grade_id" value="<?php echo $grade['id']; ?>">
                        <input type="text" name="new_grade" placeholder="Новая оценка">
                        <input type="submit" name="edit_grade" value="Изменить">
                    </form>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Форма для добавления новой оценки -->
    <form class="edit-form" method="post" action="add_grade.php">
        <label for="user_id">Студент:</label>
        <select name="user_id" required>
            <?php foreach ($students as $student): ?>
                <option value="<?php echo $student['id']; ?>"><?php echo $student['username']; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="lesson_id">Урок:</label>
        <select name="lesson_id" required>
            <?php foreach ($courses as $course): ?>
                <option value="<?php echo $course['id']; ?>"><?php echo $course['name']; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="new_grade">Новая оценка:</label>
        <input type="text" name="new_grade" required>

        <input type="submit" name="add_grade" value="Добавить оценку">
    </form>
</main>

 <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
