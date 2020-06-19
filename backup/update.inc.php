<?php
    if(isset($_POST['updatetabel'])){
        header ("Location: ../edit.php");
        exit();
    }
    else if(isset($_POST['kembali'])){
        header ("Location: ../data_komplen_admin.php");
        exit();
    }