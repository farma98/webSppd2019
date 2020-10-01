<?php

include "../koneksidb.php";

$nama = $_POST['nama'];
$nipQ = $_POST['nipQ'];
$jabatanQ = $_POST['jabatanQ'];
$pangkatQ = $_POST['pangkatQ'];
$keterangan = $_POST['keterangan'];


if ($nama == '') {
    $data['error']['nama'] = 'Nama Tidak Boleh Kosong';
}
if ($nipQ == '') {
    $data['error']['nipQ'] = 'Nip Tidak Boleh Kosong';
}
if ($jabatanQ == '') {
    $data['error']['jabatanQ'] = 'Jabatan Tidak Boleh Kosong';
}
if ($jabatanQ == '') {
    $data['error']['pangkatQ'] = 'Pangkat Tidak Boleh Kosong';
}
if ($keterangan == '') {
    $data['error']['keterangan'] = 'Keterangan Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    
        $query = "insert INTO Spt SET nama = '$nama', nip = '$nipQ', jabatan = '$jabatanQ', pangkat = '$pangkatQ', keterangan = '$keterangan'";

        mysqli_query($koneksi, $query)
        or die ("Gagal Perintah SQL".mysql_error());
        
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>