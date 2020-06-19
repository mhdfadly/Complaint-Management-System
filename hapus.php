<?php

$id = $_GET['id'];

$dbname = "phplogin";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM complaint WHERE complaintid = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: data_komplen_admin.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>