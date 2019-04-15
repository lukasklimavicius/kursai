<?php
// registracijos tikrinimai
if (isset($_POST['register'])) {
    include_once 'dbconnect.php';
    $regusername = mysqli_real_escape_string($conn, $_POST['username']);
    $regemail    = mysqli_real_escape_string($conn, $_POST['emailas']);
    $regpwd      = mysqli_real_escape_string($conn, $_POST['password']);
    if (empty($regusername) || empty($regemail)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    } else {
        // ar atitinka email formatas
        if (!filter_var($regemail, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../signup.php?signup=invalidemail");
            exit();
        } else {
            // ar username jau naudojamas
            $sql          = "SELECT * FROM users WHERE user_email = '$regemail'";
            $result       = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if ($result_check > 0) {
                header("Location: ../signup.php?signup=emailtaken");
                exit();
            }
            // ar email jau naudojamas
            $sql1          = "SELECT * FROM users WHERE user_username = '$regusername'";
            $result1       = mysqli_query($conn, $sql1);
            $result_check1 = mysqli_num_rows($result1);
            if ($result_check1 > 0) {
                header("Location: ../signup.php?signup=usertaken");
                exit();
            } else {
                // sukuriamas hash passwordui
                $hashedPwd = password_hash($regpwd, PASSWORD_DEFAULT);
                // Ikeliam useri i DB
                $sql       = "INSERT INTO users (user_username, user_email, user_pwd) VALUES('$regusername', '$regemail', '$hashedPwd');";
                mysqli_query($conn, $sql);
                header("Location: ../signup.php?signup=success");
                exit();
            }
        }
    }
} else {
    header("Location: ../signup.php");
    exit();
}