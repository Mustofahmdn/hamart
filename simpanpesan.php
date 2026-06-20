<?php

include 'koneksi.php';

mysqli_query(
$conn,
"INSERT INTO contacts
(nama,email,pesan)
VALUES
(
'$_POST[nama]',
'$_POST[email]',
'$_POST[pesan]'
)"
);

header("Location:index.php");