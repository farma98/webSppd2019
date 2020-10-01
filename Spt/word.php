<?php
// Koneksi
ob_start();
include "../koneksidb.php";
$query = "SELECT * FROM spt WHERE kode = '$_GET[id]'";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($hasil);
?>

<div id="source-html">
<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="96%" style="width:96.5%;margin-left:7.5pt;border-collapse:collapse;mso-yfti-tbllook:1184">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt">
    <td width="21%" rowspan="5" style="width:21.96%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal"><span style="mso-no-proof:yes"><img width="100" height="136" src="https://dispora.jatimprov.go.id/wp-content/uploads/2012/05/logo-jatim.png" v:shapes="Picture_x0020_2"><!--[endif]--></span></p>
    </td>
    <td width="78%" style="width:78.04%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:16.0pt;
    font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">PEMERINTAH PROVINSI
    JAWA TIMUR<o:p></o:p></span></b></p>
    </td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt">
    <td width="78%" style="width:78.04%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;
    font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">DINAS KEPEMUDAAN
    DAN OLAHRAGA<o:p></o:p></span></b></p>
    </td>
</tr>
<tr style="mso-yfti-irow:2;height:3.75pt">
    <td width="78%" style="width:78.04%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;
    mso-bidi-font-family:Times">Jl. Kayon No. 56 Telp. ( 031 ) 5345507 Fax. (
    031) 5345508<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:3;height:3.75pt">
    <td width="78%" style="width:78.04%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><span style="font-size:10.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;
    mso-bidi-font-family:Times">E-mail : dispora@jatimprov.go.id http :
    //dispora.jatimprov.go.id<o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:3.75pt">
    <td width="78%" style="width:78.04%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
    3.75pt"><b style="mso-bidi-font-weight:normal"><u><span style="font-family:
    &quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">SURABAYA - 60271<o:p></o:p></span></u></b></p>
    </td>
</tr>
</tbody>
</table>

<p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">SURAT PERINTAH TUGAS<o:p></o:p></span></p>

<p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Nomor : 094 <span style="mso-tab-count:1">&nbsp;&nbsp; </span>/<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>/<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>/ 2019<o:p></o:p></span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="96%" style="width:96.84%;margin-left:7.5pt;border-collapse:collapse;mso-yfti-tbllook:1184">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt">
    <td width="14%" style="width:14.52%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><b><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">DASAR:</span></b><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p></o:p></span></p>
    </td>
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">1.<o:p></o:p></span></p>
    </td>
    <td width="80%" style="width:80.36%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="text-align:justify;mso-line-height-alt:3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Peraturan Daerah
    Provinsi Jawa Timur No : 11 Tahun 2016 tentang Pembentukan dan Susunan
    Perangkat Daerah; <o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt">
    <td width="14%" style="width:14.52%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">2.<o:p></o:p></span></p>
    </td>
    <td width="80%" style="width:80.36%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="text-align:justify;mso-line-height-alt:3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Peraturan Gubernur
    Jawa Timur Nomor : 62 Tahun 2016 tentang kedudukan, susunan organisasi,
    uraian tugas dan fungsi serta Tata Kerja Dinas Kepemudaan dan Olahraga
    Provinsi Jawa Timur; <o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:2;mso-yfti-lastrow:yes;height:3.75pt">
    <td width="14%" style="width:14.52%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="5%" style="width:5.14%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">3.<o:p></o:p></span></p>
    </td>
    <td width="80%" style="width:80.36%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="text-align:justify;mso-line-height-alt:3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Keputusan Gubernur
    Jawa Timur Nomor : 903/282/203.2/2018 tanggal 31 Desember 2018 tentang
    Dokumen Pelaksanaan Anggaran Satuan Kerja Perangkat Daerah (DPA-SKPD) Satuan
    Kerja Dinas Kepemudaan dan Olahraga Provinsi Jawa Timur Tahun Anggaran 2018 <o:p></o:p></span></p>
    </td>
</tr>
</tbody>
</table>

<p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">MEMERINTAHKAN<o:p></o:p></span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="96%" style="width:96.5%;margin-left:7.5pt;border-collapse:collapse;mso-yfti-tbllook:1184">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt">
    <td width="16%" style="width:16.96%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><b><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">KEPADA:</span></b><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p></o:p></span></p>
    </td>
    <td width="3%" colspan="3" style="width:3.92%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="24%" style="width:24.16%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">NAMA <o:p></o:p></span></p>
    </td>
    <td width="54%" style="width:54.98%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><?php echo $row['nama']; ?> <o:p></o:p></span></p>
    </td>
 </tr>
 <tr style="mso-yfti-irow:1;height:3.75pt">
    <td width="16%" style="width:16.96%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="3%" colspan="3" style="width:3.92%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="24%" style="width:24.16%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">NIP <o:p></o:p></span></p>
    </td>
    <td width="54%" style="width:54.98%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><?php echo $row['nip']; ?> <o:p></o:p></span></p>
    </td>
 </tr>
 <tr style="mso-yfti-irow:2;height:3.75pt">
    <td width="16%" style="width:16.96%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="3%" colspan="3" style="width:3.92%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="24%" style="width:24.16%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">PANGKAT <o:p></o:p></span></p>
    </td>
    <td width="54%" style="width:54.98%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><?php echo $row['pangkat']; ?> <o:p></o:p></span></p>
    </td>
 </tr>
 <tr style="mso-yfti-irow:3;height:3.75pt">
    <td width="16%" style="width:16.96%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td colspan="3" style="padding:4.5pt 7.5pt 4.5pt 7.5pt;height:3.75pt"></td>
    <td width="24%" style="width:24.16%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">JABATAN <o:p></o:p></span></p>
    </td>
    <td width="54%" style="width:54.98%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><?php echo $row['jabatan']; ?> <o:p></o:p></span></p>
    </td> 
 </tr>
 <tr style="mso-yfti-irow:4;mso-yfti-lastrow:yes;height:3.75pt">
    <td width="17%" colspan="2" style="width:17.08%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><b><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">UNTUK:</span></b><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p></o:p></span></p>
    </td>
    <td width="3%" style="width:3.72%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="79%" colspan="3" style="width:79.2%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><?php echo $row['keterangan']; ?> <o:p></o:p></span></p>
    </td>
 </tr>
 <!--[if !supportMisalignedColumns]-->
 <tr height="0">
  <td width="122" style="border:none"></td>
  <td width="1" style="border:none"></td>
  <td width="27" style="border:none"></td>
  <td width="1" style="border:none"></td>
  <td width="174" style="border:none"></td>
  <td width="397" style="border:none"></td>
 </tr>
 <!--[endif]-->
</tbody>
</table>

<p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;display:none;
mso-hide:all"><o:p>&nbsp;</o:p></span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="96%" style="width:96.66%;margin-left:7.5pt;border-collapse:collapse;mso-yfti-tbllook:1184">
<tbody>
<tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt">
    <td width="16%" style="width:16.96%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt"></td>
    <td width="3%" style="width:3.88%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
    3.75pt"></td>
    <td width="79%" colspan="2" style="width:79.16%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
    height:3.75pt">
    <p class="MsoNormal" style="text-align:justify;mso-line-height-alt:3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Demikian Surat
    Perintah ini dibuat untuk dilaksanakan dengan penuh tanggung jawab. <o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt">
    <td width="41%" colspan="3" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt"></td>
    <td width="58%" colspan="2" style="width:58.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
    height:3.75pt">
    <p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
    11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Dikeluarkan Di Surabaya <o:p></o:p></span></p>
    </td>
</tr>
<tr style="mso-yfti-irow:2;mso-yfti-lastrow:yes;height:3.75pt">
    <td width="41%" colspan="3" style="width:41.94%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
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
  <td width="122" style="border:none"></td>
  <td width="28" style="border:none"></td>
  <td width="152" style="border:none"></td>
  <td width="420" style="border:none"></td>
  <td width="0" style="border:none"></td>
 </tr>
 <!--[endif]-->
</tbody>
</table>

<p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;display:none;
mso-hide:all"><o:p>&nbsp;</o:p></span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="99%" style="width:99.28%;margin-left:3.0pt;border-collapse:collapse;mso-yfti-tbllook:1184">
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
    3.75pt"><span style="font-size:11.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Nip.
    196108251989031005<o:p></o:p></span></p>
    </td>
</tr>
</tbody></table>

<p class="MsoNormal"><o:p>&nbsp;</o:p></p>
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
       fileDownload.download = 'Surat Perintah Dinas <?php echo $row['nama']; ?>.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
       // window.print();
    }
</script>