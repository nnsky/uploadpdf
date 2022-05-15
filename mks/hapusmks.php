<?php
include "koneksi.php";
$id    = mysqli_real_escape_string($koneksi,$_GET['id']);
$query = mysqli_query($koneksi,"DELETE FROM data_mks WHERE id='$id' ");
header('location:mks.php?pesan=hapus-berhasil');
?>