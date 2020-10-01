<?php
include "../koneksidb.php";


$query = "DELETE FROM uang_harian WHERE kuh ='$_POST[id]'";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

