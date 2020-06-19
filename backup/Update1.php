<?php 
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "phplogin");
 
// menangkap data yang di kirim dari form
$id = $_POST['complaintid'];
$usernameid = $_POST['complaintusernameid'];
$date = $_POST['complaintdate'];
$contact = $_POST['complaintcontact'];
$subject = $_POST['complaintsubject'];
$data = $_POST['complaintdata'];
$status = $_POST['complaintstatus'];

 
// update data ke database
mysqli_query($conn,"update complaint set complaintusernameid='$usernameid', complaintdate='$date', complaintcontact='$contact', complaintsubject='$subject', complaintdata='$data', complaintstatus='$status' where complaintid='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_komplen_admin.php");
 
?>