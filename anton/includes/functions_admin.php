<?php
include('db.php');

session_start();

// Функция для получения всех пользователей
function getAllUsers($conn) {
    $query = "SELECT id, username, email, role, password FROM users";
    $result = mysqli_query($conn, $query);

    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    return $users;
}

// Функция для добавления нового пользователя
function addUser($conn, $username, $email, $role, $password) {
    $query = "INSERT INTO users (username, email, role, password) VALUES ('$username', '$email', '$role', '$password')";
    return mysqli_query($conn, $query);
}

function getUserById($conn, $user_id) {
    $query = "SELECT * FROM users WHERE id = '$user_id'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}


// Функция для удаления пользователя
function deleteUser($conn, $user_id) {
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    return $stmt->execute();
}

function addCourse($conn, $name, $description) {
    $query = "INSERT INTO courses (name, description) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $name, $description);
    
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        return false;
    }
}

function editCourse($conn, $course_id, $new_name, $new_description) {
    $query = "UPDATE courses SET name=?, description=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $new_name, $new_description, $course_id);
    
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        return false;
    }
}

function deleteCourse($conn, $course_id) {
    $query = "DELETE FROM courses WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $course_id);
    
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        return true;
    } else {
        return false;
    }
}

function getAllCourses($conn) {
    $query = "SELECT id, name, description FROM courses";
    $result = mysqli_query($conn, $query);

    $courses = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
    }

    return $courses;
}

function getCourseById($conn, $course_id) {
    $query = "SELECT id, name, description FROM courses WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $course_id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $course = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);

    return $course;
}


?>
