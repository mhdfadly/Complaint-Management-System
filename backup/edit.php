<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style_edit.css">
    <title>Edit Data</title>
  </head>
  <body>
	  <div class="container">
	  <h3>Edit Tabel</h3>

<?php
$conn = mysqli_connect("localhost", "root", "", "phplogin");
$id = $_GET['complaintid'];
$data = mysqli_query($conn,"select * from complaint where complaintid ='$id'");
while($d = mysqli_fetch_array($data)){
	?>
	<form method="post" action="update.php">
		<div class="form">
		<table>
			
                <tr>
					<td>Nama Pengguna</td>
					<td>
                    <input type="hidden" name="complaintid" value="<?php echo $d['complaintid']; ?>">
					<input class="form-group" type="text" name="complaintusername" value="<?php echo $d['complaintusername']; ?>">
				</td>

                <tr>				
					<td>Tanggal Komplain</td>
					<td>
						<input class="form-date"  type="date" name="complaintdate" value="<?php echo $d['complaintdate']; ?>">
						
					</td>
				</tr>
			
				<tr>
					<td>Komplain</td>
					<td>
					<input class="form-group"  type="text" name="complaintdata" value="<?php echo $d['complaintdata']; ?>"></td>
					
				</tr>
			
			
			
				<tr>
					<td>Status</td>
					<td>
                    <select  class="form-control" id="exampleFormControlSelect1" name="complaintstatus">
							<option>Pilih Status</option>
							<option>Sudah</option>
							<option>Belum</option>
					</select>
                    </td>
				</tr>
			</div>		

		</table>
		
		<div class="tombol">
			<input class="simpan-btn" type="submit" value="SIMPAN">
			<input class="kembali-btn" type="submit" herf="tabel_odp.php" value="KEMBALI">
		</div>
	</form>
	
	
	<?php 
}
?>

	  </div>
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>