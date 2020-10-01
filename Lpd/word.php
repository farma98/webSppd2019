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

<div id="source-html">
<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="96%" style="width:96.4%;margin-left:7.5pt;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt">
    <td width="21%" rowspan="5" style="width:21.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="mso-no-proof:yes"><img width="100" height="136" src="file:///C:/Users/SAMSUN~1/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg" v:shapes="Picture_x0020_2"><!--[endif]--></span></p>
    </td>
    <td width="78%" style="width:78.82%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:16.0pt;
    font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">PEMERINTAH PROVINSI
    JAWA TIMUR<o:p></o:p></span></b></p>
    </td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt">
    <td width="78%" style="width:78.82%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;
    font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">DINAS KEPEMUDAAN
    DAN OLAHRAGA<o:p></o:p></span></b></p>
    </td>
</tr>
<tr style="mso-yfti-irow:2;height:3.75pt">
    <td width="78%" style="width:78.82%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;
    mso-bidi-font-family:Times">Jl. Kayon No. 56 Telp. ( 031 ) 5345507 Fax. (
    031) 5345508<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:3;height:3.75pt">
    <td width="78%" style="width:78.82%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:10.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;
    mso-bidi-font-family:Times">E-mail : dispora@jatimprov.go.id http :
    //dispora.jatimprov.go.id<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:3.75pt">
    <td width="78%" style="width:78.82%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><u><span style="font-family:
    &quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">SURABAYA - 60271<o:p></o:p></span></u></b></p>
    </td>
</tr>
</tbody>
</table>

<p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;">LAPORAN PERJALANAN DINAS<o:p></o:p></span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="96%" style="width:96.4%;margin-left:7.5pt;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt;mso-row-margin-right:
4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">I<o:p></o:p></span></p>
    </td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">Dasar<o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">a.<o:p></o:p></span></p>
    </td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="text-align:justify;mso-line-height-alt:3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
    &quot;Times New Roman&quot;">Peraturan Daerah Nomor 62 Tahun 2016 tentang Organisasi
    dan Tata Kerja Dinas Kepemudaan dan Olahraga Provinsi Jawa Timur <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">b.<o:p></o:p></span></p>
    </td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="text-align:justify;mso-line-height-alt:3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
    &quot;Times New Roman&quot;">Peraturan Gubernur Jawa Timur Nomor 92 Thn 2018 tanggal 31
    Desember 2018 tentang Pedoman Kerja &amp; Pelaksanaan Tugas Pemerintah
    Provinsi Jawa Timur Tahun 2019 <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:2;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">c.<o:p></o:p></span></p>
    </td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="text-align:justify;mso-line-height-alt:3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
    &quot;Times New Roman&quot;">Keputusan Gubernur Jawa Timur tanggal 31 Desember 2018
    Nomor : 903/282/203.2/2018 tentang Pengesahan DPA Satuan Kerja Perangkat Daerah
    Dinas Kepemudaan dan Olahraga Provinsi Jawa Timur TA 2019 <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:3;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">d.<o:p></o:p></span></p>
    </td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">Surat
    Perintah Tugas tanggal 15 Januari 2018 Nomor : <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:4;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">II<o:p></o:p></span></p>
    </td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">Maksud
    dan tujuan<o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['rangka']; ?>
    <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:5;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">III<o:p></o:p></span></p>
    </td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">Waktu
    Pelaksanaan<o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $format1; ?>
    <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:6;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">IV<o:p></o:p></span></p>
    </td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">Nama
    Tugas<o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['nama']; ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:7;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">V<o:p></o:p></span></p>
    </td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">Daerah
    Tujuan/Instansi<o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['instansi_tujuan']; ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:8;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">VI<o:p></o:p></span></p>
    </td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">Petunjuk/arahan
    yang diberikan<o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['arahan']; ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:9;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">VII<o:p></o:p></span></p>
    </td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">Masalah/Temuan<o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['masalah']; ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:10;height:3.75pt;mso-row-margin-right:4.95pt">
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">VIII<o:p></o:p></span></p>
    </td>
    <td width="30%" style="width:30.6%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">Saran
    Tindakan<o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.18%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="59%" colspan="2" style="width:59.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><?php echo $row['saran']; ?> <o:p></o:p></span></p>
    </td>
    <td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:11;height:3.75pt">
    <td width="41%" colspan="4" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="2" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Dikeluarkan Di Surabaya <o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:12;mso-yfti-lastrow:yes;height:3.75pt">
    <td width="41%" colspan="4" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="2" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">pada tanggal
    .............................................................<o:p></o:p></span></p>
    </td>
</tr>
<!--[if !supportMisalignedColumns]-->
<tr height="0">
<td width="42" style="border:none"></td>
<td width="217" style="border:none"></td>
<td width="34" style="border:none"></td>
<td width="4" style="border:none"></td>
<td width="415" style="border:none"></td>
<td width="8" style="border:none"></td>
</tr>
<!--[endif]-->
</tbody>
</table>

<p class="MsoNormal"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;;
display:none;mso-hide:all"><o:p>&nbsp;</o:p></span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="99%" style="width:99.24%;margin-left:3.1pt;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt">
    <td width="41%" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">KEPALA
    DINAS KEPEMUDAAN DAN OLAHRAGA<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt">
    <td width="41%" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">PROVINSI
    JAWA TIMUR<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:2;height:43.9pt">
    <td width="41%" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:43.9pt"></td>
    <td width="58%" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:43.9pt">
    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:4.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p>&nbsp;</o:p></span></p>
    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:4.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p>&nbsp;</o:p></span></p>
    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:4.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p>&nbsp;</o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:3;height:3.75pt">
    <td width="41%" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b><u><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Drs.SUPRATOMO,
    M.Si</span></u></b><u><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p></o:p></span></u></p>
    </td>
</tr>
<tr style="mso-yfti-irow:4;height:3.75pt">
    <td width="41%" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Pembina
    Utama Muda<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:5;mso-yfti-lastrow:yes;height:14.65pt">
    <td width="41%" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:14.65pt"></td>
    <td width="58%" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:14.65pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Nip. 196108251989031005<o:p></o:p></span></p>
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
   fileDownload.download = 'Laporan Perjalanan Dinas <?php echo $row['no_surat']; ?>.doc';
   fileDownload.click();
   document.body.removeChild(fileDownload);
   // window.print();
}
</script>