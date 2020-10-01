<?php
// Koneksi
ob_start();
include "../koneksidb.php";
$query = "SELECT * FROM sppd WHERE no_surat = '$_GET[id]'";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($hasil);

$tglp = $row['tgl_pelaksanaan'];
$format1 = date('d-F-Y', strtotime($tglp));
?>

<style>
    .spt{
        text-align:center;
        font-family:Times; 
    }
    .spt1{
        font-size:20px;
        font-weight:bold;
    }
    .spt2{
        font-size:16px;
        font-weight:bold;
    }
    .spt3{
        font-size:14px;
    }
    .spt4{
        font-size:12px;
        text-decoration: underline; 
    }
    .spt5{
        font-size:14px;
        font-weight:bold;
        text-decoration: underline; 
    }
    .tabel{
        border-collapse: collapse; 
    }
    .tabel td{
         padding:6px 10px;
         height:5px;
    }
    .tabels{
        border-collapse: collapse; 
    }
    .tabels td{
         padding:2px 4px;
         height:5px;
    }
</style>


<page backtop="5mm" backdown="5mm" backleft="10mm" backright="5mm">
     <div style="margin-bottom: 10px;">
        <table border="0px" class="tabel">
            <tr>
                <td style="width:20%;" rowspan="5">
                    <img src="../assets/images/Dispora.jpg" style="width: 100px;height: 125px;float: right;">
                </td>
                <td style="width:60%;">
                    <div class="spt spt1">PEMERINTAH PROVINSI JAWA TIMUR</div>
                </td>
                <td style="width:20%;" rowspan="5"></td>
            </tr>
             <tr>
                <td style="width:60%;">
                    <div class="spt spt2">DINAS KEPEMUDAAN DAN OLAHRAGA</div>
                </td>
            </tr>
             <tr>
                <td style="width:60%;">
                    <div class="spt spt3">Jl. Kayon No. 56 Telp. ( 031 ) 5345507 Fax. ( 031) 5345508</div>
                </td>
            </tr>
            <tr>
                <td style="width:60%;">
                    <div class="spt spt4">E-mail : dispora@jatimprov.go.id http : //dispora.jatimprov.go.id</div>
                </td>
            </tr>
            <tr>
                <td style="width:60%;">
                    <div class="spt spt5">SURABAYA - 60271</div>
                </td>
            </tr>
        </table>
    </div>

    <div style="margin-top:10px;">
        <div class="spt spt5">LAPORAN PERJALANAN DINAS</div>
    </div>

    <div style="margin:10px 0px;">
        <table border="0px" class="tabel">
            <tr>
                <td style="width:5%;">I</td>
                <td style="width:30%;">Dasar</td>
                <td style="width:5%;">a.</td>
                <td style="width:60%;text-align: justify;">
                    Peraturan Daerah Nomor 62 Tahun 2016 tentang Organisasi dan Tata Kerja Dinas Kepemudaan dan Olahraga Provinsi Jawa Timur
                </td>
            </tr>
             <tr>
                <td style="width:5%;"></td>
                <td style="width:30%;"></td>
                <td style="width:5%;">b.</td>
                <td style="width:60%;text-align: justify;">
                    Peraturan Gubernur Jawa Timur Nomor 92 Thn 2018 tanggal 31 Desember 2018 tentang Pedoman Kerja & Pelaksanaan Tugas Pemerintah 
                    Provinsi Jawa Timur Tahun 2019
                </td>
            </tr>
             <tr>
                <td style="width:5%;"></td>
                <td style="width:30%;"></td>
                <td style="width:5%;">c.</td>
                <td style="width:60%;text-align: justify;">
                    Keputusan Gubernur Jawa Timur tanggal 31 Desember 2018 Nomor : 903/282/203.2/2018 tentang Pengesahan DPA Satuan Kerja Perangkat 
                    Daerah Dinas Kepemudaan dan Olahraga Provinsi Jawa Timur TA 2019
                </td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:30%;"></td>
                <td style="width:5%;">d.</td>
                <td style="width:60%;">
                    Surat Perintah Tugas tanggal 15 Januari 2018 Nomor :
                </td>
            </tr>
             <tr>
                <td style="width:5%;">II</td>
                <td style="width:30%;">Maksud dan tujuan</td>
                <td style="width:5%;"></td>
                <td style="width:60%;">
                    <?php echo $row['rangka']; ?>
                </td>
            </tr>
             <tr>
                <td style="width:5%;">III</td>
                <td style="width:30%;">Waktu Pelaksanaan</td>
                <td style="width:5%;"></td>
                <td style="width:60%;">
                    <?php echo $format1; ?>
                </td>
            </tr>
             <tr>
                <td style="width:5%;">IV</td>
                <td style="width:30%;">Nama Tugas</td>
                <td style="width:5%;"></td>
                <td style="width:60%;">
                   <?php echo $row['nama']; ?> 
                </td>
            </tr>
             <tr>
                <td style="width:5%;">V</td>
                <td style="width:30%;">Daerah Tujuan/Instansi</td>
                <td style="width:5%;"></td>
                <td style="width:60%;">
                    <?php echo $row['instansi_tujuan']; ?>
                </td>
            </tr>
             <tr>
                <td style="width:5%;">VI</td>
                <td style="width:30%;">Petunjuk/arahan yang diberikan</td>
                <td style="width:5%;"></td>
                <td style="width:60%;">
                    <?php echo $row['arahan']; ?>
                </td>
            </tr>
             <tr>
                <td style="width:5%;">VII</td>
                <td style="width:30%;">Masalah/Temuan</td>
                <td style="width:5%;"></td>
                <td style="width:60%;">
                    <?php echo $row['masalah']; ?>
                </td>
            </tr>
             <tr>
                <td style="width:5%;">VIII</td>
                <td style="width:30%;">Saran Tindakan</td>
                <td style="width:5%;"></td>
                <td style="width:60%;">
                    <?php echo $row['saran']; ?>
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
                    Pembuat Laporan
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

<?php
$content = ob_get_clean();

require ('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new html2pdf('P', 'A4', 'en');
$html2pdf->WriteHTML($content, isset($GET['vuehtml']));
$html2pdf->Output('Laporan LPD.pdf');

?>