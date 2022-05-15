<!DOCTYPE html>
<html>
<head>
	<title>Internal</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<link rel="icon" type="image/x-icon" href="favck.png"/>
<body>
 

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login"><img src="logock.png" alt="Internal" width="200px"></p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="Login">
			<br><br>
			<center><a href="https://api.whatsapp.com/send?phone=6281290979905&text=Halo%20saya%20lupa%20password%20internal%20">Lupa Password</a></center>
			
 
			<br/>
			<br/>
		</form>
	</div>
 
 
</body>
</html>