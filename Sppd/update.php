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
		    $data['error']['edit_nomor'] = 'Nomor Surat Tidak Boleh Kosong';
		}
		if ($nama == '') {
		    $data['error']['edit_nama'] = 'Nama Tidak Boleh Kosong';
		}
		if ($nipQ == '') {
		    $data['error']['edit_nipQ'] = 'Nip Tidak Boleh Kosong';
		}
		if ($jabatan == '') {
		    $data['error']['edit_jabatanQ'] = 'Nama Jabatan Tidak Boleh Kosong';
		}
		if ($daerah == '') {
		    $data['error']['edit_daerah'] = 'Nama Tujuan Tidak Boleh Kosong';
		}
		if ($tglberangkat == '') {
		    $data['error']['edit_tglberangkat'] = 'Tanggal Berangkat Tidak Boleh Kosong';
		}
		if ($tglkembali == '') {
		    $data['error']['edit_tglkembali'] = 'Tanggal Kembali Tidak Boleh Kosong';
		}
		if ($tglkembali == '') {
		    $data['error']['edit_keterangan'] = 'Keterangan Tidak Boleh Kosong';
		}

		if (empty($data['error'])) {
			$query = "UPDATE sppd SET no_surat = '$nomor', nama = '$nama', nip = '$nipQ', kode_jabatan = '$jabatan', kode_daerah = '$daerah', tgl_berangkat = '$tglberangkat', tgl_kembali = '$tglkembali', rangka = '$keterangan' WHERE no_surat = '$nomor'";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysqli_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

