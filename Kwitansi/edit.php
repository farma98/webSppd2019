
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT * FROM kwitansi WHERE no_bukti = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
?>

<form role="form" id="form-edit-kwi" method="post" action="update.php">
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">No. Surat <span class="text-red"></span></label>         
			<div class="col-sm-4">
				<input class="form-control" name="no_bukti" id="no_bukti" value="<?php echo $row['no_bukti']; ?>" autocomplete="off" readonly>  
			</div>
			<label class="col-sm-2 control-label text-right">Tanggal Bukti <span class="text-red">*</span></label>
			<div class="col-sm-4">
				<input type="date" class="form-control" name="tgl_bukti" id="tgl_bukti" value="<?php echo $row['tgl_bukti']; ?>" autocomplete="off">  		
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_tgl"></p>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Uang Harian <span class="text-red"></span></label>
			<div class="col-sm-4">
				<input type="number" class="form-control" name="uang_harian" id="uang_harian" value="<?php echo $row['uang_harian']; ?>" onchange="hitungBayar1();" onclick="hitungBayar1();" onkeyup="hitungBayar1();" min="0" autocomplete="off" readonly>  
			</div>
			<label class="col-sm-2 control-label text-right">Biaya Transport <span class="text-red"></span></label>
			<div class="col-sm-4">
				<input type="number" class="form-control" name="biaya_transport" id="biaya_transport" value="<?php echo $row['biaya_transport']; ?>" onchange="hitungBayar1();" onclick="hitungBayar1();" onkeyup="hitungBayar1();" min="0"autocomplete="off">  
			</div>			
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Biaya Penginapan <span class="text-red"></span></label>
			<div class="col-sm-4">
				<input type="number" class="form-control" name="uang_penginapan" id="uang_penginapan" value="<?php echo $row['biaya_penginapan']; ?>" onchange="hitungBayar1();" onclick="hitungBayar1();" onkeyup="hitungBayar1();" min="0" autocomplete="off">  
			</div>
			<label class="col-sm-2 control-label text-right">Sewa Kendaraan <span class="text-red"></span></label>
			<div class="col-sm-4">
				<input type="number" class="form-control" name="sewa" id="sewa" value="<?php echo $row['sewa_kendaraan']; ?>" onchange="hitungBayar1();" onclick="hitungBayar1();" onkeyup="hitungBayar1();" min="0" autocomplete="off">  
			</div>			
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Jumlah Dibayarkan <span class="text-red"></span></label>
			<div class="col-sm-4">
				<input type="number" class="form-control" name="jml_bayar" id="jml_bayar" value="<?php echo $row['jumlah_bayar']; ?>" min="0" autocomplete="off" readonly>  
			</div>
			<label class="col-sm-2 control-label text-right">Durasi Menginap <span class="text-red"></span></label>
			<div class="col-sm-1">
				<input type="number" class="form-control" name="durasi" id="durasi" value="<?php echo $row['durasi']; ?>" onchange="hitungBayar1();" onclick="hitungBayar1();" onkeyup="hitungBayar1();" min="0" autocomplete="off">  
			</div>			
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Nama Penginapan <span class="text-red"></span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="nama_penginapan" id="nama_penginapan" value="<?php echo $row['nama_penginapan']; ?>" autocomplete="off">  
			</div>
		</div>
	</div>
</form>