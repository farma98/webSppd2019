
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT * FROM jenis_transportasi WHERE kode_transportasi = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
?>

<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<div class="row">
		<label class="col-sm-3 control-label text-right">Kode Transportasi <span class="text-red">*</span></label>         
		<div class="col-sm-8"><input class="form-control" name="kode_transportasi" id="kode_transportasi" readonly="" value="<?php echo $row['kode_transportasi']; ?>" autocomplete="off">  
		</div> 
		</div>
	</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-12">
			<p style="color:red;text-align: center;" id="error_edit_kode"></p>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<label class="col-sm-3 control-label text-right">Jenis Transportasi <span class="text-red">*</span></label>
		<div class="col-sm-8"><input class="form-control" name="jenis_transportasi" id="jenis_transportasi" value="<?php echo $row['jenis_transportasi']; ?>" autocomplete="off">  		
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-12">
			<p style="color:red;text-align: center;" id="error_edit_jenis"></p>
		</div>
	</div>
</div>
	
</form>