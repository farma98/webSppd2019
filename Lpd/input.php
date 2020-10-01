<?php

include "../koneksidb.php";

$no_surat = $_POST['nosurat'];
$tgl = $_POST['tgl'];
$tujuan = $_POST['tujuan'];
$arahan = $_POST['arahan'];
$masalah = $_POST['masalah'];
$saran = $_POST['saran'];

if ($tgl == '') {
    $data['error']['tgl_pelaksanaan'] = 'Tanggal Tidak Boleh Kosong';
}
if ($tujuan == '') {
    $data['error']['tujuan'] = 'Tujuan Tidak Boleh Kosong';
}
if ($arahan == '') {
    $data['error']['arahan'] = 'Arahan Tidak Boleh Kosong';
}
if ($masalah == '') {
    $data['error']['masalah'] = 'Masalah Tidak Boleh Kosong';
}
if ($saran == '') {
    $data['error']['saran'] = 'Saran Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    
		$query = "UPDATE sppd set instansi_tujuan = '$tujuan', arahan = '$arahan', masalah = '$masalah', saran = '$saran' where no_surat = '$no_surat'";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}
echo json_encode($data);

?>

