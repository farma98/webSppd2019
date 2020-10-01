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
<div id="source-html">
<div class="Section1">

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="96%" style="width:96.78%;margin-left:7.55pt;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-row-margin-right:3.45pt">
    <td width="22%" rowspan="5" style="width:22.32%;padding:4.5pt 7.5pt 4.5pt 7.5pt">
    <p class="MsoNormal"><span style="mso-no-proof:yes"><img width="100" height="136" src="file:///C:/Users/SAMSUN~1/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg" v:shapes="Picture_x0020_2"><!--[endif]--></span></p>
    </td>
    <td width="77%" colspan="2" style="width:77.68%;padding:4.5pt 7.5pt 4.5pt 7.5pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:16.0pt;
    font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">PEMERINTAH PROVINSI
    JAWA TIMUR<o:p></o:p></span></b></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="5"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:1;mso-row-margin-right:3.45pt">
    <td width="77%" colspan="2" style="width:77.68%;padding:4.5pt 7.5pt 4.5pt 7.5pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;
    font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">DINAS KEPEMUDAAN
    DAN OLAHRAGA<o:p></o:p></span></b></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="5"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:2;mso-row-margin-right:3.45pt">
    <td width="77%" colspan="2" style="width:77.68%;padding:4.5pt 7.5pt 4.5pt 7.5pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;
    mso-bidi-font-family:Times">Jl. Kayon No. 56 Telp. ( 031 ) 5345507 Fax. (
    031) 5345508<o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="5"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:3;mso-row-margin-right:3.45pt">
    <td width="77%" colspan="2" style="width:77.68%;padding:4.5pt 7.5pt 4.5pt 7.5pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:10.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;
    mso-bidi-font-family:Times">E-mail : dispora@jatimprov.go.id http :
    //dispora.jatimprov.go.id<o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="5"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:4;mso-row-margin-right:3.45pt">
    <td width="77%" colspan="2" style="width:77.68%;padding:4.5pt 7.5pt 4.5pt 7.5pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><u><span style="font-family:
    &quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">SURABAYA - 60271<o:p></o:p></span></u></b></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="5"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:5;height:3.75pt">
    <td width="49%" colspan="2" style="width:49.68%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="50%" colspan="2" style="width:50.32%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    10.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-ascii-theme-font:major-latin;
    mso-fareast-font-family:&quot;Times New Roman&quot;;mso-hansi-theme-font:major-latin;
    mso-bidi-font-family:Arial">LAMPIRAN PERATURAN GUBERNUR JAWA TIMUR <o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:6;height:3.75pt">
    <td width="49%" colspan="2" style="width:49.68%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="50%" colspan="2" style="width:50.32%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    10.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-ascii-theme-font:major-latin;
    mso-fareast-font-family:&quot;Times New Roman&quot;;mso-hansi-theme-font:major-latin;
    mso-bidi-font-family:Arial">NOMOR : 26 TAHUN 2013 <o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:7;mso-yfti-lastrow:yes;height:3.75pt">
    <td width="49%" colspan="2" style="width:49.68%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="50%" colspan="2" style="width:50.32%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    10.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-ascii-theme-font:major-latin;
    mso-fareast-font-family:&quot;Times New Roman&quot;;mso-hansi-theme-font:major-latin;
    mso-bidi-font-family:Arial">TANGGAL : 28 MARET 2013 <o:p></o:p></span></p>
    </td>
</tr>
<!--[if !supportMisalignedColumns]-->
<tr height="0">
<td width="161" style="border:none"></td>
<td width="198" style="border:none"></td>
<td width="364" style="border:none"></td>
<td width="0" style="border:none"></td>
</tr>
<!--[endif]-->
</tbody>
</table>

<p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"><o:p>&nbsp;</o:p></span></p>

<p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;">SURAT PERINTAH PERJALANAN DINAS(SPPD)<o:p></o:p></span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="96%" style="width:96.8%;margin-left:7.5pt;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">1<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">Kuasa Pengguna Anggaran<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">SUGENG, ,SH.MM <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">2<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">Nama Pegawai Yang Di Perintahkan<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['nama']; ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:2;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">3<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">A. Jabatan<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['kode_jabatan']; ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:3;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt"></td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">B. Tingkat Biaya Perjalanan Dinas<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:4;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">4<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">Maksud Perjalanan Dinas<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['rangka']; ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:5;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">5<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">Alat Angkutan Yang Dipergunakan<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:6;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">6<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">A. Tempat Berangkat<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['nama_daerah']; ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:7;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt"></td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">B. Tempat Tujuan<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:8;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">7<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">A. Lamanya Perjalanan Dinas<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal"><?php echo "$interval->days hari ";?> </p></td>
</tr>
<tr style="mso-yfti-irow:9;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt"></td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">B. Tanggal Berangkat<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $format1?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:10;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt"></td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">C. Tanggal Harus Kembali<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $format2 ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:11;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">8<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">Pengikut<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:12;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt"></td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">Nip<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:13;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt"></td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">Nama<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:14;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">9<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">Pembebanan Anggaran<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:15;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt"></td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">A. Skpd<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:16;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt"></td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">B. Akun<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:17;height:3.75pt;mso-row-margin-right:3.1pt">
    <td width="6%" style="width:6.0%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt">
    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">10<o:p></o:p></span></p>
    </td>
    <td width="45%" colspan="2" style="width:45.22%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;">Keterangan Lain-Lain<o:p></o:p></span></p>
    </td>
    <td width="48%" style="width:48.76%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="4"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:18;height:3.75pt">
    <td width="41%" colspan="2" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="3" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Dikeluarkan Di Surabaya <o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:19;height:3.75pt">
    <td width="41%" colspan="2" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="3" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">pada tanggal
    .............................................................<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:20;height:3.75pt">
    <td width="41%" colspan="2" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="3" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">KEPALA
    DINAS KEPEMUDAAN DAN OLAHRAGA<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:21;height:3.75pt">
    <td width="41%" colspan="2" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="3" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">PROVINSI
    JAWA TIMUR<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:22;height:3.75pt">
    <td width="41%" colspan="2" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="3" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p>&nbsp;</o:p></span></p>
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p>&nbsp;</o:p></span></p>
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p>&nbsp;</o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:23;height:3.75pt">
    <td width="41%" colspan="2" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="3" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><u><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Drs.SUPRATOMO, M.S</span></u></b><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">i<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:24;height:3.75pt">
    <td width="41%" colspan="2" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="3" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Pembina
    Utama Muda<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:25;mso-yfti-lastrow:yes;height:3.75pt">
    <td width="41%" colspan="2" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="3" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Nip.
    196108251989031005<o:p></o:p></span></p>
    </td>
</tr>
<!--[if !supportMisalignedColumns]-->
<tr height="0">
<td width="42" style="border:none"></td>
<td width="259" style="border:none"></td>
<td width="66" style="border:none"></td>
<td width="352" style="border:none"></td>
<td width="5" style="border:none"></td>
</tr>
<!--[endif]-->
</tbody>
</table>

</div>

<span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA"><br clear="all" style="page-break-before:always;
mso-break-type:section-break">
</span>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt">
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:3.75pt"></td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">I<o:p></o:p></span></p>
    </td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">Berangkat Dari :<br>
    Ke :<br>
    Pada Tanggal :<br>
    Kepala :<br>
    <br>
    <br>
    <br>
    ........................................................................<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt">
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">II<o:p></o:p></span></p>
    </td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">Tiba Di :<br>
    Pada Tanggal :<br>
    Kepala :<br>
    <br>
    <br>
    <br>
    <br>
    .......................................................................<o:p></o:p></span></p>
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;"><span style="mso-spacerun:yes">&nbsp;</span><o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:3.75pt"></td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">Berangkat Dari :<br>
    Ke :<br>
    Pada Tanggal :<br>
    Kepala :<br>
    <br>
    <br>
    <br>
    ........................................................................<o:p></o:p></span></p>
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;"><span style="mso-spacerun:yes">&nbsp;</span><o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:2;height:3.75pt">
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">III<o:p></o:p></span></p>
    </td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">Tiba Di :<br>
    Pada Tanggal :<br>
    Kepala :<br>
    <br>
    <br>
    <br>
    <br>
    .......................................................................<o:p></o:p></span></p>
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;"><span style="mso-spacerun:yes">&nbsp;</span><o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:3.75pt"></td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">Berangkat Dari :<br>
    Ke :<br>
    Pada Tanggal :<br>
    Kepala :<br>
    <br>
    <br>
    <br>
    .......................................................................<o:p></o:p></span></p>
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;"><span style="mso-spacerun:yes">&nbsp;</span><o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:3;height:3.75pt">
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">IV<o:p></o:p></span></p>
    </td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">Tiba Di :<br>
    Pada Tanggal :<br>
    Kepala :<br>
    <br>
    <br>
    <br>
    <br>
    .......................................................................<o:p></o:p></span></p>
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;"><span style="mso-spacerun:yes">&nbsp;</span><o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:3.75pt"></td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">Berangkat Dari :<br>
    Ke :<br>
    Pada Tanggal :<br>
    Kepala :<br>
    <br>
    <br>
    <br>
    .......................................................................<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:4;height:150.0pt">
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:150.0pt">
    <p class="MsoNormal"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">V<o:p></o:p></span></p>
    </td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:150.0pt">
    <p class="MsoNormal" style="margin-bottom:12.0pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">Tiba Di :<br>
    Pada Tanggal :<br>
    Kepala :<br style="mso-special-character:line-break">
    <!--[if !supportLineBreakNewLine]--><br style="mso-special-character:line-break">
    <!--[endif]--><o:p></o:p></span></p>
    <p class="MsoNormal" align="center" style="text-align:center"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Kuasa Pengguna Anggaran<o:p></o:p></span></p>
    <p class="MsoNormal"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;"><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    ....................................................................... <o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:150.0pt"></td>
    <td width="45%" style="width:45.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:150.0pt">
    <p class="MsoNormal" style="margin-bottom:12.0pt;text-align:justify"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Telah diperiksa dengan
    keterangan bahwa perjalanan tersebut atau perintah pejabat yang berwenang dan
    semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya. <o:p></o:p></span></p>
    <p class="MsoNormal" align="center" style="text-align:center"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Kuasa Pengguna Anggaran<o:p></o:p></span></p>
    <p class="MsoNormal" style="text-align:justify"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;"><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    ....................................................................<o:p></o:p></span></p>
    <p class="MsoNormal" style="text-align:justify"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;"><span style="mso-spacerun:yes">&nbsp;</span><o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:5;height:15.0pt">
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:15.0pt">
    <p class="MsoNormal"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">VI<o:p></o:p></span></p>
    </td>
    <td width="95%" colspan="3" style="width:95.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:15.0pt">
    <p class="MsoNormal"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Catatan
    Lain - Lain<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:6;mso-yfti-lastrow:yes;height:3.75pt">
    <td width="5%" style="width:5.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
    &quot;Times New Roman&quot;">VII<o:p></o:p></span></p>
    </td>
    <td width="95%" colspan="3" style="width:95.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="text-align:justify;mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">PERHATIAN : <br>
    Pengguna Anggaran/Kuasa Anggaran yang menerbitkan SPPD, Gubernur/Wakil
    Gubernur, Pimpinan dan Anggaran DPRD, PNS, dan Pegawai-Non PNS yang melakukan
    perjalanan dinas, para pejabat yang mengesahkan tanggal berangkat/tiba, serta
    bendahara pengeluaran bertanggungjawab berdasarkan peraturan-peraturan
    Keuangan Daerah apabila daerah menderita rugi akibat kesalahan, kelalaian,
    dan kealpaannya. <o:p></o:p></span></p>
    </td>
</tr>
</tbody>
</table>

<p class="MsoNormal"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;"><o:p>&nbsp;</o:p></span></p>
</div>

<script>
window.load = print_a();
function print_a(){
    var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
        "xmlns:w='urn:schemas-microsoft-com:office:word' "+
        "xmlns='http://www.w3.org/TR/REC-html40'>"+
        "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
    var footer = "</body></html>";
    var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;

    var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
    var fileDownload = document.createElement("a");
    document.body.appendChild(fileDownload);
    fileDownload.href = source;
    fileDownload.download = 'Laporan SPPD <?php echo $row['nama']; ?>.doc';
    fileDownload.click();
    document.body.removeChild(fileDownload);
    // window.print();
}
</script>