<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_menuadmin.css">
    <title>Menu Admin</title>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar fixed-top navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="menuadmin.php"> <img src="img/logo.svg" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav active ml-auto text-right">
                <div class="notif">
                    <div class="dropdown">
                        <li style="color: #fff;" class="dropdown" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a href="">Notifikasi</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button"><a href="">Notif 1</a></button>
                            <button class="dropdown-item" type="button"><a href="">Notif 2</a></button>
                            <button class="dropdown-item" type="button"><a href="">Notif 3</a></button>
                            <button class="dropdown-item" type="button"><a href="">Notif 4</a></button>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
                <div class="navbar-nav active ml-auto text-right">
                    <a class="nav-item nav-link" href="includes/logout.inc.php">Logout</a>
                </div>  
            </div>
        </div>
    </nav>
    <!-- Akhir Nav Bar -->

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h3>Selamat Datang, Admin</h3>
        <img src="img/undraw_software_engineer_lvl5.svg" alt="admin-png">
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Menu Admin -->
    <section class="menu-admin" id="menu-admin">
        <div class="container">

            <div class="row">
                <div class="col-sm-6">
                    <form action = "includes/usermainmenu.inc.php" method = "POST">
                    <button type="submit" class="akses-admin" name = "pengguna" id="tombol-pengguna">PENGGUNA</button>
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="akses-admin" name = "komplain" id="tombol-komplen">KOMPLAIN</button>
                </div>
                    </form>
                
            </div>
        </div>
    </section>
    <!--  Akhir Menu Admin-->

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
    <script src="js/parallax.js"></script>
</body>

</html>