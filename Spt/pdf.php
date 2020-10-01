<?php
// Koneksi
ob_start();
include "../koneksidb.php";
$query = "SELECT * FROM spt WHERE kode = '$_GET[id]'";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($hasil);
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

<page backtop="5mm" backdown="5mm" backleft="10mm" backright="7.5mm">
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
        <div class="spt spt5">SURAT PERINTAH TUGAS</div>
        <div class="spt spt3">Nomor : 094 / <?php echo $row['nip']; ?> /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ 2019</div>
    </div>

    <div style="margin:20px 0px;">
        <table border="0px" class="tabel">
            <tr>
                <td style="width:5%;"></td>
                <td style="width:10%;"><b>DASAR:</b></td>
                <td style="width:2.5%;">1.</td>
                <td style="width:82.5%;text-align: justify;">
                    Peraturan Daerah Provinsi Jawa Timur No : 11 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah;
                </td>
            </tr>
             <tr>
                <td style="width:5%;"></td>
                <td style="width:10%;"></td>
                <td style="width:2.5%;">2.</td>
                <td style="width:82.5%;text-align: justify;">
                    Peraturan Gubernur Jawa Timur Nomor ; 62 Tahun 2016 tentang kedudukan, susunan organisasi, uraian tugas dan fungsi serta Tata Kerja Dinas Kepemudaan dan Olahraga Provinsi Jawa Timur;
                </td>
            </tr>
             <tr>
                <td style="width:5%;"></td>
                <td style="width:10%;"></td>
                <td style="width:2.5%;">3.</td>
                <td style="width:82.5%;text-align: justify;">
                    Keputusan Gubernur Jawa Timur Nomor : 903/282/203.2/2018 tanggal 31 Desember 2018 tentang Dokumen Pelaksanaan Anggaran 
                    Satuan Kerja Perangkat Daerah (DPA-SKPD) Satuan Kerja Dinas Kepemudaan dan Olahraga Provinsi Jawa Timur 
                    Tahun Anggaran 2018
                </td>
            </tr>
        </table>
    </div>

    <div>
        <div class="spt spt5">MEMERINTAHKAN</div>
    </div>

<div style="margin:25px 0px;">
        <table border="0px" class="tabel">
            <tr>
                <td style="width:5%;"></td>
                <td style="width:10%;"><b>KEPADA:</b></td>
                <td style="width:4.5%;"></td>
                <td style="width:25%;">
                    NAMA   
                </td>
                <td style="width:35%;">
                    <?php echo $row['nama']; ?>
                </td>
                <td style="width:20.5%;"></td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:10%;"></td>
                <td style="width:5.5%;"></td>
                <td style="width:25%;">
                    NIP
                </td>
                <td style="width:35%;">
                    <?php echo $row['nip']; ?>
                </td>
                <td style="width:20.5%;"></td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:10%;"></td>
                <td style="width:4.5%;"></td>
                <td style="width:25%;">
                    PANGKAT
                </td>
                <td style="width:35%;">
                    <?php echo $row['pangkat']; ?>
                </td>
                <td style="width:20.5%;"></td>
            </tr>
            <tr>
                <td style="width:5%;"></td>
                <td style="width:10%;"></td>
                <td style="width:4.5s%;"></td>
                <td style="width:25%;">
                    JABATAN
                </td>
                <td style="width:35%;">
                    <?php echo $row['jabatan']; ?>
                </td>
                <td style="width:20.5%;"></td>
            </tr>
        </table>
    </div>

     <div style="margin:10px 0px;">
        <table border="0px" class="tabel">
            <tr>
                <td style="width:5%;"></td>
                <td style="width:10%;"><b>UNTUK:</b></td>
                <td style="width:4.5%;"></td>
                <td style="width:80.5%;">
                    <?php echo $row['keterangan']; ?>
                </td>
            </tr>
        </table>
    </div>

    <div style="margin:10px 0px;">
        <table border="0px" class="tabel">
             <tr>
                <td style="width:5%;"></td>
                <td style="width:10%;"></td>
                <td style="width:4.5%;"></td>
                <td style="width:80.5%;text-align: justify;">
                    Demikian Surat Perintah ini dibuat untuk dilaksanakan dengan penuh tanggung jawab.
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

<?php
$content = ob_get_clean();

require ('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new html2pdf('P', 'A4', 'en');
$html2pdf->WriteHTML($content, isset($GET['vuehtml']));
$html2pdf->Output('Laporan SPT.pdf');
exit;

?>