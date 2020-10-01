
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT p.nip, p.nama, g.golongan, g.pangkat, j.kode_jabatan, j.nama_jabatan, b.kode_bidang, b.nama_bidang FROM Pegawaii P JOIN Golongan G ON p.golongan = g.golongan JOIN Jabatan J ON p.kode_jabatan = j.kode_jabatan JOIN Bidang1 b ON p.kode_bidang = b.kode_bidang AND P.nip = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_array($hasil);
	$gol = $row['golongan'];
	$jab = $row['kode_jabatan'];
	$bid = $row['kode_bidang'];
?>

<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<div class="row">
		<label class="col-sm-3 control-label text-right">NIP <span class="text-red">*</span></label>         
		<div class="col-sm-8"><input class="form-control" name="nip" id="nip" readonly="" value="<?php echo $row['nip']; ?>" autocomplete="off">  
		</div> 
		</div>
	</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-12">
			<p style="color:red;text-align: center;" id="error_edit_nip"></p>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<label class="col-sm-3 control-label text-right">Nama Pegawai <span class="text-red">*</span></label>
		<div class="col-sm-8"><input class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>" autocomplete="off">  		
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
<div class="form-group">
	<div class="row">
	<label class="col-sm-3 control-label text-right">Golongan <span class="text-red">*</span></label>
	<div class="col-sm-8">
		<select class="form-control" name="golongan" id="golongan" value="<?php echo $row['golongan']; ?>">  
	    <?php
	        $sql = mysqli_query($koneksi, "SELECT * From Golongan");
	        while ($row = mysqli_fetch_array($sql)){
	        $golongan = $row['golongan'];
	        $pangkat = $row['pangkat'];

	        if ($gol == $golongan) {
	        	$cek = "selected";
	        }else{
	        	$cek = "";
	        }
	        echo"<option value='$golongan' $cek>$pangkat</option>";
	        }
	    ?>
		</select>  		
	</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
	<label class="col-sm-3 control-label text-right">Nama Jabatan <span class="text-red">*</span></label>
	<div class="col-sm-8">
		<select class="form-control" name="kode_jabatan" id="kode_jabatan" value="<?php echo $row['kode_jabatan']; ?>">  
	    <?php
	        $sql = mysqli_query($koneksi, "SELECT * From Jabatan");
	        while ($row = mysqli_fetch_array($sql)){
	        $kode_jabatan = $row['kode_jabatan'];
	        $nama_jabatan = $row['nama_jabatan'];

	        if ($jab == $kode_jabatan) {
	        	$cek = "selected";
	        }else{
	        	$cek = "";
	        }
	        echo"<option value='$kode_jabatan' $cek>$nama_jabatan</option>";
	        }
	    ?>
		</select>  		
	</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
	<label class="col-sm-3 control-label text-right">Nama Bidang <span class="text-red">*</span></label>
	<div class="col-sm-8">
		<select class="form-control" name="kode_bidang" id="kode_bidang" value="<?php echo $row['kode_bidang']; ?>">  
	    <?php
	        $sql = mysqli_query($koneksi, "SELECT * From Bidang1");
	        while ($row = mysqli_fetch_array($sql)){
	        $kode_bidang = $row['kode_bidang'];
	        $nama_bidang = $row['nama_bidang'];

	        if ($bid == $kode_bidang) {
	        	$cek = "selected";
	        }else{
	        	$cek = "";
	        }
	        echo"<option value='$kode_bidang' $cek>$nama_bidang</option>";
	        }
	    ?>
		</select>  		
	</div>
	</div>
</div>
	
</form>