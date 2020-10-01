<?php
include "../koneksidb.php";

$kode_transportasi = $_POST['kode_transportasi'];
$jenis_transportasi = $_POST['jenis_transportasi'];

		if ($kode_transportasi == '') {
			$data['error']['edit_kode'] = 'Kode Transportasi Harus Diisi';
		}
		if ($jenis_transportasi == '') {
			$data['error']['edit_jenis'] = 'Jenis Transportasi Harus Diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE jenis_transportasi SET kode_transportasi = '$kode_transportasi', jenis_transportasi = '$jenis_transportasi' WHERE kode_transportasi = '$kode_transportasi'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

