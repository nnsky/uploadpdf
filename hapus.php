<?php
include "koneksi.php";
$id    = mysqli_real_escape_string($koneksi,$_GET['id']);
$query = mysqli_query($koneksi,"DELETE FROM data_file WHERE id='$id' ");
header('location:internal.php?pesan=hapus-berhasil');
?>