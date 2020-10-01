<?php

include "../koneksidb.php";

$no_surat = $_POST['nosurat1'];
$j_transport = $_POST['jenis_transportasi'];
$n_transport = $_POST['nama_transportasi'];
$n_penerbangan = $_POST['no_penerbangan'];
$n_kursi = $_POST['no_kursi'];
$no_tiket = $_POST['no_tiket'];
$harga_tiket = $_POST['harga_tiket'];
$tujuan = $_POST['tujuan'];

if ($j_transport == '') {
    $data['error']['jenis_transportasi'] = 'Jenis Transportasi Tidak Boleh Kosong';
}
if ($n_transport == '') {
    $data['error']['nama_transporasi'] = 'Nama Transportasi Tidak Boleh Kosong';
}
if ($no_tiket == '') {
    $data['error']['no_tiket'] = 'No. Tiket Tidak Boleh Kosong';
}
if ($harga_tiket == '') {
    $data['error']['harga_tiket'] = 'Harga Tiket Tidak Boleh Kosong';
}
if ($tujuan == '') {
    $data['error']['tujuan'] = 'Kota Tujuan Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    
	$query = "INSERT INTO transportasi values('$no_tiket', '$j_transport', '$n_transport', '$n_penerbangan', '$n_kursi')";

	mysqli_query($koneksi, $query)
	or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
	
	$query = "INSERT INTO akomodasi values('$no_surat', '$no_tiket', '$tujuan', '$tujuan', $harga_tiket)";

	mysqli_query($koneksi, $query)
	or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

