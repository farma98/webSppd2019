
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT * FROM sppd WHERE no_surat = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
?>

<form role="form" id="form-detil-lpd" method="post">
	<div class="form-group">
		<div class="row">
		<label class="col-sm-2 control-label text-right">No. Surat <span class="text-red">&nbsp;:</span></label>         
		<?php echo $row['no_surat']; ?>
		</div> 
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Tanggal Pelaksanaan <span class="text-red"></span></label>
			<div class="col-sm-4"><input type="date" class="form-control" name="tgl" id="tgl" value="<?php echo $row['tgl_pelaksanaan']; ?>" autocomplete="off">  		
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Instansi Tujuan <span class="text-red"></span></label>
			<div class="col-sm-6"><input class="form-control" name="tujuan" id="tujuan" value="<?php echo $row['instansi_tujuan']; ?>" autocomplete="off">  		
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Arahan yang Diberikan<span class="text-red"></span></label>
			<div class="col-sm-10">
				<textarea name="arahan" id="arahan" style="width: 100%;height: 75px;" value="<?php echo $row['arahan']; ?>"></textarea>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Masalah/Temuan<span class="text-red"></span></label>
			<div class="col-sm-10">
				<textarea name="masalah" id="masalah" style="width: 100%;height: 75px;" value="<?php echo $row['masalah']; ?>"></textarea>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Saran/Tindakan <span class="text-red"></span></label>
			<div class="col-sm-10">
				<textarea name="saran" id="saran" style="width: 100%;height: 75px;" value="<?php echo $row['saran']; ?>"></textarea>
			</div>
		</div>
	</div>
</form>