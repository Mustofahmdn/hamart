<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$data = mysqli_query($conn,"SELECT * FROM projects");

if(!$data){
    die(mysqli_error($conn));
}
?>

<h1>Dashboard Project</h1>

<a href="tambah.php">
Tambah Project
</a>

<hr>

<?php

$data=mysqli_query(
$conn,
"SELECT * FROM projects"
);

while($d=mysqli_fetch_array($data)){
?>

<h3><?= $d['judul']; ?></h3>

<p><?= $d['deskripsi']; ?></p>

<a href="edit.php?id=<?= $d['id']; ?>">
Edit
</a>

<a href="hapus.php?id=<?= $d['id']; ?>">
Hapus
</a>

<hr>

<?php } ?>