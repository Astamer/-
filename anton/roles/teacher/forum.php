<?php
session_start();

include_once "../../includes/db.php";

// Проверяем, отправлена ли форма для удаления отзыва
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_review"])) {
    $review_id = $_POST['review_id'];


        // Удаляем отзыв, если имя преподавателя совпадает
        $delete_query = "DELETE FROM `forum` WHERE id = ?";
        $delete_statement = $conn->prepare($delete_query);
        $delete_statement->bind_param('i', $review_id);
        $delete_statement->execute();
        header("Location: forum.php"); // Перенаправляем на страницу форума
        exit();
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

    <!-- Вывод всех отзывов по курсам -->
    <?php foreach ($reviews as $review): ?>
        <div class="review-box">
            <h2><?php echo $review['course_name']; ?></h2>
            <p><strong>Студент:</strong> <?php echo $review['user_name']; ?></p>
            <p><strong>Отзыв:</strong> <?php echo $review['comment']; ?></p>
            <!-- Добавлено: кнопка удаления отзыва -->
            <form method="post" action="forum.php">
                <input type="hidden" name="review_id" value="<?php echo $review['id']; ?>">
                
                <button type="submit" name="delete_review" class="delete-button">Удалить отзыв</button>
            </form>
        </div>
    <?php endforeach; ?>
</main>

 <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
