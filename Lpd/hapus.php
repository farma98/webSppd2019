<?php
include "../koneksidb.php";


$query = "DELETE FROM jabatan WHERE kode_jabatan ='$_POST[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

