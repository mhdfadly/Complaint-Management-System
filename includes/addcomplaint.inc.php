<?php
    
    session_start();
if (isset($_POST['submit-complaint'])){

    require 'dbhandler.inc.php';

    $complaintid = $_POST['complaintid'];
    $username = $_SESSION['usernamesessionid'];
    $date = date('d-m-y');
    $contact = $_POST['inputContact'];
    $subject = $_POST['inputSubject'];
    $complaint = $_POST['inputComplaint'];
    $status = 'Belum';
    $customerid = $_SESSION['usersessionid'];

    if (empty($contact) || empty($subject) || empty($complaint)) {
        
        header ("Location: ../useraddcomplaintmenu.php?error=emptyfields&inputContact=".$contact."&inputSubject=".$subject."&inputComplaint=".$complaint);
        exit ();
    }
    else {

                $sql = "INSERT INTO complaint (complaintusernameid, complaintdate, complaintcontact, complaintsubject, complaintdata, complaintstatus, customerid) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){

                    header ("Location: ../useraddcomplaintmenu.php?error=sqlerror");
                    exit();
                }
                else {                    
                    
                    mysqli_stmt_bind_param($stmt, "sssssss", $username, $date, $contact, $subject, $complaint, $status, $customerid);
                    mysqli_stmt_execute($stmt);
                    header ("Location: ../useraddcomplaintmenu.php?addcomplaint=success");                   
                    exit();
                }
            }   
    mysqli_stmt_close($stmt);
    mysqli_close($conn);  
}  
else {

    header ("Location: ../usermainmenu.php");
    exit();
}