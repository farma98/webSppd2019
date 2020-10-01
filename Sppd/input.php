<?php

include "../koneksidb.php";

$nomor = $_POST['nomor_surat'];
$nama = $_POST['nama'];
$nipQ = $_POST['nipQ'];
$jabatan = $_POST['jabatanQ'];
$daerah = $_POST['daerah'];
$tglberangkat = $_POST['tgl_berangkat'];
$tglkembali = $_POST['tgl_kembali'];
$keterangan = $_POST['keterangan'];

if ($nomor == '') {
    $data['error']['nomor'] = 'Nomor Surat Tidak Boleh Kosong';
}
if ($nama == '') {
    $data['error']['nama'] = 'Nama Tidak Boleh Kosong';
}
if ($nipQ == '') {
    $data['error']['nipQ'] = 'Nip Tidak Boleh Kosong';
}
if ($jabatan == '') {
    $data['error']['jabatanQ'] = 'Nama Jabatan Tidak Boleh Kosong';
}
if ($daerah == '') {
    $data['error']['daerah'] = 'Nama Tujuan Tidak Boleh Kosong';
}
if ($tglberangkat == '') {
    $data['error']['tglberangkat'] = 'Tanggal Berangkat Tidak Boleh Kosong';
}
if ($tglkembali == '') {
    $data['error']['tglkembali'] = 'Tanggal Kembali Tidak Boleh Kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO sppd SET no_surat = '$nomor', nama = '$nama', nip = '$nipQ', kode_jabatan = '$jabatan', kode_daerah = '$daerah', rangka = '$keterangan', tgl_berangkat = '$tglberangkat', tgl_kembali = '$tglkembali'";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

