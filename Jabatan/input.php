<?php

include "../koneksidb.php";
session_start();

$kode_jabatan = $_POST['kode_jabatan'];
$nama_jabatan = $_POST['nama_jabatan'];

if ($kode_jabatan == '') {
    $data['error']['kode'] = 'Kode Jabatan Tidak Boleh Kosong';
}
if ($nama_jabatan == '') {
    $data['error']['nama'] = 'Nama Jabatan Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    	$query = "insert INTO jabatan SET kode_jabatan = '$kode_jabatan', nama_jabatan = '$nama_jabatan'";
		mysqli_query($koneksi, $query) or die ("Gagal Perintah SQL".mysql_error());
		
		$data['hasil'] = 'sukses';
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>
