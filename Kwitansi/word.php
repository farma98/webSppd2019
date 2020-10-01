<?php
// Koneksi
ob_start();
include "../koneksidb.php";
$query = "SELECT * FROM kwitansi WHERE no_bukti = '$_GET[id]'";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($hasil);
?>

<div id="source-html">
<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="97%" style="width:97.94%;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:
0cm 5.4pt 0cm 5.4pt">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt;mso-row-margin-right:
5.5pt">
<td width="22%" rowspan="5" style="width:22.42%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal"><span style="mso-no-proof:yes"><img width="100" height="136" src="file:///C:/Users/SAMSUN~1/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg" alt="Dispora" v:shapes="Picture_x0020_2"><!--[endif]--></span></p>
</td>
<td width="77%" colspan="2" style="width:77.58%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
3.75pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:16.0pt;
font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">PEMERINTAH PROVINSI
JAWA TIMUR<o:p></o:p></span></b></p>
</td>
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt;mso-row-margin-right:5.5pt">
<td width="77%" colspan="2" style="width:77.58%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
3.75pt"><b style="mso-bidi-font-weight:normal"><span style="font-size:14.0pt;
font-family:&quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">DINAS KEPEMUDAAN
DAN OLAHRAGA<o:p></o:p></span></b></p>
</td>
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:2;height:3.75pt;mso-row-margin-right:5.5pt">
<td width="77%" colspan="2" style="width:77.58%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
3.75pt"><span style="font-size:11.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;
mso-bidi-font-family:Times">Jl. Kayon No. 56 Telp. ( 031 ) 5345507 Fax. (
031) 5345508<o:p></o:p></span></p>
</td>
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:3;height:3.75pt;mso-row-margin-right:5.5pt">
<td width="77%" colspan="2" style="width:77.58%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
3.75pt"><span style="font-size:10.0pt;font-family:&quot;Cambria&quot;,&quot;serif&quot;;
mso-bidi-font-family:Times">E-mail : dispora@jatimprov.go.id http :
//dispora.jatimprov.go.id<o:p></o:p></span></p>
</td>
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:4;height:3.75pt;mso-row-margin-right:5.5pt">
<td width="77%" colspan="2" style="width:77.58%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
3.75pt"><b style="mso-bidi-font-weight:normal"><u><span style="font-family:
&quot;Cambria&quot;,&quot;serif&quot;;mso-bidi-font-family:Times">SURABAYA - 60271<o:p></o:p></span></u></b></p>
</td>
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="7"><p class="MsoNormal">&nbsp;</p></td>
</tr>
<tr style="mso-yfti-irow:5;height:3.75pt;mso-row-margin-left:4.5pt">
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="6"><p class="MsoNormal">&nbsp;</p></td>
<td width="50%" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt"></td>
<td width="50%" colspan="2" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
10.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;">LAMPIRAN II <o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:6;height:3.75pt;mso-row-margin-left:4.5pt">
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="6"><p class="MsoNormal">&nbsp;</p></td>
<td width="50%" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt"></td>
<td width="50%" colspan="2" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
10.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;">PERATURAN GUBERNUR JAWA
TIMUR <o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:7;height:3.75pt;mso-row-margin-left:4.5pt">
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="6"><p class="MsoNormal">&nbsp;</p></td>
<td width="50%" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt"></td>
<td width="50%" colspan="2" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
10.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;">NOMOR : <o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:8;height:3.75pt;mso-row-margin-left:4.5pt">
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="6"><p class="MsoNormal">&nbsp;</p></td>
<td width="50%" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt"></td>
<td width="50%" colspan="2" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="font-size:
10.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;">TENTANG <o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:9;mso-yfti-lastrow:yes;height:3.75pt;mso-row-margin-left:
4.5pt">
<td style="mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm" width="6"><p class="MsoNormal">&nbsp;</p></td>
<td width="50%" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt"></td>
<td width="50%" colspan="2" style="width:50.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:3.75pt">
<p class="MsoNormal" style="text-align:justify;mso-line-height-alt:3.75pt"><span style="font-size:10.0pt;mso-fareast-font-family:&quot;Times New Roman&quot;">PERJALANAN
DINAS BAGI GUBERNUR/ WAKIL GUBERNUR, PIMPINAN DAN ANGGOTA DEWAN PERWAKILAN
RAKYAT DAERAH, PEGAWAI NEGERI DAN PEGAWAI TIDAK TETAP <o:p></o:p></span></p>
</td>
</tr>
<!--[if !supportMisalignedColumns]-->
<tr height="0">
<td width="150" style="border:none"></td>
<td width="352" style="border:none"></td>
<td width="188" style="border:none"></td>
<td width="42" style="border:none"></td>
</tr>
<!--[endif]-->
</tbody></table>

<p class="MsoNormal" align="center" style="text-align:center"><u><span style="font-family:&quot;Times&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;"><o:p><span style="text-decoration:none">&nbsp;</span></o:p></span></u></p>

<p class="MsoNormal" align="center" style="text-align:center"><u><span style="font-family:&quot;Times&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;">RINCIAN
BIAYA PERJALANAN DINAS<o:p></o:p></span></u></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="96%" style="width:96.4%;margin-left:7.5pt;border-collapse:collapse;mso-yfti-tbllook:
1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.75pt">
<td width="6%" style="width:6.34%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">No<o:p></o:p></span></p>
</td>
<td width="40%" style="width:40.56%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
3.75pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">PERINCIAN
BIAYA<o:p></o:p></span></p>
</td>
<td width="14%" colspan="2" style="width:14.64%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
3.75pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Jumlah<o:p></o:p></span></p>
</td>
<td width="38%" style="width:38.44%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
3.75pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Keterangan<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:3.75pt">
<td width="6%" style="width:6.34%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">1<o:p></o:p></span></p>
</td>
<td width="40%" style="width:40.56%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">Uang Harian ( <?php echo $row['durasi'];?> hari x Rp. <?php echo $row['uang_harian'];?> )<o:p></o:p></span></p>
</td>
<td width="14%" colspan="2" style="width:14.64%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">( Rp. <?php echo $row['uang_harian'];?> )<o:p></o:p></span></p>
</td>
<td width="38%" rowspan="4" style="width:38.44%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt"></td>
</tr>
<tr style="mso-yfti-irow:2;height:3.75pt">
<td width="6%" style="width:6.34%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">2<o:p></o:p></span></p>
</td>
<td width="40%" style="width:40.56%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">Biaya Penginapan ( <?php echo $row['durasi'];?> hari x Rp. <?php echo $row['biaya_penginapan'];?> )<o:p></o:p></span></p>
</td>
<td width="14%" colspan="2" style="width:14.64%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">( Rp. <?php echo $row['biaya_penginapan'];?> )<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;height:3.75pt">
<td width="6%" style="width:6.34%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">3<o:p></o:p></span></p>
</td>
<td width="40%" style="width:40.56%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">Biaya BBM dan Tol<o:p></o:p></span></p>
</td>
<td width="14%" colspan="2" style="width:14.64%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt"></td>
</tr>
<tr style="mso-yfti-irow:4;height:3.75pt">
<td width="6%" style="width:6.34%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
3.75pt"></td>
<td width="40%" style="width:40.56%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
3.75pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Jumlah<o:p></o:p></span></p>
</td>
<td width="14%" colspan="2" style="width:14.64%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">( Rp. <?php echo $row['jumlah_bayar'];?> )</td>
</tr>
<tr style="mso-yfti-irow:5;height:3.75pt">
<td width="6%" style="width:6.34%;padding:4.5pt 7.5pt 4.5pt 7.5pt;height:
3.75pt"></td>
<td width="93%" colspan="4" style="width:93.66%;padding:4.5pt 7.5pt 4.5pt 7.5pt;
height:3.75pt">
<p class="MsoNormal" style="mso-line-height-alt:3.75pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">Terbilang : <o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:6;height:7.5pt">
<td width="50%" colspan="3" style="width:50.26%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="49%" colspan="2" style="width:49.74%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" style="mso-line-height-alt:7.5pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">Dikeluarkan Di Surabaya <o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:7;mso-yfti-lastrow:yes;height:7.5pt">
<td width="50%" colspan="3" style="width:50.26%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="49%" colspan="2" style="width:49.74%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" style="mso-line-height-alt:7.5pt"><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;">pada tanggal
................................................................. <o:p></o:p></span></p>
</td>
</tr>
<!--[if !supportMisalignedColumns]-->
<tr height="0">
<td width="46" style="border:none"></td>
<td width="292" style="border:none"></td>
<td width="24" style="border:none"></td>
<td width="81" style="border:none"></td>
<td width="277" style="border:none"></td>
</tr>
<!--[endif]-->
</tbody></table>

<p class="MsoNormal"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;;
display:none;mso-hide:all"><o:p>&nbsp;</o:p></span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="98%" style="width:98.0%;margin-left:3.0pt;border-collapse:collapse;mso-yfti-tbllook:
1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:7.5pt">
<td width="48%" style="width:48.26%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Telah Dibayar
Sejumlah<o:p></o:p></span></p>
</td>
<td width="51%" style="width:51.74%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Tekah menerima jumlah uang uang<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:7.5pt">
<td width="48%" style="width:48.26%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Rp. <?php echo $row['jumlah_bayar'];?><o:p></o:p></span></p>
</td>
<td width="51%" style="width:51.74%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Rp. <?php echo $row['jumlah_bayar'];?><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:2;height:7.5pt">
<td width="48%" style="width:48.26%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Bendahara
Pengeluaran<o:p></o:p></span></p>
</td>
<td width="51%" style="width:51.74%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Yang Menerima<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:3;height:53.7pt">
<td width="48%" style="width:48.26%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:53.7pt"></td>
<td width="51%" style="width:51.74%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:53.7pt"></td>
</tr>
<tr style="mso-yfti-irow:4;height:7.5pt">
<td width="48%" style="width:48.26%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><b><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Drs.SUPRATOMO,
M.Si</span></b><span style="mso-fareast-font-family:&quot;Times New Roman&quot;"><o:p></o:p></span></p>
</td>
<td width="51%" style="width:51.74%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><b><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Drs.SUPRATOMO,
M.Si</span></b><span style="mso-fareast-font-family:&quot;Times New Roman&quot;"><o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:5;mso-yfti-lastrow:yes;height:7.5pt">
<td width="48%" style="width:48.26%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Nip.
196108251989031005<o:p></o:p></span></p>
</td>
<td width="51%" style="width:51.74%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Nip.
196108251989031005<o:p></o:p></span></p>
</td>
</tr>
</tbody></table>

<div class="MsoNormal" align="center" style="text-align:center"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">

<hr size="2" width="100%" align="center">

</span></div>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="98%" style="width:98.22%;margin-left:3.0pt;border-collapse:collapse;mso-yfti-tbllook:
1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt">
<tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:7.5pt">
<td width="100%" colspan="5" style="width:100.0%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">PERHITUNGAN
SPPD RAMPUNG<o:p></o:p></span></p>
</td>
</tr>
<tr style="mso-yfti-irow:1;height:7.5pt">
<td width="29%" colspan="2" style="width:29.9%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Ditetapkan
Sejumlah<o:p></o:p></span></p>
</td>
<td width="30%" style="width:30.56%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">Rp. <?php echo $row['jumlah_bayar'];?></td>
<td width="39%" colspan="2" style="width:39.54%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:2;height:7.5pt">
<td width="29%" colspan="2" style="width:29.9%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Yang Telah
Dibayar Semula<o:p></o:p></span></p>
</td>
<td width="30%" style="width:30.56%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">-</td>
<td width="39%" colspan="2" style="width:39.54%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:3;height:7.5pt">
<td width="29%" colspan="2" style="width:29.9%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Sisa Kurang /
Lebih<o:p></o:p></span></p>
</td>
<td width="30%" style="width:30.56%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">Rp. <?php echo $row['jumlah_bayar'];?></td>
<td width="39%" colspan="2" style="width:39.54%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:4;height:7.5pt">
<td width="19%" style="width:19.24%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="61%" colspan="3" style="width:61.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Kuasa Pengguna
Anggaran<o:p></o:p></span></p>
</td>
<td width="19%" style="width:19.7%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:5;height:7.5pt">
<td width="19%" style="width:19.24%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="61%" colspan="3" rowspan="5" style="width:61.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="19%" style="width:19.7%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:6;height:7.5pt">
<td width="19%" style="width:19.24%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="19%" style="width:19.7%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:7;height:7.5pt">
<td width="19%" style="width:19.24%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="19%" style="width:19.7%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:8;height:7.5pt">
<td width="19%" style="width:19.24%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="19%" style="width:19.7%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:9;height:7.5pt">
<td width="19%" style="width:19.24%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="19%" style="width:19.7%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:10;height:7.5pt">
<td width="19%" style="width:19.24%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="61%" colspan="3" style="width:61.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><b><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Drs.SUPRATOMO,
M.Si</span></b><span style="mso-fareast-font-family:&quot;Times New Roman&quot;"><o:p></o:p></span></p>
</td>
<td width="19%" style="width:19.7%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:11;height:7.5pt">
<td width="19%" style="width:19.24%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="61%" colspan="3" style="width:61.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Pembina Utama
Muda<o:p></o:p></span></p>
</td>
<td width="19%" style="width:19.7%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<tr style="mso-yfti-irow:12;mso-yfti-lastrow:yes;height:7.5pt">
<td width="19%" style="width:19.24%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
<td width="61%" colspan="3" style="width:61.06%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt">
<p class="MsoNormal" align="center" style="text-align:center;mso-line-height-alt:
7.5pt"><span style="mso-fareast-font-family:&quot;Times New Roman&quot;">Nip.
196108251989031005<o:p></o:p></span></p>
</td>
<td width="19%" style="width:19.7%;padding:1.5pt 3.0pt 1.5pt 3.0pt;
height:7.5pt"></td>
</tr>
<!--[if !supportMisalignedColumns]-->
<tr height="0">
<td width="141" style="border:none"></td>
<td width="78" style="border:none"></td>
<td width="225" style="border:none"></td>
<td width="146" style="border:none"></td>
<td width="145" style="border:none"></td>
</tr>
<!--[endif]-->
</tbody></table>

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
fileDownload.download = 'Rincian Perjalanan Dinas <?php echo $row['no_bukti']; ?>.doc';
fileDownload.click();
document.body.removeChild(fileDownload);
// window.print();
}
</script>