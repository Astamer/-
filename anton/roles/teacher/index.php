<?php
session_start();
include_once "../../includes/db.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: ../../index.php");
    exit();
}

// Fetch students and their grades from the database
$query = "SELECT users.username, grades.grade
          FROM users
          INNER JOIN grades ON users.id = grades.user_id
          WHERE users.role = 'student'
          ORDER BY grades.grade DESC";

// Execute the query
$result = mysqli_query($conn, $query);

// Check for query execution error
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Fetch data and store it in an array
$students = [];
while ($row = mysqli_fetch_assoc($result)) {
    $students[] = $row;
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<style>
 body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f8f8;
    color: #000; /* Changed text color to black */
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
    text-align: center;
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

h1, h2 {
    color: #000000;
}

table {
    width: 60%; /* Reduced table width */
    margin: 20px auto; /* Centered the table */
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #4285f4;
    color: #fff;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>

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
        <h1>Преподаватель - Главная</h1>
        <section>
            <h2>Список студентов по успеваемости</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Имя студента</th>
                        <th>Успеваемость</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?php echo $student['username']; ?></td>
                            <td><?php echo $student['grade']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

    </main>

    <footer>
        <p>&copy; 2023 Дистанционное обучение</p>
    </footer>
</body>
</html>
