<?php
include "../koneksidb.php";

$nama = $_POST['nama'];
$nipQ = $_POST['nipQ'];
$jabatanQ = $_POST['jabatanQ'];
$pangkatQ = $_POST['pangkatQ'];
$keterangan = $_POST['keterangan'];

		if ($nama == '') {
			$data['error']['edit_nama'] = 'Nama Harus Diisi';
		}
		if ($nipQ == '') {
			$data['error']['edit_nipQ'] = 'Nip Harus Diisi';
		}
		if ($jabatanQ == '') {
			$data['error']['edit_jabatanQ'] = 'Jabatan Harus Diisi';
		}
		if ($pangkatQ == '') {
			$data['error']['edit_pangkatQ'] = 'Pangkat Harus Diisi';
		}
		if ($keterangan == '') {
			$data['error']['edit_Keterangan'] = 'Keterangan Harus Diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE spt SET nama = '$nama', nip = '$nipQ', jabatan = '$jabatanQ', pangkat = '$pangkatQ', keterangan = '$keterangan' WHERE nip = '$nipQ'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

