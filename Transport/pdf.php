<?php
// Koneksi
ob_start();
include "../koneksidb.php";
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
         height:20px;
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
                    <div class="spt spt5">SURABAYA 60271</div>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <div class="spt spt1" style="text-decoration: underline;">DAFTAR TRANSPORTASI PERJALANAN DINAS</div>
    </div>

    <div style="margin:25px 0px;">
        <table border="1px" class="tabel">
            <tr>
                <td style="width:10%;">No</td>
                <td style="width:15%;">No Tiket</td>
                <td style="width:20%;">Nama Transportasi</td>
                <td style="width:20%;">No Penerbangan</td>
                <td style="width:15%;">No Kursi</td>
                <td style="width:20%;">Tujuan</td>
            </tr>
            <?php
            include "../koneksidb.php";
            $no = 1;
            $queryview = mysqli_query($koneksi, "SELECT t.no_tiket, t.nama_kendaraan, t.no_penerbangan, t.no_kursi, d.nama_daerah FROM transportasi t
                        join akomodasi a on t.no_tiket = a.no_tiket join daerah d on a.kode_daerah = d.kode_daerah WHERE t.no_tiket = '$_GET[id]'");
            while ($row = mysqli_fetch_assoc($queryview)) {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['no_tiket'];?></td>
                <td><?php echo $row['nama_kendaraan'];?></td>
                <td><?php echo $row['no_penerbangan'];?></td>
                <td><?php echo $row['no_kursi'];?></td>
                <td><?php echo $row['nama_daerah'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</page>

<?php
$content = ob_get_clean();

require ('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new html2pdf('P', 'A4', 'en');
$html2pdf->WriteHTML($content, isset($GET['vuehtml']));
$html2pdf->Output('Laporan Transportasi Perjalanan Dinas.pdf');

?>