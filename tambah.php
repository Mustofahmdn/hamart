<?php

include 'koneksi.php';

if(isset($_POST['simpan'])){

mysqli_query(
$conn,
"INSERT INTO projects
(judul,deskripsi)
VALUES
(
'$_POST[judul]',
'$_POST[deskripsi]'
)"
);

header("Location:admin.php");
}
?>

<form method="POST">

<input type="text" name="judul">

<textarea name="deskripsi"></textarea>

<button name="simpan">
Tambah
</button>

</form>