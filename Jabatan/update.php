<?php
include "../koneksidb.php";

$kode_jabatan = $_POST['kode_jabatan'];
$nama_jabatan = $_POST['nama_jabatan'];

		if ($kode_jabatan == '') {
			$data['error']['edit_kode'] = 'Kode Jabatan Harus Diisi';
		}
		if ($nama_jabatan == '') {
			$data['error']['edit_nama'] = 'Nama Jabatan Diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE jabatan SET kode_jabatan = '$kode_jabatan', nama_jabatan = '$nama_jabatan' WHERE kode_jabatan = '$kode_jabatan'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

