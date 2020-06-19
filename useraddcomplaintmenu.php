<?php

    session_start();
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
    <link rel="stylesheet" href="css/style_buatkomplain.css">
    <title>Menu Tambah Komplen</title>
    <style type="text/css">
  h5{
    color: #f43151;
  }
  </style>
  <style type="text/css">
  h4{
    color: #3df110;
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
                    <a class="nav-item nav-link" href="usercomplaintstatus.php">Status Komplain</a>
                    <a class="nav-item nav-link" href="includes/logout.inc.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Nav Bar -->

    <!-- Buat Komplen -->
    <section class="make-compalint" id="make-complaint">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Buat Komplain</h2>
            <?php
            if (isset($_GET['error'])) {

              if ($_GET['error'] == "emptyfields") {

                echo '<h5>Harap isi bagian yang kosong</h5>';
              }
            }
            if (isset($_GET['addcomplaint'])) {

                if ($_GET['addcomplaint'] == "success") {

                    echo '<h4>Komplain berhasil dibuat</h4>';
                }
            }
            ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form action="includes/addcomplaint.inc.php" method="post">                       
                        <div class="form-group">
                            <label for="contact">Kontak</label>
                            <input type="contact" class="form-control" name="inputContact"
                                placeholder="Masukkan Nomor Telepon">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="subject" class="form-control" name="inputSubject"
                                placeholder="Masukkan Subjek Komplain">
                        </div>
                        <div class="form-group">
                            <label for="complaint">Komplain</label>
                            <textarea class="form-control" name="inputComplaint" rows="10"></textarea>
                        </div>
                        <button type="submit" class="primery-btn" name="submit-complaint">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- Akhir Buat Komplen -->

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