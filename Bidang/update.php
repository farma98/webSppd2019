<?php
include "../koneksidb.php";

$kode_bidang = $_POST['kode_bidang'];
$nama_bidang = $_POST['nama_bidang'];

		if ($kode_bidang == '') {
			$data['error']['edit_kode'] = 'Kode Bidang Harus Diisi';
		}
		if ($nama_bidang == '') {
			$data['error']['edit_nama'] = 'Nama Bidang Harus Diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE bidang1 SET kode_bidang = '$kode_bidang', nama_bidang = '$nama_bidang' WHERE kode_bidang = '$kode_bidang'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

