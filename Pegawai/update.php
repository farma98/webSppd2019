<?php
include "../koneksidb.php";

$nip = $_POST['kode_jabatan'];
$nama = $_POST['nama_jabatan'];
$golongan = $_POST['nama_jabatan'];
$kode_jabatan = $_POST['nama_jabatan'];
$kode_bidang = $_POST['nama_jabatan'];

if ($nip == '') {
    $data['error']['edit_nip'] = 'NIP Tidak Boleh Kosong';
}
if ($nama== '') {
    $data['error']['edit_nama'] = 'Nama Pegawai Tidak Boleh Kosong';
}
if ($golongan == '') {
    $data['error']['edit_golongan'] = 'Golongan Tidak Boleh Kosong';
}
if ($nama_jabatan == '') {
    $data['error']['edit_kodejabatan'] = 'Jabatan Tidak Boleh Kosong';
}
if ($kode_bidang == '') {
    $data['error']['edit_kodebidang'] = 'Bidang Tidak Boleh Kosong';
}

		if (empty($data['error'])) {
			$query = "UPDATE jabatan SET nip = '$nip', nama = '$nama', golongan = '$golongan', kode_jabatan = '$kode_jabatan', kode_bidang = '$kode_bidang' WHERE nip = '$nip'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

