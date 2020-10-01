<?php
include "../koneksidb.php";


$query = "DELETE FROM Penginapan WHERE kode_penginapan ='$_POST[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

