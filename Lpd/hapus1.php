<?php
include "../koneksidb.php";


$query = "DELETE FROM akomodasi WHERE no_tiket = '$_POST[id]'";
$hasil = mysqli_query($koneksi, $query);
if($hasil){
	$query = "DELETE FROM transportasi where no_tiket = '$_POST[id]'";
	mysqli_query($koneksi, $query)
	or die ("Gagal Perintah SQL".mysql_error());
	$data['hasil'] = 'sukses';
}else{
	$data['hasil'] = 'gagal';
}

?>

