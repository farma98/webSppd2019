<?php  
include "../koneksidb.php";
$hasil = mysqli_fetch_array(mysqli_query($koneksi, "select p.nip, p.nama, g.pangkat, j.nama_jabatan from pegawaii p JOIN golongan g ON p.golongan = g.golongan JOIN jabatan J ON p.kode_jabatan = j.kode_jabatan AND p.nama='$_GET[nip]'"));
$dataQ = array('nipQ'   			=>  $hasil['nip'],
              'pangkatQ'  		=>  $hasil['pangkat'],
              'jabatanQ'  	=>  $hasil['nama_jabatan']);
 echo json_encode($dataQ);
 ?>