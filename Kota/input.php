<?php

include "../koneksidb.php";

$kode_daerah = $_POST['kode_daerah'];
$nama_daerah = $_POST['nama_daerah'];

if ($kode_daerah == '') {
    $data['error']['kode'] = 'Kode Kota Tidak Boleh Kosong';
}
if ($nama_daerah == '') {
    $data['error']['nama'] = 'Nama Kota Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO daerah SET kode_daerah = '$kode_daerah', nama_daerah = '$nama_daerah'";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

