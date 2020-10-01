<?php
// Koneksi
ob_start();
include "../koneksidb.php";
$query = "SELECT s.no_surat, d.nama_daerah, s.nama, s.tgl_berangkat, s.tgl_kembali, s.rangka, s.kode_jabatan FROM sppd s JOIN daerah d on s.kode_daerah = d.kode_daerah WHERE s.no_surat = '$_GET[id]'";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($hasil);
$tglb = $row['tgl_berangkat'];
$tglk = $row['tgl_kembali'];
$format1 = date('d-F-Y', strtotime($tglb));
$format2 = date('d-F-Y', strtotime($tglk));

$start_date = new DateTime($format1);
$end_date = new DateTime($format2);
$interval = $start_date->diff($end_date);

?>

<style>
    .sppd{
        text-align:center;
        font-family:Times; 
    }
    .sppd1{
        font-size:20px;
        font-weight:bold;
    }
    .sppd2{
        font-size:16px;
        font-weight:bold;
    }
    .sppd3{
        font-size:14px;
    }
    .sppd4{
        font-size:12px;
        text-decoration: underline; 
    }
    .sppd5{
        font-size:14px;
        font-weight:bold;
        text-decoration: underline; 
    }
    .tabel{
        border-collapse: collapse; 
    }
    .tabel td{
         padding:6px 10px;
         height:2.5px;
    }
    .tabels{
        border-collapse: collapse; 
    }
    .tabels td{
         padding:2px 4px;
         height:2.5px;
    }
    .tabelss{
        border-collapse: collapse; 
    }
    .tabelss td{
         padding:6px 10px;
         height:120px;
    }
</style>

<page backtop="5mm" backdown="5mm" backleft="10mm" backright="5mm">
     <div style="margin-bottom: 5px;">
        <table border="0px" class="tabel">
            <tr>
                <td style="width:20%;" rowspan="5">
                    <img src="../assets/images/Dispora.jpg" style="width: 100px;height: 125px;float: right;">
                </td>
                <td style="width:60%;">
                    <div class="sppd sppd1">PEMERINTAH PROVINSI JAWA TIMUR</div>
                </td>
                <td style="width:20%;" rowspan="5"></td>
            </tr>
             <tr>
                <td style="width:60%;">
                    <div class="sppd sppd2">DINAS KEPEMUDAAN DAN OLAHRAGA</div>
                </td>
            </tr>
             <tr>
                <td style="width:60%;">
                    <div class="sppd sppd3">Jl. Kayon No. 56 Telp. ( 031 ) 5345507 Fax. ( 031) 5345508</div>
                </td>
            </tr>
            <tr>
                <td style="width:60%;">
                    <div class="sppd sppd4">E-mail : dispora@jatimprov.go.id http : //dispora.jatimprov.go.id</div>
                </td>
            </tr>
            <tr>
                <td style="width:60%;">
                    <div class="sppd sppd5">SURABAYA - 60271</div>
                </td>
            </tr>
        </table>
    </div>

    <div style="margin:5px 0px;">
        <table border="0px" class="tabels">
            <tr>
                <td style="width:55%;"></td>
                <td style="width:45%;">
                    LAMPIRAN PERATURAN GUBERNUR JAWA TIMUR
                </td>
            </tr>
             <tr>
                <td style="width:55%;"></td>
                <td style="width:45%;">
                    NOMOR : 26 TAHUN 2013
                </td>
            </tr>
            <tr>
                <td style="width:55%;"></td>
                <td style="width:45%;">
                    TANGGAL : 28 MARET 2013
                </td>
            </tr>
        </table>
    </div>

    <div style="margin:5px 0px;">
        <div class="sppd sppd5">SURAT PERINTAH PERJALANAN DINAS(SPPD)</div>
    </div>

    <div style="margin:15px 0px;">
        <table border="1px" class="tabel">
            <tr>
                <td style="width:5%;">1</td>
                <td style="width:45%;">KUASA PENGGUNA ANGGARAN</td>
                <td style="width:50%;">
                    -
                </td>
            </tr>
             <tr>
                <td style="width:5%;">2</td>
                <td style="width:45%;">NAMA PEGAWAI YANG DI PERINTAHKAN</td>
                <td style="width:50%;">
                   <?php echo $row['nama']; ?>
                </td>
            </tr>
             <tr>
                <td style="width:5%;">3</td>
                <td style="width:45%;">a. JABATAN</td>
                <td style="width:50%;">
                   <?php echo $row['kode_jabatan']; ?>
                </td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:45%;">b. TINGKAT BIAYA PERJALANAN DINAS</td>
                <td style="width:50%;">
                -   
                </td>
            </tr>
            <tr>
                <td style="width:5%;">4</td>
                <td style="width:45%;">MAKSUD PERJALANAN DINAS</td>
                <td style="width:50%;">
                   <?php echo $row['rangka']; ?>
                </td>
            </tr>
            <tr>
                <td style="width:5%;">5</td>
                <td style="width:45%;">ALAT ANGKUTAN YANG DIPERGUNAKAN</td>
                <td style="width:50%;">
                -   
                </td>
            </tr>
            <tr>
                <td style="width:5%;">6</td>
                <td style="width:45%;">a. TEMPAT BERANGKAT</td>
                <td style="width:50%;">
                SURABAYA  
                </td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:45%;">b. TEMPAT TUJUAN</td>
                <td style="width:50%;">
                    <?php echo $row['nama_daerah']; ?>   
                </td>
            </tr>
            <tr>
                <td style="width:5%;">7</td>
                <td style="width:45%;">a. LAMANYA PERJALANAN DINAS</td>
                <td style="width:50%;">
                   <?php 
                        echo "$interval->days hari ";
                    ?>
                </td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:45%;">b. TANGGAL BERANGKAT</td>
                <td style="width:50%;">
                   <?php echo $format1?>
                </td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:45%;">c. TANGGAL HARUS KEMBALI</td>
                <td style="width:50%;">
                   <?php echo $format2 ?>
                </td>
            </tr>
            <tr>
                <td style="width:5%;">8</td>
                <td style="width:45%;">PENGIKUT</td>
                <td style="width:50%;">
                   
                </td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:45%;">NIP</td>
                <td style="width:50%;">
                   -
                </td>
            </tr>
             <tr>
                <td style="width:5%;"></td>
                <td style="width:45%;">NAMA</td>
                <td style="width:50%;">
                   -
                </td>
            </tr>
            <tr>
                <td style="width:5%;">9</td>
                <td style="width:45%;">PEMBEBANAN ANGGARAN</td>
                <td style="width:50%;">
                   
                </td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:45%;">a. SKPD</td>
                <td style="width:50%;">
                   a. Dinas Kepemudaan dan Olahraga Provinsi Jatim
                </td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:45%;">b. AKUN</td>
                <td style="width:50%;">
                   5 2 2 15 02
                </td>
            </tr>
            <tr>
                <td style="width:5%;">10</td>
                <td style="width:45%;">KETERANGAN LAIN-LAIN</td>
                <td style="width:50%;">
                   -
                </td>
            </tr>
        </table>
    </div>

     <div style="margin:5px 0px;">
        <table border="0px" class="tabels">
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;">
                    Dikeluarkan Di Surabaya
                </td>
            </tr>
             <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;">
                    pada tanggal .................................................................
                </td>
            </tr>
        </table>
    </div>

    <div style="margin:5px 0px;">
        <table border="0px" class="tabels">
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;" style="text-align: center;">
                    KEPALA DINAS KEPEMUDAAN DAN OLAHRAGA
                </td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;" style="text-align: center;">
                    PROVINSI JAWA TIMUR
                </td>
            </tr>
             <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;" rowspan="5"></td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;" style="text-align: center;text-decoration: underline;">
                    <b>Drs.SUPRATOMO, M.Si</b>
                </td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;" style="text-align: center;">
                    Pembina Utama Muda
                </td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;" style="text-align: center;">
                    Nip. 196108251989031005
                </td>
            </tr>
        </table>
    </div>
</page>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------ -->
<page backtop="5mm" backdown="5mm" backleft="10mm" backright="5mm">
    <div style="margin:0px 0px;">
        <table border="1px" class="tabelss">
            <tr>
                <td style="width:5%;"></td>
                <td style="width:45%;"></td>
                <td style="width:5%;">I</td>
                <td style="width:45%;">
                    Berangkat Dari <span style="margin-left: 0px;">:</span><br>
                    Ke             <span style="margin-left: 72.5px;">:</span><br>
                    Pada Tanggal   <span style="margin-left: 5px;">:</span><br>
                    Kepala         <span style="margin-left: 47.5px;">:</span><br>
                                     <br>
                                     <br>
                                     <br>
                    ...............................................................................         
                </td>
            </tr>
             <tr>
                <td style="width:5%;">II</td>
                <td style="width:45%;">
                    Tiba Di <span style="margin-left: 45px;">:</span><br>
                    Pada Tanggal   <span style="margin-left: 5px;">:</span><br>
                    Kepala         <span style="margin-left: 46.5px;">:</span><br>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                    ...............................................................................
                </td>
                <td style="width:5%;"></td>
                <td style="width:45%;">
                    Berangkat Dari <span style="margin-left: 0px;">:</span><br>
                    Ke             <span style="margin-left: 72.5px;">:</span><br>
                    Pada Tanggal   <span style="margin-left: 5px;">:</span><br>
                    Kepala         <span style="margin-left: 47.5px;">:</span><br>
                                     <br>
                                     <br>
                                     <br>
                    ...............................................................................
                </td>
            </tr>
             <tr>
                <td style="width:5%;">III</td>
                <td style="width:45%;">
                     Tiba Di <span style="margin-left: 45px;">:</span><br>
                    Pada Tanggal   <span style="margin-left: 5px;">:</span><br>
                    Kepala         <span style="margin-left: 46.5px;">:</span><br>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                    ...............................................................................
                </td>
                <td style="width:5%;"></td>
                <td style="width:45%;">
                    Berangkat Dari <span style="margin-left: 0px;">:</span><br>
                    Ke             <span style="margin-left: 72.5px;">:</span><br>
                    Pada Tanggal   <span style="margin-left: 5px;">:</span><br>
                    Kepala         <span style="margin-left: 47.5px;">:</span><br>
                                     <br>
                                     <br>
                                     <br>
                    ...............................................................................
                </td>
            </tr>
             <tr>
                <td style="width:5%;">IV</td>
                <td style="width:45%;">
                    Tiba Di <span style="margin-left: 45px;">:</span><br>
                    Pada Tanggal   <span style="margin-left: 5px;">:</span><br>
                    Kepala         <span style="margin-left: 46.5px;">:</span><br>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                    ...............................................................................
                </td>
                <td style="width:5%;"></td>
                <td style="width:45%;">
                    Berangkat Dari <span style="margin-left: 0px;">:</span><br>
                    Ke             <span style="margin-left: 72.5px;">:</span><br>
                    Pada Tanggal   <span style="margin-left: 5px;">:</span><br>
                    Kepala         <span style="margin-left: 47.5px;">:</span><br>
                                     <br>
                                     <br>
                                     <br>
                    ...............................................................................
                </td>
            </tr>
            <tr style="height: 150">
                <td style="width:5%;height: 200px;">V</td>
                <td style="width:45%;height: 200px;">
                     Tiba Di <span style="margin-left: 45px;">:</span><br>
                    Pada Tanggal   <span style="margin-left: 5px;">:</span><br>
                    Kepala         <span style="margin-left: 46.5px;">:</span><br>
                                     <br>
                                     <br>
                    <div style="text-align: center;">Kuasa Pengguna Anggaran</div><br>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                    ................................................................................
                </td>
                <td style="width:5%;height: 200px;"></td>
                <td style="width:45%;height: 200px;text-align: justify;">
                    Telah diperiksa dengan keterangan bahwa perjalanan tersebut atau perintah pejabat yang berwenang dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya.
                                     <br>
                                     <br>
                     <div style="text-align: center;">Kuasa Pengguna Anggaran</div><br>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                                     <br>
                    ................................................................................
                </td>
            </tr>
             <tr>
                <td style="width:5%;height: 20px;">VI</td>
                <td style="width:95%;height: 20px;" colspan="3">Catatan Lain - Lain</td>
            </tr>
            <tr>
                <td style="width:5%;">VII</td>
                <td style="width:95%;text-align: justify;" colspan="3">
                    PERHATIAN : <br>
                    Pengguna Anggaran/Kuasa Anggaran yang menerbitkan SPPD, Gubernur/Wakil Gubernur, Pimpinan dan Anggaran DPRD, PNS, dan Pegawai-Non PNS yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal berangkat/tiba, serta bendahara pengeluaran bertanggungjawab berdasarkan peraturan-peraturan Keuangan Daerah apabila daerah menderita rugi akibat kesalahan, kelalaian, dan kealpaannya.
                </td>
            </tr>
        </table>
    </div>
</page>

<?php
$content = ob_get_clean();

require ('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new html2pdf('P', 'A4', 'en');
$html2pdf->WriteHTML($content, isset($GET['vuehtml']));
$html2pdf->Output('Laporan SPPD.pdf');

?>