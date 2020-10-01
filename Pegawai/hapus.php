<?php
include "../koneksidb.php";


$query = "DELETE FROM pegawaii WHERE nip ='$_POST[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

