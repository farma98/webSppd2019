
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT * FROM daerah WHERE kode_daerah = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
?>

<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<div class="row">
		<label class="col-sm-3 control-label text-right">Kode Kota <span class="text-red">*</span></label>         
		<div class="col-sm-8"><input class="form-control" name="kode_daerah" id="kode_daerah" readonly="" value="<?php echo $row['kode_daerah']; ?>" autocomplete="off">  
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
		<label class="col-sm-3 control-label text-right">Nama Kota <span class="text-red">*</span></label>
		<div class="col-sm-8"><input class="form-control" name="nama_daerah" id="nama_daerah" value="<?php echo $row['nama_daerah']; ?>" autocomplete="off">  		
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-12">
			<p style="color:red;text-align: center;" id="error_edit_nama"></p>
		</div>
	</div>
</div>
	
</form>