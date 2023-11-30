<?php
session_start();
include('../../includes/db.php');
include('../../includes/functions.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add_course') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    addCourse($conn, $name, $description);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'edit_course') {
    $course_id = $_POST['course_id'];
    $new_name = $_POST['new_name'];
    $new_description = $_POST['new_description'];

    editCourse($conn, $course_id, $new_name, $new_description);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'delete_course' && isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];
    deleteCourse($conn, $course_id);
}

$courses = getCourses($conn);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <style>
        body.modal-open {
            position: fixed;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #editForm, #confirmationModal, #addCourseForm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            z-index: 999;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        #editForm h2, #confirmationModal h2, #addCourseForm h2 {
            color: #4285f4;
        }

        #editForm label, #confirmationModal p, #addCourseForm label {
            display: block;
            margin-top: 10px;
        }

        #editForm input, #editForm textarea, #confirmationModal button, #addCourseForm input, #addCourseForm textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        #editForm button, #confirmationModal button, #addCourseForm button {
            background-color: #4285f4;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        #editForm button:hover, #confirmationModal button:hover, #addCourseForm button:hover {
            background-color: #357ae8;
        }

        #confirmationModal .close-button, #addCourseForm .close-button {
            background-color: #ddd;
            color: #333;
            margin-left: 10px;
        }

        #confirmationModal .close-button:hover, #addCourseForm .close-button:hover {
            background-color: #ccc;
        }

        .delete-button {
            background-color: #d9534f;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c9302c;
        }
        .footer {
    background-color: #4285f4;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

        .add-button {
            background-color: #5cb85c;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        #addCourseForm {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        padding: 20px;
        z-index: 999;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        display: none;
    }

        .add-button:hover {
            background-color: #4cae4c;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление курсами</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
 <header>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="manage_users.php">Управление пользователями</a></li>
                <li><a href="manage_courses.php">Управление курсами</a></li>
                <li><a href="../../logout.php">Выход</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Управление курсами</h1>

        <!-- Таблица с существующими курсами -->
        <table>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Действия</th>
            </tr>
            <?php foreach ($courses as $course): ?>
                <tr>
                    <td><?php echo $course['name']; ?></td>
                    <td><?php echo $course['description']; ?></td>
                    <td>
                        <a href="#" class="delete-button" onclick="showConfirmationModal(<?php echo $course['id']; ?>)">Удалить</a>
                        <a href="#" onclick="openEditForm(<?php echo $course['id']; ?>, '<?php echo $course['name']; ?>', '<?php echo $course['description']; ?>')">Редактировать</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <!-- Кнопка для открытия формы добавления нового курса -->
    <a href="#" class="add-button" onclick="toggleAddCourseForm()">Добавить курс</a>

    <!-- Форма для добавления нового курса -->
    <form id="addCourseForm" action="" method="post">
        <button class="close-button" onclick="toggleAddCourseForm()">Закрыть</button>
        <h2>Добавление нового курса</h2>
        <label for="name">Название курса:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Описание курса:</label>
        <textarea id="description" name="description" required></textarea>

        <input type="hidden" name="action" value="add_course">
        <button type="submit">Добавить курс</button>
    </form>

        <!-- Всплывающее окно с формой редактирования -->
        <div id="editForm">
            <button class="close-button" onclick="closeEditForm()">Закрыть</button>
            <h2>Редактирование курса</h2>
            <form action="" method="post">
                <label for="new_name">Новое название курса:</label>
                <input type="text" id="new_name" name="new_name" required>

                <label for="new_description">Новое описание курса:</label>
                <textarea id="new_description" name="new_description" required></textarea>

                <input type="hidden" name="action" value="edit_course">
                <input type="hidden" id="course_id" name="course_id" value="">
                <button type="submit">Сохранить изменения</button>
            </form>
        </div>

        <!-- Всплывающее окно подтверждения удаления -->
        <div id="confirmationModal">
            <button class="close-button" onclick="closeConfirmationModal()">Закрыть</button>
            <h2>Подтверждение удаления</h2>
            <p>Вы уверены, что хотите удалить этот курс?</p>
            <button class="delete-button" onclick="confirmDelete()">Удалить</button>
        </div>

        <!-- Форма удаления, одна на странице -->
        <form id="deleteForm" action="" method="get" style="display: none;">
            <input type="hidden" name="action" value="delete_course">
            <input type="hidden" id="course_id_delete" name="course_id" value="">
        </form>
    </main>

    <footer class="footer">
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>

    <script>
        function openEditForm(course_id, name, description) {
            document.getElementById('new_name').value = name;
            document.getElementById('new_description').value = description;
            document.getElementById('course_id').value = course_id;
            document.getElementById('editForm').style.display = 'block';
            document.body.classList.add('modal-open');
        }

        function closeEditForm() {
            document.getElementById('editForm').style.display = 'none';
            document.body.classList.remove('modal-open');
        }

        function showConfirmationModal(course_id) {
            document.getElementById('course_id_delete').value = course_id;
            document.getElementById('confirmationModal').style.display = 'block';
            document.body.classList.add('modal-open');
        }

        function closeConfirmationModal() {
            document.getElementById('confirmationModal').style.display = 'none';
            document.body.classList.remove('modal-open');
        }

        function confirmDelete() {
            document.getElementById('deleteForm').submit();
        }

        function openAddCourseForm() {
            document.getElementById('addCourseForm').style.display = 'block';
            document.body.classList.add('modal-open');
        }

        function closeAddCourseForm() {
            document.getElementById('addCourseForm').style.display = 'none';
            document.body.classList.remove('modal-open');
        }
        function toggleAddCourseForm() {
        var addCourseForm = document.getElementById('addCourseForm');
        if (addCourseForm.style.display === 'block') {
            addCourseForm.style.display = 'none';
            document.body.classList.remove('modal-open');
        } else {
            addCourseForm.style.display = 'block';
            document.body.classList.add('modal-open');
        }
    }
    </script>
</body>
</html>
