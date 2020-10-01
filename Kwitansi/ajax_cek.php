<?php
	include "../koneksidb.php";
	$hasil = mysqli_fetch_array(mysqli_query($koneksi, "select d.nama_daerah from sppd s join daerah d on 
			s.kode_daerah = d.kode_daerah AND s.no_surat = '$_GET[no_surat]'"));
	$dataQ = array('tujuanQ' => $hasil['nama_daerah']);
	echo json_encode($dataQ);
?>