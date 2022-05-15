<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<head>
 <title>Internal</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style type="text/css">
 body {
  font-family: verdana;
  font-size: 12px;
 }
 a {
  text-decoration: none;
  color: #3050F3;
 }
 a:hover {
  color: #000F5E;
 } 
</style>
</head>
<body>
<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

	<div class="container">

<div id="home"></div>
<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<hr>
<b>List File PDF</b>
<center>
<table width="800" border='0' cellpadding="2" cellspacing="1" class="table-responsive table-bordered border-secondary text-center">
<tr>
 <th >Judul</th>
 <th  width="100">View</th>

</tr>

<?php
$query = mysqli_query($koneksi, "SELECT * FROM data_file ORDER BY id DESC");
while($data=mysqli_fetch_array($query))
{
?>

<tr>

 <td ><?php echo $data['judul'];?></td>
 <th ><a href="view.php?id=<?php echo $data['id'];?>">Lihat File</a></th>
 
</tr></center>
<?php
}
?>
</table>
</div>

<footer class="text-center fixed-bottom"><p style="color: silver;">©2022 UnderDev IT ChandraKarya</p></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>