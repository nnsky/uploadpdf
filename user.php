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
  padding-left: 1rem;
  margin: 0;
 }
 a {
  text-decoration: none;
  color: #3050F3;
 }
 a:hover {
  color: #000F5E;
 }

 
 .navbar-brand,
  .nav-link {
    color: rgb(5, 5, 5) !important;
  }
  .nav-link {
    text-transform: uppercase;
    margin-right: 5px 0;
    font-weight: bold;
  }

  .nav-link:hover::after {
    content: "";
    display: block;
    border-bottom: 3px solid #0b63dc;
    width: 75%;
    margin: auto;
    padding-bottom: 5px;
    margin-bottom: -8px;
  }

 table {
   padding-left: 10px;
 }

</style>
</head>
<link rel="icon" type="image/x-icon" href="favck.png" />
<body>
<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
    <!-- NAVIGATION -->
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Internal Chandra Karya Pusat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <center>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" disabled>Makassar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" disabled>Bandung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact/index.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
  </div>
</nav>
 
<!-- END OF NAVIGATION -->
<br>

<center>
<b style="font-size: 18px;">List File Netto</b>
<table width="800" border='0' cellpadding="2" cellspacing="1" class="table-responsive table-bordered border-secondary" id="data">
<thead>
    <tr>
      <th >Judul</th>
      <th  width="100">View</th>
  
    </tr>
</thead>
<tbody>
<?php
$query = mysqli_query($koneksi, "SELECT * FROM data_file ORDER BY id ASC");
while($data=mysqli_fetch_array($query))
{
  ?>

<tr>
 <td ><?php echo $data['judul'];?></td>
 <th ><a href="viewus.php?id=<?php echo $data['id'];?>">Lihat File</a></th>

</tr>
<?php
}
?>
</tbody>
</table>
</center>
<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
<footer class="text-center fixed-bottom">
<img src="logock.png" width="200px" alt="">
  <!-- <p style="color: silver">Chandra Karya ©2022</p> -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#data').DataTable();
} );
</script>
</body>
</html>