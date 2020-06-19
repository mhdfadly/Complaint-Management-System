<?php

if (isset($_POST['tombol-pengguna'])){

    header ("Location: ../userlistteknisi.php");
    exit();
}
else if (isset($_POST['tombol-komp-baru'])){

    header ("Location: ../acceptedcomplaintmenu.php");
    exit();
}
else if (isset($_POST['tombol-daftar-komp'])){

    header ("Location: ../complaintlistteknisi.php");
    exit();
}
else {

    header ("Location: ../menuteknisi.php");
    exit();
}