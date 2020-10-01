<?php
include "../koneksidb.php";


$query = "DELETE FROM spt WHERE kode ='$_POST[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

