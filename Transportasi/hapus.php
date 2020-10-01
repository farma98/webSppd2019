<?php
include "../koneksidb.php";


$query = "DELETE FROM jenis_transportasi WHERE kode_transportasi ='$_POST[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

