<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style_registrasi.css">

  <title>Register Form</title>
  <style type="text/css">
  h6{
    color: #f43151;
  }
  </style>
</head>

<body>

  <div id="wrapper">
    <div id="left">
      <div id="register">
        <div class="logo">
          <img src="img/logo.svg" alt="goplain" width="200px" ;>
        </div>
        <div class="register-title">
          <h1>Registrasi</h1>
          <?php
            if (isset($_GET['error'])) {

              if ($_GET['error'] == "emptyfields") {

                echo '<h6>Harap isi bagian yang kosong</h6>';
              }
              else if ($_GET['error'] == "invalidusernameusesymbol") {

                echo '<h6>Username dan email salah</h6>';
              }
              else if ($_GET['error'] == "invalidusername") {

                echo '<h6>Username tidak boleh menggunakan symbol</h6>';
              }
              else if ($_GET['error'] == "invalidemail") {

                echo '<h6>Email tidak valid</h6>';
              }
              else if ($_GET['error'] == "passwordcheck") {
                
                echo '<h6>Password yang diulang tidak sesuai</h6>';
              }
              else if ($_GET['error'] == "usernametaken") {

                echo '<h6>Username sudah digunakan</h6>';
              }
              else if ($_GET['error'] == "invalidname") {

                echo '<h6>Nama tidak boleh menggunakan symbol</h6>';
              }
              else if ($_GET['signup'] == "success") {

                echo '<h6>Registrasi berhasil</h6>';
              }
            }
          ?>
        </div>

        <Form  action="includes/signup.inc.php" method="post">
          <div class="form-group">
            <label>Nama</label>
            <input type="name" class="form-control" name="inputName" placeholder="Masukan nama anda..">
          </div>
          <div class="form-group">
            <label>ID Pengguna</label>
            <input type="id" class="form-control" name="inputId" placeholder="Masukan username anda..">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="inputEmail" placeholder="Masukan email anda..">
          </div>
          <div class="form-group">
            <label>Kata Sandi</label>
            <input type="password" class="form-control" name="inputPassword"
              placeholder="Masukan kata sandi anda..">
          </div>
          <div class="form-group">
            <label>Ulangi Kata Sandi</label>
            <input type="password" class="form-control" name="inputPasswordRepeat"
              placeholder="Ulangi kata sandi anda..">
          </div>
          <button type="submit" class="signup-submit" name="submit-signup">Buat Akun</button>                  
        </form>
        <div class="links">
          <p>Sudah memiliki akun? <a href="index.php">Masuk</a> </p>
        </div>
      </div>
      <footer id="main-footer">
        <small>Copyright &copy; 2019 | create by Cigan's co.</small>
      </footer>
    </div>

    <div id="right">
      <div class="image-register">
        <img src="img/undraw_profile_6l1l.svg" alt="register" width="500px">
      </div>
    </div>
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