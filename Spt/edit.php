
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT * FROM spt WHERE kode = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
	$kode = $row['kode'];
?>

<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
      <div class="row">
          <label class="col-sm-2 control-label text-center">NIP <span class="text-red">*</span></label>
          <div class="col-sm-10"><input type="text" class="form-control" name="nama" id="nama"  value="<?php echo $row['nama']; ?>" autocomplete="off" readonly="">      
          </div>
      </div>
    </div>
    <div class="form-group">
  		<div class="row">
      	<div class="col-sm-12">
      		<p style="color:red;text-align: center;" id="error_nama"></p>
      	</div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
          <label class="col-sm-2 control-label text-center">NIP <span class="text-red">*</span></label>
          <div class="col-sm-10"><input type="text" class="form-control" name="nipQ" id="nipQ"  value="<?php echo $row['nip']; ?>" autocomplete="off" readonly="">  		
          </div>
      </div>
    </div>
    <div class="form-group">
  		<div class="row">
      	<div class="col-sm-12">
      		<p style="color:red;text-align: center;" id="error_nipQ"></p>
      	</div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
          <label class="col-sm-2 control-label text-center">Jabatan <span class="text-red">*</span></label>
          <div class="col-sm-4"><input type="text" class="form-control" name="jabatanQ" id="jabatanQ"  value="<?php echo $row['jabatan']; ?>" autocomplete="off" readonly="">  		
          </div>
          <label class="col-sm-2 control-label text-center">Pangkat <span class="text-red">*</span></label>
          <div class="col-sm-4"><input type="text" class="form-control" name="pangkatQ" id="pangkatQ"  value="<?php echo $row['pangkat']; ?>" autocomplete="off" readonly="">  		
          </div>
      </div>
    </div>
    <div class="form-group">
  		<div class="row">
      	<div class="col-sm-6">
      		<p style="color:red;text-align: center;" id="error_jabatanQ"></p>
      	</div>
      	<div class="col-sm-6">
      		<p style="color:red;text-align: center;" id="error_pangkatQ"></p>
      	</div>
      </div>
    </div>
     <div class="form-group">
      <div class="row">
          <label class="col-sm-2 control-label text-right">Dalam Rangka <span class="text-red">*</span></label>
          <div class="col-sm-10">
          	<textarea id="keterangan" name="keterangan" style="width: 100%;height: 75px;resize: none;">
          		<?php echo $row['keterangan']; ?>
          	</textarea> 		
          </div>
      </div>
    </div>
    <div class="form-group">
  		<div class="row">
      	<div class="col-sm-12">
      		<p style="color:red;text-align: center;" id="error_keterangan"></p>
      	</div>
      </div>
    </div>
</form>