<?php

include "../koneksidb.php";

$kode_bidang = $_POST['kode_bidang'];
$nama_bidang = $_POST['nama_bidang'];

if ($kode_bidang == '') {
    $data['error']['kode'] = 'Kode Bidang Tidak Boleh Kosong';
}
if ($nama_bidang == '') {
    $data['error']['nama'] = 'Nama Bidang Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO bidang1 SET kode_bidang = '$kode_bidang', nama_bidang = '$nama_bidang'";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

