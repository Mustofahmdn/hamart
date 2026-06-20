<?php

include 'koneksi.php';

$id=$_GET['id'];

$data=mysqli_fetch_array(
mysqli_query(
$conn,
"SELECT * FROM projects
WHERE id='$id'"
)
);

if(isset($_POST['update'])){

mysqli_query(
$conn,
"UPDATE projects
SET
judul='$_POST[judul]',
deskripsi='$_POST[deskripsi]'
WHERE id='$id'"
);

header("Location:admin.php");
}
?>

<form method="POST">

<input
type="text"
name="judul"
value="<?= $data['judul']; ?>">

<textarea
name="deskripsi"><?= $data['deskripsi']; ?></textarea>

<button name="update">
Update
</button>

</form>