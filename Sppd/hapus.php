<?php
include "../koneksidb.php";


$query = "DELETE FROM sppd WHERE no_surat ='$_POST[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

