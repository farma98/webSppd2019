<?php
include "../koneksidb.php";

$kuh = $_POST['kuh'];
$pejabat = $_POST['pejabat'];
$uang = $_POST['uang'];

		if ($kuh == '') {
			$data['error']['edit_kuh'] = 'Kuh Jabatan Harus Diisi';
		}
		if ($pejabat == '') {
			$data['error']['edit_pejabat'] = 'Pejabat Harus Diisi';
		}
		if ($uang == '') {
			$data['error']['edit_uang'] = 'Uang Harian Harus Diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE uang_harian SET kuh = '$kuh', pejabat = '$pejabat', uang_harian = '$uang' WHERE kuh = '$kuh'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

