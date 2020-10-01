<?php
include "../koneksidb.php";

$kode_daerah = $_POST['kode_daerah'];
$nama_daerah = $_POST['nama_daerah'];

		if ($kode_daerah == '') {
			$data['error']['edit_kode'] = 'Kode Kota Harus Diisi';
		}
		if ($nama_daerah == '') {
			$data['error']['edit_nama'] = 'Nama Kota Harus Diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE daerah SET kode_daerah = '$kode_daerah', nama_daerah = '$nama_daerah' WHERE kode_daerah = '$kode_daerah'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

