<?php
include "../koneksidb.php";


$query = "DELETE FROM bidang1 WHERE kode_bidang ='$_POST[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

