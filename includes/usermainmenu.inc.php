<?php

if (isset($_POST['buat-komplen'])){

    header ("Location: ../useraddcomplaintmenu.php");
    exit();
}
else if (isset($_POST['status-komplen'])){

    header ("Location: ../usercomplaintstatus.php");
    exit();
}
else if(isset($_POST['pengguna'])){
    header ("Location: ../daftar_pengguna_admin.php");
    exit();
}
else if(isset($_POST['teknisi'])){
    header ("Location: ../daftar_teknisi.php");
    exit();
}
else if(isset($_POST['komplain'])){
    header ("Location: ../data_komplen_admin.php");
    exit();
}
else if(isset($_POST['update'])){
    header ("Location: ../update.php");
    exit();
}
else if(isset($_POST['kembali'])){
    header ("Location: ../data_komplen_admin.php");
    exit();
}
else {

    header ("Location: ../nusermainmenu.php");
    exit();
}