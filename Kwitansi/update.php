<?php

include "../koneksidb.php";

$no_surat = $_POST['nosurat'];
$tgl = $_POST['tgl_bukti'];
$tujuan = $_POST['tujuanQ'];
$uang_harian = $_POST['uang_harian'];
$uang_transport = $_POST['uang_transport'];
$biaya_penginapan = $_POST['uang_penginapan'];
$sewa = $_POST['sewa'];
$jml_bayar = $_POST['jml_bayar'];
$nama_penginapan = $_POST['nama_penginapan'];
$durasi = $_POST['durasi'];

if ($tgl == '') {
    $data['error']['tgl_bukti'] = 'Tanggal Tidak Boleh Kosong';
}

if (empty($data['error'])) {
	$query = "update kwitansi set tgl_bukti = '$tgl', jumlah_bayar = $jml_bayar, uang_harian = $uang_harian, biaya_transport = $uang_transport, 
		biaya_penginapan = $biaya_penginapan, sewa_kendaraan = $sewa, nama_penginapan = '$nama_penginapan', durasi = $durasi";
	mysqli_query($koneksi, $query)
	or die ("Gagal Perintah SQL".mysql_error());
	$data['hasil'] = 'sukses';
} else {
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

