<?php
require_once "database.php";
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    //Error Handling
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        header("Location: ../register.php?error=emptyfields&username=" . $username . "&email=" . $email);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location: ../register.php?error=invalidusername&username=" . $username . "&email=" . $email);
        exit();
    } elseif ($password !== $confirmPassword) {
        header("Location: ../register.php?error=invalidusername&username=" . $username . "&email=" . $email);
        exit();
    }
    //check if username already exist
    else {
        $sql = "SELECT username FROM users WHERE username = ? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowcount = mysqli_stmt_num_rows($stmt);
            if ($rowcount > 0) {
                header("Location: ../register.php?error=UsernamealreadyExists&username=" . $username . "&email=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users(username, password, email) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPassword, $email);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../register.php?success=Registered");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
