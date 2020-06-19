<?php
error_reporting(0);
include 'includes/dbhandler.inc.php';
?>


<!doctype html>
<html lang="en">

<head>
<title>Table Database</title>
    <style type="text/css">
    table{
        border-collapse: collapse;
        width: 100%;
        color: #000;
        font-family: monospace;
        font-size: 15px;
        text-align: left;
        margin-left: 0rem;
    }
    th {
        background-color: #d96459;
        color: white;
    }tr:nth-child(even){background-color:#f2f2f2;}
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_datakomplainadmin.css">
    <title>Menu Data Komplain</title>
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

    <!-- Data Komplen -->
    <section class="data-compalint" id="data-complaint">
        <div class="container">
        <div class="row">
                <div class="col-sm-8">
                    <h2>Tabel ODP</h2>
                </div> 

                <div class="col-sm-4" style="margin-top: 4rem;"> 
                    <form class="form-inline"  role="search" method="post" action="">
                        <div>
                            <input type="text" name="pencarian" class="form-control" placeholder="Cari Disini..."/>
                        </div>
                        <div style="margin-left: 5px;">
                            <button class="btn btn-info"  type="submit"><img src="img/icons8-search-24.png"> </button>
                        </div>
                    </form>
                </div> 
            </div>

            <!-- Tabel Status Komplen -->
            <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">NO</th>
                            <th scope="col">NOMOR ID</th>
                            <th scope="col">NAMA PENGGUNA</th>
                            <th scope="col">TANGGAL KOMPLAIN</th>
                            <th scope="col">KOMPLAIN </th>
                            <th scope="col">STATUS </th>
                            <th scope="col">OPSI </th>
                            <div class="btn-group" role="group">
                        </tr>
                    </thead>

                    <?php
                        $no = 1;
                    $cari = $_POST['pencarian'];
                    if($cari != ''){
                        $select = mysqli_query($conn, "SELECT * FROM complaint WHERE complaintid LIKE '%".$cari."%' OR complaintusernameid LIKE '%".$cari."%' OR complaintdate LIKE '%".$cari."%' OR complaintdata LIKE '%".$cari."%'
                        OR complaintstatus LIKE '%".$cari."%' "); 
                    }else{
                        $select = mysqli_query($conn, "SELECT * FROM complaint");
                    }
                    if(mysqli_num_rows($select)){
                    while($row  = mysqli_fetch_array($select)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['complaintid']; ?></td>
                            <td><?php echo $row['complaintusernameid']; ?></td>
                            <td><?php echo $row['complaintdate']; ?></td>
                            <td><?php echo $row['complaintdata']; ?></td>
                            <td><?php echo $row['complaintstatus']; ?></td>
                            <td>
                                <a href="hapus.php?id=<?php echo $row['complaintid']; ?>">HAPUS</a>
                            </td>
                        </tr>
                            <?php } }else{
                                echo'<tr><td colspan="11">Tidak ada data</td></tr>';
                            }
                    $conn-> close(); 
                    ?>                
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td> 
                    </tr>
                </tbody>
            </table>
            <!-- Akhir Tabel Status Komplen -->

            <div class="tombol-export" style="margin-left:10rem; margin-top:3rem;" >
                        <form action = "includes/usermainmenu.inc.php" method = "POST">
                            <button type="submit" class="primery-btn" name="update">Edit Status</button>
                        </form>
            </div>

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