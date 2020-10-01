
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT * FROM uang_harian WHERE kuh = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
?>

<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<div class="row">
		<label class="col-sm-3 control-label text-right">KUH <span class="text-red">*</span></label>         
		<div class="col-sm-8"><input class="form-control" name="kuh" id="kuh" readonly="" value="<?php echo $row['kuh']; ?>" autocomplete="off">  
		</div> 
		</div>
	</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-12">
			<p style="color:red;text-align: center;" id="error_edit_kuh"></p>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<label class="col-sm-3 control-label text-right">Pejabat <span class="text-red">*</span></label>
		<div class="col-sm-8"><input class="form-control" name="pejabat" id="pejabat" value="<?php echo $row['pejabat']; ?>" autocomplete="off">  		
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-12">
			<p style="color:red;text-align: center;" id="error_edit_pejabat"></p>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<label class="col-sm-3 control-label text-right">Uang Harian <span class="text-red">*</span></label>
		<div class="col-sm-8"><input class="form-control" name="uang" id="uang" value="<?php echo $row['uang_harian']; ?>" autocomplete="off">  		
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-12">
			<p style="color:red;text-align: center;" id="error_edit_uang"></p>
		</div>
	</div>
</div>
	
</form>