<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дистанционное обучение - Регистрация</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        main {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            box-sizing: border-box;
            text-align: center;
        }

        h2 {
            color: #007bff;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        .login-link {
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #007bff;
            color: black;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000color: black;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000
        }
    </style>
</head>
<body>
    <header>
        <h1>Дистанционное обучение</h1>
    </header>

    <main>
        <?php
        include('includes/functions.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'register') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            if (register($conn, $username, $email, $password, $role)) {
                echo "<h2>Регистрация успешна!</h2>";
                echo "<p>Вы зарегистрированы как <strong>{$role}</strong>.</p>";
            } else {
                echo "<p class='error'>Ошибка при регистрации.</p>";
            }
        }
        ?>

        <form action="" method="post">
            <label for="username">Имя пользователя:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>

            <label for="role">Роль:</label>
            <select id="role" name="role" required>
                <option value="student">Студент</option>
                <option value="teacher">Преподаватель</option>
                <option value="admin">Администратор</option>
            </select>

            <input type="hidden" name="action" value="register">
            <button type="submit">Зарегистрироваться</button>
        </form>

        <p>Уже есть аккаунт? <a class="login-link" href="index.php">Войдите</a>.</p>
    </main>

    <footer>
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
