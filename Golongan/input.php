<?php

include "../koneksidb.php";

$golongan = $_POST['golongan'];
$pangkat = $_POST['pangkat'];

if ($golongan == '') {
    $data['error']['golongan'] = 'Golongan Tidak Boleh Kosong';
}
if ($pangkat == '') {
    $data['error']['pangkat'] = 'Pangkat Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO golongan SET golongan = '$golongan', pangkat = '$pangkat'";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

