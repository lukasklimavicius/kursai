<?php
// login tikrinimai ir jungimasis
session_start();
if (isset($_POST['login'])) {
    include_once 'dbconnect.php';
    $username = mysqli_real_escape_string($conn, $_POST['usernamelogin']);
    $password = mysqli_real_escape_string($conn, $_POST['passwordlogin']);
    if (empty($username) || empty($password)) {
        header("Location: ../index.php?=login=empty");
        exit();
    } else {
        $sql          = "SELECT * FROM users WHERE user_username = '$username'";
        $result       = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        if ($result_check < 1) {
            header("Location: ../index.php?=login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                // dehash
                $hashedPwdCheck = password_verify($password, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../index.php?=login=error2");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    $_SESSION['u_id']       = $row['user_id'];
                    $_SESSION['u_username'] = $row['user_username'];
                    $_SESSION['u_email']    = $row['user_email'];
                    header("Location: ../index.php?=login=success");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../index.php?=login=error");
    exit();
}