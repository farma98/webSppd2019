<?php

include "../koneksidb.php";

$kuh = $_POST['kuh'];
$pejabat = $_POST['pejabat'];
$uang = $_POST['uang'];

if ($kuh == '') {
    $data['error']['kuh'] = 'Kuh Tidak Boleh Kosong';
}
if ($pejabat == '') {
    $data['error']['pejabat'] = 'Pejabat Tidak Boleh Kosong';
}
if ($uang == '') {
    $data['error']['uang'] = 'Uang Harian Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    
			$query = "insert INTO uang_harian SET kuh = '$kuh', pejabat = '$pejabat', uang_harian = '$uang'";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

