<?php
    session_start();
    $username = $_SESSION['usernamesession'];  
    $usernameid = $_SESSION['usernameidsession']; 
    $useremail = $_SESSION['useremailsession'];
    $usergender = $_SESSION['usergendersession'];
    $userjob = $_SESSION['userjobsession'];   
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
  <link rel="stylesheet" href="css/style_profil.css">

  <title>Profil</title>
  <style type="text/css">
  h6{
    color: #f43151;
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
                        <a class="nav-item nav-link" href="includes/logout.inc.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Akhir Nav Bar -->

        <!-- Profil  -->
    <section class="make-compalint" id="make-complaint">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Profil Pengguna</h2>
                </div>
            </div>

            <!-- Profil -->
        <div id="profil">
            <div id="avatar">
                <img src="img/iconfinder_user_male2_172626.png" alt="">
            </div>
        </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                <Form  action="#" method="post">
              <div class="container"> 
                <table>
                  <tr>
                    <td>Nama</td>
                    <td>
                    <input class="form-group" type="text" name="usernamesession" value="<?php echo $_SESSION['usernamesession']; ?>">
                  </tr>
                  <tr>
                    <td>ID Pengguna</td>
                    <td>
                    <input class="form-group" type="text" name="usernameidsession" value="<?php echo $_SESSION['usernameidsession']; ?>">
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>
                    <input class="form-group" type="text" name="useremailsession" value="<?php echo $_SESSION['useremailsession']; ?>">
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                    <input class="form-group" type="text" name="usergendersession" value="<?php echo $_SESSION['usergendersession']; ?>">
                  </tr>
                  <tr>
                    <td>Pekerjaan</td>
                    <td>
                    <input class="form-group" type="text" name="userjobsession" value="<?php echo $_SESSION['userjobsession']; ?>">
                  </tr> 
                </table>
              </div>
          </Form>
                </div>
            </div>
        </div>

    </section>
    <!-- Akhir Profil -->
          
      
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
  </div>

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