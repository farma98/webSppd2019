
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT * FROM sppd WHERE no_surat = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
?>

<form role="form" id="form-edit-lpd" method="post" action="update.php">
	<div class="form-group">
		<div class="row">
		<label class="col-sm-2 control-label text-right">No. Surat <span class="text-red"></span></label>         
		<div class="col-sm-4"><input class="form-control" name="nosurat" id="nosurat" value="<?php echo $row['no_surat']; ?>" autocomplete="off" readonly>  
		</div> 
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_no_surat"></p>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Tanggal Pelaksanaan <span class="text-red"></span></label>
			<div class="col-sm-4"><input type="text" class="form-control" name="tgl" id="tgl" value="<?php echo $row['tgl_berangkat']; ?>" readonly>  		
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
			<label class="col-sm-2 control-label text-right">Instansi Tujuan <span class="text-red"></span></label>
			<div class="col-sm-6"><input class="form-control" name="tujuan" id="tujuan" value="<?php echo $row['instansi_tujuan']; ?>" autocomplete="off">  		
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_tujuan"></p>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Arahan yang Diberikan<span class="text-red"></span></label>
			<div class="col-sm-10">
				<textarea name="arahan" id="arahan" style="width: 100%;height: 75px;resize:none;" value=""><?php echo $row['arahan']; ?></textarea>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_arahan"></p>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Masalah/Temuan<span class="text-red"></span></label>
			<div class="col-sm-10">
				<textarea name="masalah" id="masalah" style="width: 100%;height: 75px;resize:none;" value=""><?php echo $row['masalah']; ?></textarea>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_masalah"></p>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-right">Saran/Tindakan <span class="text-red"></span></label>
			<div class="col-sm-10">
				<textarea name="saran" id="saran" style="width: 100%;height: 75px;resize:none;" value=""><?php echo $row['saran']; ?></textarea>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_saran"></p>
			</div>
		</div>
	</div>
</form>