<?php

    if (isset($_POST['submit-masuk'])){

        require 'dbhandler.inc.php';

        $username = $_POST['inputUsername'];
        $password = $_POST['inputPassword'];

        if (empty($username) || empty($password)){

            header ("Location: ../index.php?error=emptyfields");
            exit();
        }
        else if (($username == "admin") && ($password == "admin")){
            header ("Location: ../menuadmin.php?loginsuccess");
            exit();
        }
        else {

            $sql = "SELECT * FROM users WHERE usernameid=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){

                header ("Location: ../index.php?error=sqlerror");
                exit();
            }
            else {

                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)){
    
                    $passwordCheck = password_verify($password, $row['userpassword']);
                    if ($passwordCheck == false){
    
                        header ("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                    else if ($passwordCheck == true){
    
                        session_start();
                        $_SESSION['usersessionid'] = $row['userid'];
                        $_SESSION['usernameidsession'] = $row['usernameid'];
                        $_SESSION['usernamesession'] = $row['username'];
                        $_SESSION['useremailsession'] = $row['useremail'];
                        $_SESSION['usergendersession'] = $row['usergender'];
                        $_SESSION['userjobsession'] = $row['userjob'];

                        header ("Location: ../usermainmenu.php?login=success");
                        exit();
                    }
                    else {
    
                        header ("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                }
                else {
    
                    header ("Location: ../index.php?error=nouser");
                    exit();
                }
            }    
        }
    }
    else if(isset($_POST['submit-daftar'])){
        
        header ("Location: ../signup.php");
        exit();
    }
    
    else {

        header ("Location: ../index.php");
        exit();
    }