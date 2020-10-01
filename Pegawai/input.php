<?php

include "../koneksidb.php";

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$golongan = $_POST['golongan'];
$kode_jabatan = $_POST['kode_jabatan'];
$kode_bidang = $_POST['kode_bidang'];

if ($nip == '') {
    $data['error']['nip'] = 'NIP Tidak Boleh Kosong';
}
if ($nama== '') {
    $data['error']['nama'] = 'Nama Pegawai Tidak Boleh Kosong';
}
if ($golongan == '') {
    $data['error']['golongan'] = 'Golongan Tidak Boleh Kosong';
}
if ($kode_bidang == '') {
    $data['error']['kodejabatan'] = 'Jabatan Tidak Boleh Kosong';
}
if ($kode_bidang == '') {
    $data['error']['kodebidang'] = 'Bidang Tidak Boleh Kosong';
}


if (empty($data['error'])) {
    
		$query = "insert INTO pegawaii SET nip = '$nip', nama = '$nama', golongan = '$golongan', kode_jabatan = '$kode_jabatan', kode_bidang = '$kode_bidang'";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

