<?php
session_start();

include_once "../../includes/db.php";

// Проверяем, отправлена ли форма для добавления отзыва
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_review"])) {
    $user_id = $_SESSION['user_id'];
    $course_id = $_POST['course_id'];
    $comment = $_POST['comment'];

    // Выполняем вставку отзыва в базу данных с использованием подготовленного выражения
    $query = "INSERT INTO `forum` (lesson_id, user_id, comment) VALUES (?, ?, ?)";
    $statement = $conn->prepare($query);
    $statement->bind_param('iis', $course_id, $user_id, $comment);

    if ($statement->execute()) {
        // Отзыв успешно добавлен
        header("Location: forum.php"); // Перенаправляем на страницу форума
        exit();
    } else {
        // Обрабатываем ошибку
        $error_message = "Не удалось добавить отзыв. Пожалуйста, попробуйте еще раз.";
    }
}

// Проверяем, отправлена ли форма для удаления отзыва
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_review"])) {
    $review_id = $_POST['review_id'];
    $user_id = $_SESSION['user_id'];

    // Проверяем, принадлежит ли отзыв текущему пользователю
    $check_query = "SELECT * FROM `forum` WHERE id = ? AND user_id = ?";
    $check_statement = $conn->prepare($check_query);
    $check_statement->bind_param('ii', $review_id, $user_id);
    $check_statement->execute();
    $result = $check_statement->get_result();

    if ($result->num_rows > 0) {
        // Удаляем отзыв, так как он принадлежит текущему пользователю
        $delete_query = "DELETE FROM `forum` WHERE id = ?";
        $delete_statement = $conn->prepare($delete_query);
        $delete_statement->bind_param('i', $review_id);
        $delete_statement->execute();
        header("Location: forum.php"); // Перенаправляем на страницу форума
        exit();
    } else {
        // Отзыв не принадлежит текущему пользователю, обрабатываем ошибку или просто игнорируем
        $error_message = "Ошибка удаления отзыва.";
    }
}

// Получаем отзывы и курсы из базы данных
$query = "SELECT forum.*, courses.name AS course_name, users.username AS user_name FROM forum
          INNER JOIN lessons ON forum.lesson_id = lessons.id
          INNER JOIN courses ON lessons.course_id = courses.id
          INNER JOIN users ON forum.user_id = users.id
          ORDER BY courses.id, forum.id";
$result = $conn->query($query);

// Проверяем успешность выполнения запроса
if (!$result) {
    die("Ошибка выполнения запроса: " . $conn->error);
}

$reviews = $result->fetch_all(MYSQLI_ASSOC);

// Загрузка списка курсов
$queryCourses = "SELECT * FROM `courses`";
$resultCourses = $conn->query($queryCourses);

// Проверяем успешность выполнения запроса
if (!$resultCourses) {
    die("Ошибка выполнения запроса: " . $conn->error);
}

$courses = $resultCourses->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
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

        .review-box {
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
            position: relative;
        }

        .delete-button {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .review-form {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .review-form label {
            display: block;
            margin-bottom: 10px;
        }

        .review-form select,
        .review-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .review-form input[type="submit"] {
            background-color: #4285f4;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .review-form input[type="submit"]:hover {
            background-color: #1c5fac;
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
        <h1>Форум</h1>

        <!-- Форма для добавления отзыва -->
        <div class="review-form">
            <h2>Добавить отзыв</h2>
            <form method="post" action="forum.php">
                <label for="course_id">Выберите курс:</label>
                <select name="course_id" id="course_id" required>
                    <?php foreach ($courses as $course): ?>
                        <option value="<?php echo $course['id']; ?>"><?php echo $course['name']; ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="comment">Оставьте свой отзыв:</label>
                <textarea name="comment" id="comment" rows="4" required></textarea>

                <input type="submit" name="submit_review" value="Отправить отзыв">
            </form>
        </div>

        <!-- Вывод всех отзывов по курсам -->
        <?php foreach ($reviews as $review): ?>
            <div class="review-box">
                <h2><?php echo $review['course_name']; ?></h2>
                <p><strong>Студент:</strong> <?php echo $review['user_name']; ?></p>
                <p><strong>Отзыв:</strong> <?php echo $review['comment']; ?></p>
                <!-- Добавлено: кнопка удаления отзыва -->
                <?php if ($review['user_id'] == $_SESSION['user_id']): ?>
                    <form method="post" action="forum.php">
                        <input type="hidden" name="review_id" value="<?php echo $review['id']; ?>">
                        <button type="submit" name="delete_review" class="delete-button">Удалить отзыв</button>
                    </form>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </main>

    <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
