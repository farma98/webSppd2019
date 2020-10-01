<?php
// Koneksi
ob_start();
include "../koneksidb.php";
$query = "SELECT * FROM kwitansi WHERE no_bukti = '$_GET[id]'";
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
         text-align: center;
    }
    .tabelss{
        border-collapse: collapse; 
    }
    .tabelss td{
         padding:2px 4px;
         height:5px;
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

    <div style="margin:5px 0px;">
        <table border="0px" class="tabelss">
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;">
                    LAMPIRAN II
                </td>
            </tr>
             <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;">
                    PERATURAN GUBERNUR JAWA TIMUR
                </td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;">
                    NOMOR :
                </td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;">
                    TENTANG
                </td>
            </tr>
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%;text-align: justify;">
                    PERJALANAN DINAS BAGI GUBERNUR/WAKIL GUBERNUR, PIMPINAN DAN ANGGOTA DEWAN PERWAKILAN RAKYAT DAERAH, PEGAWAI NEGERI DAN PEGAWAI 
                    TIDAK TETAP
                </td>
            </tr>
        </table>
    </div>

    <div style="margin-top: 5px;">
        <div class="spt spt1" style="text-decoration: underline;">RINCIAN BIAYA PERJALANAN DINAS</div>
    </div>

    <div style="margin:25px 0px;">
        <table border="1px" class="tabel">
            <tr>
                <td style="width:5%;">No</td>
                <td style="width:40%;text-align: center;">PERINCIAN BIAYA</td>
                <td style="width:15%;text-align: center;">Jumlah</td>
                <td style="width:40%;text-align: center;">Keterangan</td>
            </tr>
             <tr>
                <td style="width:5%;">1</td>
                <td style="width:40%;">Uang Harian</td>
                <td style="width:15%;">( )</td>
                <td style="width:40%;" rowspan="4"></td>
            </tr>
             <tr>
                <td style="width:5%;">2</td>
                <td style="width:40%;">Biaya Penginapan</td>
                <td style="width:15%;">( )</td>
            </tr>
            <tr>
                <td style="width:5%;">3</td>
                <td style="width:40%;">Biaya BBM dan Tol</td>
                <td style="width:15%;"></td>
            </tr>
             <tr>
                <td style="width:5%;"></td>
                <td style="width:40%;text-align: center;">Jumlah</td>
                <td style="width:15%;"></td>
            </tr>
             <tr>
                <td style="width:5%;"></td>
                <td colspan="3" style="width:40%;">Terbilang : </td>
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
                <td style="width:50%;" style="text-align: center;">
                    Telah Dibayar Sejumlah
                </td>
                <td style="width:50%;" style="text-align: center;">
                    KEPALA DINAS KEPEMUDAAN DAN OLAHRAGA
                </td>
            </tr>
            <tr>
                <td style="width:50%;" style="text-align: center;">
                    Rp.
                </td>
                <td style="width:50%;" style="text-align: center;">
                    PROVINSI JAWA TIMUR
                </td>
            </tr>
             <tr>
                <td style="width:50%;" style="text-align: center;">
                    Bendahara Pengeluaran
                </td>
                <td style="width:50%;" style="text-align: center;">
                    Yang Menerima
                </td>
            </tr>
             <tr>
                <td style="width:50%;" rowspan="5"></td>
                <td style="width:50%;" rowspan="5"></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td style="width:50%;" style="text-align: center;text-decoration: underline;">
                    <b>Drs.SUPRATOMO, M.Si</b>
                </td>
                <td style="width:50%;" style="text-align: center;text-decoration: underline;">
                    <b>Drs.SUPRATOMO, M.Si</b>
                </td>
            </tr>
            <tr>
                <td style="width:50%;" style="text-align: center;">
                    Nip. 196108251989031005
                </td>
                <td style="width:50%;" style="text-align: center;">
                    Nip. 196108251989031005
                </td>
            </tr>
        </table>
        <hr>
    </div>

     <div style="margin:5px 0px;">
        <table border="1px" class="tabels">
            <tr>
                <td style="width:30%;" colspan="3" style="text-align: center;">
                   PERHITUNGAN SPPD RAMPUNG
                </td>
            </tr>
            <tr>
                <td style="width:30%;">
                    Ditetapkan Sejumlah    
                </td>
                <td style="width:30%;">
                   
                </td>
                <td style="width:40%;"></td>
            </tr>
            <tr>
                <td style="width:30%;">
                    Yang Telah Dibayar Semula
                </td>
                <td style="width:30%;">
                   
                </td>
                <td style="width:40%;"></td>
            </tr>
            <tr>
                <td style="width:30%;">
                    Sisa Kurang / Lebih
                </td>
                <td style="width:30%;">
                   
                </td>
                <td style="width:40%;"></td>
            </tr>             
        </table>
    </div>

    <div style="margin:5px 0px;">
        <table border="0px" class="tabels">
            <tr>
                <td style="width:25%;"></td>
                <td style="width:50%;">
                    Kuasa Pengguna Anggaran
                </td>
                <td style="width:25%;"></td>
            </tr>
             <tr>
                <td style="width:25%;"></td>
                <td style="width:50%;" rowspan="5"></td>
                <td style="width:25%;"></td>
            </tr>
            <tr>
                <td style="width:25%;"></td>
                <td style="width:25%;"></td>
            </tr>
            <tr>
                <td style="width:25%;"></td>
                <td style="width:25%;"></td>
            </tr>
            <tr>
                <td style="width:25%;"></td>
                <td style="width:25%;"></td>
            </tr>
            <tr>
                <td style="width:25%;"></td>
                <td style="width:25%;"></td>
            </tr>
            <tr>
                <td style="width:25%;"></td>
                <td style="width:50%;" style="text-decoration: underline;">
                    <b>Drs.SUPRATOMO, M.Si</b>
                </td>
                <td style="width:25%;"></td>
            </tr>
            <tr>
                <td style="width:25%;"></td>
                <td style="width:50%;">
                    Pembina Utama Muda
                </td>
                <td style="width:25%;"></td>
            </tr>
            <tr>
                <td style="width:25%;"></td>
                <td style="width:50%;">
                    Nip. 196108251989031005
                </td>
                <td style="width:25%;"></td>
            </tr>
        </table>
    </div>
</page>

<?php
$content = ob_get_clean();

require ('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new html2pdf('P', 'A4', 'en');
$html2pdf->WriteHTML($content, isset($GET['vuehtml']));
$html2pdf->Output('Laporan Kwitansi.pdf');

?>