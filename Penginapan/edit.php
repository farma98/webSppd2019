
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT p.kode_penginapan, d.kode_daerah, d.nama_daerah, p.eselon_3, p.eselon_4, p.golongan_12 FROM Penginapan P JOIN Daerah D ON P.kode_daerah = D.kode_daerah AND P.kode_penginapan = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
	$kode = $row['kode_daerah'];
?>

<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<div class="row">
		<label class="col-sm-3 control-label text-right">Kode Penginapan <span class="text-red">*</span></label>         
		<div class="col-sm-8"><input class="form-control" name="kode_penginapan" id="kode_penginapan" readonly="" value="<?php echo $row['kode_penginapan']; ?>" autocomplete="off">  
		</div> 
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_kodepenginapan"></p>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
		<label class="col-sm-3 control-label text-right">Eselon 3 <span class="text-red">*</span></label>         
		<div class="col-sm-8"><input class="form-control" name="eselon3" id="eselon3" value="<?php echo $row['eselon_3']; ?>" autocomplete="off">  
		</div> 
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_eselon3"></p>
			</div>
		</div>
	</div>
	<div class="form-group">
			<div class="row">
			<label class="col-sm-3 control-label text-right">Eselon 4 <span class="text-red">*</span></label>         
			<div class="col-sm-8"><input class="form-control" name="eselon4" id="eselon4" value="<?php echo $row['eselon_4']; ?>" autocomplete="off">  
			</div> 
			</div>
		</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_eselon4"></p>
			</div>
		</div>
	</div>
	<div class="form-group">
			<div class="row">
			<label class="col-sm-3 control-label text-right">Golongan 12 <span class="text-red">*</span></label>         
			<div class="col-sm-8"><input class="form-control" name="golongan12" id="golongan12" value="<?php echo $row['golongan_12']; ?>" autocomplete="off">  
			</div> 
			</div>
		</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_golongan12"></p>
			</div>
		</div>
	</div>
	<div class="form-group">
	  <div class="row">
	  <label class="col-sm-3 control-label text-right">Nama Kota <span class="text-red">*</span></label>
	  <div class="col-sm-8">
	  	<select class="form-control" name="kode_daerah" id="kode_daerah" value="<?php echo $row['kode_daerah']; ?>">  
	        <?php
	            $sql = mysqli_query($koneksi, "SELECT * From Daerah");
	            while ($row = mysqli_fetch_array($sql)){
	            $kodedaerah = $row['kode_daerah'];
	            $namadaerah = $row['nama_daerah'];

	            if ($kode == $kodedaerah) {
	            	$cek = "selected";
	            }else{
	            	$cek = "";
	            }
	            echo"<option value='$kodedaerah' $cek>$namadaerah</option>";
	            }
	        ?>
	  	</select>  		
	  </div>
	  </div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<p style="color:red;text-align: center;" id="error_edit_kodedaerah"></p>
			</div>
		</div>
	</div>
	
</form>