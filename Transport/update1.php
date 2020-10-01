<?php

include "../koneksidb.php";

$no_surat = $_POST['nosurat1'];
$jenis_transportasi = $
$nama_transportasi = $_POST['nama_transportasi'];
$no_tiket = $_POST['no_tiket'];
$no_penerbangan = $_POST['no_penerbangan'];
$no_kursi = $_POST['no_kursi'];
$no_kursi = $_POST['no_kursi'];
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
    
		$query = "UPDATE sppd set tgl_pelaksanaan = '$tgl', instansi_tujuan = '$tujuan', arahan = '$arahan', masalah = '$masalah', saran = '$saran' where no_surat = '$no_surat'";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}
echo json_encode($data);

?>

