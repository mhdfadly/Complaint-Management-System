<?php
if (isset($_POST['submit-signup'])){

    require 'dbhandler.inc.php';

    $username = $_POST['inputName'];
    $usernameid = $_POST['inputId'];
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    $passwordRepeat = $_POST['inputPasswordRepeat'];

    if (empty($username) || empty($usernameid) || empty($email) || empty($password) || empty($passwordRepeat)) {
        
        header ("Location: ../signup.php?error=emptyfields&inputName=".$username."&inputId=".$usernameid."&inputEmail=".$email);
        exit ();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $usernameid)){

        header ("Location: ../signup.php?error=invalidusernameusesymbol&inputName=".$username);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

        header ("Location: ../signup.php?error=invalidemail&inputName=".$username."&inputId=".$usernameid);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $usernameid)){

        header ("Location: ../signup.php?error=invalidusername&inputName=".$username."&inputEmail=".$email);
        exit();
    }
    else if ($password !== $passwordRepeat){

        header ("Location: ../signup.php?error=passwordcheck&inputName=".$username."&inputId=".$usernameid."&inputEmail=".$email);
        exit();
    }
    else {

        $sql = "SELECT usernameid FROM users WHERE usernameid=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){

            header ("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {

            mysqli_stmt_bind_param($stmt, "s", $usernameid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){

                header ("Location: ../signup.php?error=usernametaken&inputName=".$username."&inputEmail=".$email);
                exit();
            }
            else {

                $sql = "INSERT INTO users (username, usernameid, useremail, userpassword) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){

                    header ("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    
                    mysqli_stmt_bind_param($stmt, "ssss", $username, $usernameid, $email, $hashedPassword);
                    mysqli_stmt_execute($stmt);
                    header ("Location: ../index.php?signup=success");                   
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);    
}
else {

    header ("Location: ../signup.php");
    exit();
}