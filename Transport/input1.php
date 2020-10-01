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
    $query = "select * from transportasi where no_tiket = '$no_tiket'";
	$hasil = mysqli_query($koneksi, $query);
	if(mysqli_num_rows($hasil)==1){
		$query = "UPDATE TRANSPORTASI SET kode_transportasi = '$j_transport', nama_kendaraan = '$n_transport', no_penerbangan = '$n_penerbangan',
					no_kursi = '$n_kursi' WHERE no_tiket = '$no_tiket'";
		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		$data['hasil'] = 'sukses';
		
		$query = "UPDATE AKOMODASI SET kode_daerah = '$tujuan', tujuan = '$tujuan', harga = $harga_tiket where no_tiket = '$no_tiket'";
		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		$data['hasil'] = 'sukses';
	}else{
		$query = "INSERT INTO transportasi values('$no_tiket', '$j_transport', '$n_transport', '$n_penerbangan', '$n_kursi')";
		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		$data['hasil'] = 'sukses';
		
		$query = "INSERT INTO akomodasi values('$no_surat', '$no_tiket', '$tujuan', '$tujuan', $harga_tiket)";
		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		$data['hasil'] = 'sukses';
	}
} else {
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

