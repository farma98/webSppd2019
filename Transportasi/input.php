<?php

include "../koneksidb.php";

$kode_transportasi = $_POST['kode_transportasi'];
$jenis_transportasi = $_POST['jenis_transportasi'];

if ($kode_transportasi == '') {
    $data['error']['kode'] = 'Kode Transportasi Tidak Boleh Kosong';
}
if ($jenis_transportasi == '') {
    $data['error']['jenis'] = 'Jenis Transportasi Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO jenis_transportasi SET kode_transportasi = '$kode_transportasi', jenis_transportasi = '$jenis_transportasi'";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

