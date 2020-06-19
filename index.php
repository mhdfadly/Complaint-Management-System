<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_welcomepage.css">

    <title>Selamat Datang</title>
    <style type="text/css">
        h6{
            color: #f43151;
        }
    </style>
    <style type="text/css">
        h5{
            color: #0e5c97;
        }
    </style>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar fixed-top navbar-expand-lg ">
        <div class="container">
            <img href="index.php" src="img/logo.svg" alt="logo">
            <?php
            if (isset($_GET['error'])) {

              if ($_GET['error'] == "emptyfields") {

                echo '<h6>Harap isi bagian yang kosong</h6>';
              }
              else if ($_GET['error'] == "wrongpassword") {

                echo '<h6>Password anda salah</h6>';
              }
              else if ($_GET['error'] == "nouser") {

                echo '<h6>Username yang dimasukkan tidak terdaftar</h6>';
              }
            }
            if (isset($_GET['signup'])) {

                 if ($_GET['signup'] == "success") {

                    echo '<h5>Registrasi berhasil</h5>';
                  }
            }
          ?>

            <div class="login-container">
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="inputUsername" placeholder="ID pengguna..">
                    <input type="password" name="inputPassword" placeholder="Kata sandi..">
                    <button type="submit" class="masuk-btn" name="submit-masuk">Masuk</button>
                    <button type="submit" class="daftar-btn" name="submit-daftar">Daftar</button>
                </form>
                
            </div>
            
        </div>
    </nav>
    <!-- Akhir Nav Bar -->
    <div id="wrapper">
        <div id="left" class="left">
            <h3>Complaint Management System</h3>
            <p>Layanan Pengaduan Berbasis Website</p>
        </div>

        <div id="right" class="right">
            <img src="img/undraw_road_sign_mfpo.svg" alt="login" width="700px">
        </div>
    </div>

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