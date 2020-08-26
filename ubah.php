<?php 

	require 'functions.php';



	$id = $_GET["id"];

	$daftar = query("SELECT * FROM perpus_tb WHERE id = $id")[0];


	if (isset($_POST["submit"])) {

		if ( ubah($_POST) > 0) {
			
			echo "<script>
					alert('Berhasil Diubah');
					document.location.href='index.php';
						</script>";

		} else{

			echo "<script>
					alert('gagal Diubah');
					document.location.href='';
						</script>";
		}

	}





 ?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ubah</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body style="background-color: #D9D6D6;">

<div class="kotak">
	<form action="" method="post">
		<h1 style="text-align: center; color: white; font-family: sans-serif; margin-bottom: 30px; text-indent: all;">Ubah</h1>

		<input type="hidden" name="id" value="<?php echo $daftar["id"] ?>">

		<label class="">Nama: </label>
		<input class="" type="text" name="nama" value="<?php echo $daftar["nama"]; ?>">
		<br><br>

		<label class="">kelas: </label>
		<input type="text" name="kelas" value="<?php echo $daftar["kelas"] ?>" disabled>
		<br><br>
		

		<label class="jurusan">Jurusan: </label>
		<input type="text" name="jurusan" value="<?php echo $daftar["jurusan"] ?>" disabled
		>
		<br><br>
		

		<label class="">buku: </label>
		<input class=""  type="text" name="buku" value="<?php echo $daftar["buku"]; ?>">	
		<br><br>


		<button class="btn btn-primary" type="submit" name="submit">Submit</button>

</form>

</div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


<style type="text/css">
	.kotak{

		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background: #008692;
		padding: 50px;
		border-radius: 30px;
	}

	.kotak input{
		padding: 10px;
		width: 300px;
		border-radius: 7px;
	}

	.kotak select{
		padding: 10px;
		width: 200px;
		border-radius: 7px;
	
	}

	label {
		margin-right: 60px;
		color: white;
	}

	.jurusan{
		margin-right: 40px;
	}



</style>