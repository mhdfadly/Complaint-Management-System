<?php
    session_start();
    $username = $_SESSION['usernamesession'];          
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
    <link rel="stylesheet" href="css/style_usermainmenu.css">
    <title>Menu Pengguna</title>
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
                    <a class="nav-item nav-link" href="userprofil.php">Profil</a>
                    <div class="nav-item nav-link" class="notif">
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
                    <a class="nav-item nav-link" href="includes/logout.inc.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Nav Bar -->

    <!-- Jumbotron -->
    <div class="jumbotron">   
        <?php
            echo '<h3>'.$username.'</h3>';
        ?>
        <img src="img/undraw_problem_solving_ft81.svg" alt="problem_solving">
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Cara Complen -->
    <section class="how-complaint" id="how-compalint">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Cara Komplain</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <p class="text-center" id="number">1</p>
                    <p>Anda bisa menghubungi kami secara langsung untuk status komplen Anda. Komplain akan diproses secara langsung dengan cara ini.</p>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <img src="img/undraw_contact_us_15o2.svg" alt="contact us" width="80%">
                </div>
                <div class="col-sm-4">
                    <p class="text-center" id="number">2</p>
                    <p>Bila anda tidak mengetahui untuk menghubungi siapa, atau anda memiliki nama tetapi tidak memiliki nomor untuk dihubungi, maka anda dapat menghubungi customer service kami di 1101293120371837921</p>
                    <hr>
                    <img src="img/undraw_calling_kpbp.svg" alt="contact us" width="80%">
                </div>
                <div class="col-sm-4">
                    <p class="text-center" id="number">3</p>
                    <p>Cara terbaik untuk komplain adalah dengan menggunakan forum online kami.</p>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <img src="img/undraw_online_page_cq94.svg" alt="contact us" width="80%">
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Cara Complen -->

    <!-- Bagian Tombol -->
    <section class="tombol" id="tombol">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <form action="includes/usermainmenu.inc.php" method="post">
                    <button type="submit" name="buat-komplen" class="buat-komplen">Buat Komplain</button>
                    <button type="submit" name="status-komplen" class="status-komplen">Status Komplain</button>
                </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Bagian Tombol -->

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