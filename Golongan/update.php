<?php
include "../koneksidb.php";

$golongan = $_POST['golongan'];
$pangkat = $_POST['pangkat'];

		if ($golongan == '') {
			$data['error']['edit_golongan'] = 'Golongan Harus Diisi';
		}
		if ($pangkat == '') {
			$data['error']['edit_pangkat'] = 'Pangkat Harus Diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE golongan SET golongan = '$golongan', pangkat = '$pangkat' WHERE golongan = '$golongan'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

