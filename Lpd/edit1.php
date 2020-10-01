
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT t.no_surat, a.nama_kendaraan, t.no_tiket, t.no_penerbangan, t.no_kursi a.harga_tiket FROM akomodasi a join transportasi t on a.no_tiket = t.no_tiket WHERE no_tiket = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
	
	$nosurat = $row['no_surat'];
	$transportasi = $row['nama_kendaraan'];
	$notiket = $row['no_tiket'];
	$no_terbang = $row['no_penerbangan'];
	$nokursi = $row['no_kursi'];
	$harga = $row['harga_tiket'];
?>

<form role="form" id="form-edit-tra" method="post" action="update1.php">								
	<!--Data Transportasi Berangkat-->
	<div style="font-size: 20px;margin-bottom: 20px;">Data Transportasi (Berangkat)</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-center">No. Surat <span class="text-red"></span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="nosurat1" id="nosurat1" value="<?php echo $row['no_surat'];?>"></input>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-center">Jenis Transportasi <span class="text-red">*</span></label>
			<div class="col-sm-4">
				<select class="form-control" name="jenis_transportasi" id="jenis_transportasi">
					<option>Pilih Transportasi </option>    
					<?php
						$sql = mysqli_query($koneksi, "SELECT * From jenis_transportasi");
						$row = mysqli_num_rows($sql);
						while ($row = mysqli_fetch_array($sql)){
						echo "<option value='". $row['kode_transportasi'] ."'>" .$row['jenis_transportasi'] ."</option>";  
						}
					?>
				</select>		
			</div>
			<label class="col-sm-2 control-label text-center">Nama Transportasi <span class="text-red">*</span></label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="nama_transportasi" id="nama_transportasi" value="<?php echo $transportasi;?>" autocomplete="off" placeholder="Nama Transportasi">  		
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-center">No. Tiket <span class="text-red">*</span></label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="no_tiket" id="no_tiket" value="<?php echo $notiket; ?>" autocomplete="off" readonly>  		
			</div>
			<label class="col-sm-2 control-label text-center">No Penerbangan <span class="text-red"></span></label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="no_penerbangan" id="no_penerbangan" value="<?php echo $no_terbang; ?>" autocomplete="off">  		
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-center">No. Kursi <span class="text-red"></span></label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="no_kursi" id="no_kursi" value="<?php echo $nokursi; ?>" autocomplete="off">  		
			</div>
			<label class="col-sm-2 control-label text-center">Harga Tiket <span class="text-red">*</span></label>
			<div class="col-sm-4">
				<input type="number" class="form-control" name="harga_tiket" id="harga_tiket" value="<?php echo $harga_tiket; ?>" autocomplete="off">  		
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-sm-2 control-label text-center">Tujuan <span class="text-red">*</span></label>
			<div class="col-sm-4">
				<select class="form-control" name="tujuan" id="tujuan">
					<option selected></option>
					<?php
						$sql = mysqli_query($koneksi, "SELECT * From daerah");
						$row = mysqli_num_rows($sql);
						while ($row = mysqli_fetch_array($sql)){
						echo "<option value='". $row['kode_daerah'] ."'>" .$row['nama_daerah'] ."</option>";  
						}
					?>
				</select>
			</div>
		</div>
	</div><!--End Data Transportasi Berangkat-->
</form>