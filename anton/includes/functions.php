<?php
include('db.php');

session_start();

function login($conn, $username, $password) {
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    $sql = "SELECT id, username, role FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user_data = $result->fetch_assoc();
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['username'] = $user_data['username'];
        $_SESSION['role'] = $user_data['role'];
        return true;
    } else {
        return false;
    }
}

function register($conn, $username, $email, $password, $role) {
    $username = $conn->real_escape_string($username);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);
    $role = $conn->real_escape_string($role);

    // Проверка, что пользователя с таким именем или email нет
    $check_sql = "SELECT id FROM users WHERE username = '$username' OR email = '$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        return false; // Пользователь уже существует
    }

    // Регистрация нового пользователя
    $register_sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
    $register_result = $conn->query($register_sql);

    return $register_result;
}

function logout() {
    session_destroy();
    header("Location: index.php");
    exit();
}
function getCourses($conn) {
    $sql = "SELECT * FROM courses";
    $result = mysqli_query($conn, $sql);

    $courses = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
    }

    return $courses;
}

function addCourse($conn, $name, $description) {
    $sql = "INSERT INTO courses (name, description) VALUES ('$name', '$description')";
    mysqli_query($conn, $sql);
}

function editCourse($conn, $course_id, $new_name, $new_description) {
    $sql = "UPDATE courses SET name='$new_name', description='$new_description' WHERE id=$course_id";
    mysqli_query($conn, $sql);
}

function deleteCourse($conn, $course_id) {
    $sql = "DELETE FROM courses WHERE id=$course_id";
    mysqli_query($conn, $sql);
}

function getCourseById($conn, $course_id) {
    $sql = "SELECT * FROM courses WHERE id=$course_id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
}
?>