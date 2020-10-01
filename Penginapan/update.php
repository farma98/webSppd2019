<?php
include "../koneksidb.php";

$kode_penginapan = $_POST['kode_penginapan'];
$kode_daerah = $_POST['kode_daerah'];
$eselon3 = $_POST['eselon3'];
$eselon4 = $_POST['eselon4'];
$golongan12 = $_POST['golongan12'];

if ($kode_penginapan == '') {
    $data['error']['edit_kodepenginapan'] = 'Kode Penginapan Tidak Boleh Kosong';
}
if ($kode_daerah == '') {
    $data['error']['edit_kodedaerah'] = 'Nama Daerah Tidak Boleh Kosong';
}
if ($eselon3 == '') {
    $data['error']['edit_eselon3'] = 'Eselon 3 Tidak Boleh Kosong';
}
if ($eselon4 == '') {
    $data['error']['edit_eselon4'] = 'Eselon 4 Tidak Boleh Kosong';
}
if ($golongan12 == '') {
    $data['error']['edit_golongan12'] = 'Golongan 12 Tidak Boleh Kosong';
}

		if (empty($data['error'])) {
			$query = "UPDATE penginapan SET kode_penginapan = '$kode_penginapan', kode_daerah = '$kode_daerah', eselon_3 = $eselon3, eselon_4 = $eselon4, golongan_12 = $golongan12 WHERE kode_penginapan = '$kode_penginapan'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

