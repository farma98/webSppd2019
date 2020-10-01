<?php
include "../koneksidb.php";


$query = "DELETE FROM golongan WHERE golongan ='$_POST[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

