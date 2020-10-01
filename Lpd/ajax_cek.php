<?php
	include "../koneksidb.php";
	$hasil = mysqli_fetch_array(mysqli_query($koneksi, "select tgl_berangkat from sppd where no_surat = '$_GET[no_surat]'"));
	$dataQ = array('tgl' => $hasil['tgl_berangkat']);
	echo json_encode($dataQ);
?>