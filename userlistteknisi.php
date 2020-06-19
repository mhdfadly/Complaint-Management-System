<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_userlistteknisi.css">
    <title>Menu Tambah Komplen</title>
</head>
<!-- STYLE -->
<style type="text/css">
    table{
        border-collapse: collapse;
        width: 100%;
        color: #000;
        font-family: monospace;
        font-size: 20px;
        text-align: left;
        margin-left: 3rem;
    }
    th {
        background-color: #d96459;
        color: white;
    }tr:nth-child(even){background-color:#f2f2f2;}
</style>

<body>
    <!-- Nav Bar -->
    <nav class="navbar fixed-top navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="menuteknisi.php"> <img src="img/logo.svg" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            </div>
        </div>
    </nav>
    <!-- Akhir Nav Bar -->

    <!-- Data Teknisi -->
    <section class="data_pengguna" id="data_pengguna">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Daftar Pengguna</h2>
                </div>
            </div>
            <table>
    <tr>
        <th>Nama Pengguna</th>
        <th>Username</th>
        <th>Email</th>
</tr>
<?php
                        $conn = mysqli_connect("localhost", "root", "", "phplogin");
                        if ($conn-> connect_error){
                            die("Connection Failed:". $conn-> connect_error);
                        }

                        $sql = "SELECT username, usernameid, useremail from users";
                        $result = $conn-> query($sql);

                        if($result-> num_rows > 0 ){
                            while($row = $result-> fetch_assoc()){
                                echo "<tr><td>".$row["username"]."</td><td>".$row["usernameid"]."</td><td>".$row["useremail"]."</td><tr>"."<br>";
                            }
                            echo "</table>";
                        }else{
                            echo "0 result";
                     }

                     $conn-> close();
                    ?>
</table>

    </section>
    <!-- Akhir Data Teknisi -->

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