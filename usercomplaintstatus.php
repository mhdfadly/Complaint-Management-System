<?php

    session_start();
    include_once 'includes/dbhandler.inc.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_complaintstatus.css">
    <title>Menu Status Komplain</title>
    <style type="text/css">
  h6{
    color: #157bee;
  }
  </style>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar fixed-top navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="usermainmenu.php"> <img src="img/logo.svg" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav active ml-auto text-right">
                    <a class="nav-item nav-link" href="useraddcomplaintmenu.php">Tambah Komplain</a>
                    <a class="nav-item nav-link" href="includes/logout.inc.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Nav Bar -->

    <!-- Data Komplen -->
    <section class="status-compalint" id="status-complaint">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Status Komplain</h2>
                </div>
            </div>

            <!-- Tabel Status Komplen -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">TANGGAL KOMPLAIN</th>
                        <th scope="col">SUBJEK </th>
                        <th scope="col">STATUS </th>
                    </tr>
    <?php
    $username = $_SESSION['usernamesessionid'];
    $sql = "SELECT * FROM complaint WHERE complaintusernameid LIKE '$username'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
                echo "</td><td>".$row['complaintdate']."</td><td>".$row['complaintsubject']."</td><td><h6>".$row['complaintstatus']."</td></tr></h6>";
            }
        echo "</thead>
                <tbody>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                </tbody>
            </table>";       
    }    
    else {
        echo "<p>tidak ada hasil</p>";
    }
?>
            <!-- Akhir Tabel Status Komplen -->

    </section>
    <!-- Akhir Data Komplen -->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright &copy; 2019 | create by Cigan's co.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>