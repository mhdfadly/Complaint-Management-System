<?php
 if(isset($_POST['update']))
{
 $hostname = "localhost";
 $username = "root";
 $password = "";
 $databaseName = "phplogin";

 $connect = mysqli_connect($hostname, $username, $password, $databaseName);

 $id = $_POST['id'];
 $status = $_POST['statuscmp'];

 $query = "UPDATE `complaint` SET `complaintstatus`='".$status."' WHERE `complaintid` = $id";

$result = mysqli_query($connect, $query);

mysqli_close($connect);

             }

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
    <link rel="stylesheet" href="css/style_update.css">
    <title>Menu Update </title>
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
            
        </div>
    </div>
</nav>
<!-- Akhir Nav Bar -->

<!-- Buat Komplen -->
<section class="make-compalint" id="make-complaint">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><p>Edit Status</p></h1>

                <?php
                if(isset($_POST['update'])){
                    echo "<font color='red'> Data Updated</font>";
                }else{
                    echo "<font color='red'> Data Not Updated</font>";
                }
                
                ?>
                
        <?php
        if (isset($_GET['error'])) {

          if ($_GET['error'] == "emptyfields") {

            echo '<p>Harap isi bagian yang kosong</p>';
          }
        }
        if (isset($_GET['addcomplaintstatus'])) {

            if ($_GET['addcomplaintstatus'] == "success") {

                echo '<p>Komplain berhasil dibuat</p>';
            }
        }
        
        ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form action="update.php" method="post">
                         
                    <div class="form-group">
                        <label for="contact"><strong>Nomor ID</strong></label>
                        <input type="contact" class="form-control" name="id" required >
                    </div>
                
                    <div class="form-group">
                        <label for="subject"><strong>Status</strong></label>
                        <select name = "statuscmp">
                        <option>-Pilih Status-</option>
                        <option value = "Sudah" >Sudah</option>
                        <option value = "Belum" >Belum</option>
                        </select>
                    </div>
                    <button type="submit" class="primery-btn" name="update">Perbarui</button>
                </form>
                <form action = "includes/usermainmenu.inc.php" method = "POST">
                    <button type="submit" class="primery-btn" name="kembali">Kembali</button>
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