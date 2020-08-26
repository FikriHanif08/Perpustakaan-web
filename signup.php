<?php 

require 'functions.php';

	if (isset($_POST["submit"])) {

		if ( signup($_POST) > 0) {
			
			echo "<script>
					alert('Berhasil daftar');
					document.location.href='index.php';
						</script>";

		} else{

			echo "<script>
					alert('gagal daftar');
					document.location.href='';
						</script>";
		}

	}





 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Signup</title>
 </head>
 <body style="background-color: #D9D6D6;">

<div class="kotak">
<form action="" method="post">
	<center>
	<img style="width: 100px;" src="img/logo.png">
	<br><br>
`	</center>
 	<input type="text" name="username" placeholder="Username..." autocomplete="off">
 	<br><br><br>
 	
 	<input type="password" name="password" placeholder="Password...">
 	<br><br><br>

 	<input type="password" name="password2" placeholder="Konfirmasi Passowrd...">
 	<br><br><br>

 	<button type="submit" name="submit">submit</button>


</form>
</div>



 
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
		width: 200px;
		border-radius: 7px;
	}

	.kotak button{
		padding: 10px;
		border-radius: 50px;
		width: 100px;
		background: white;
		color: #222426;
	}


</style>