
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT s.no_surat, s.nip, d.kode_daerah, d.nama_daerah, s.nama, s.kode_jabatan, s.rangka, s.tgl_berangkat, s.tgl_kembali FROM sppd s JOIN daerah d on s.kode_daerah = d.kode_daerah AND s.no_surat = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
  
	$drh = $row['kode_daerah'];
  $berangkat = $row['tgl_berangkat'];
  $kembali = $row['tgl_kembali'];
  $rangka = $row['rangka'];
?>

<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
       <div class="row">
          <label class="col-sm-2 control-label text-center">Nomer Surat <span class="text-red">*</span></label>
          <div class="col-sm-10"><input type="number" class="form-control" name="nomor_surat" id="nomor_surat" value="<?php echo $row['no_surat']; ?>" autocomplete="off" readonly="">	
          </div>
      </div>
    </div>
    <div class="form-group">
  		<div class="row">
      	<div class="col-sm-12">
      		<p style="color:red;text-align: center;" id="error_edit_nomor"></p>
      	</div>
      </div>
    </div>
   <div class="form-group">
       <div class="row">
          <label class="col-sm-2 control-label text-center">Nama <span class="text-red">*</span></label>
          <div class="col-sm-10"><input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>" autocomplete="off" readonly="">	
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
    		<label class="col-sm-2 control-label text-center">Nip <span class="text-red">*</span></label>
          	<div class="col-sm-4"><input type="text" class="form-control" name="nipQ" id="nipQ" value="<?php echo $row['nip']; ?>" autocomplete="off" readonly="">  		
          	</div>
    		<label class="col-sm-2 control-label text-center">Jabatan <span class="text-red">*</span></label>
          	<div class="col-sm-4"><input type="text" class="form-control" name="jabatanQ" id="jabatanQ" value="<?php echo $row['kode_jabatan']; ?>" autocomplete="off" readonly="">  		
          	</div>
    	</div>
    </div>
    <div class="form-group">
  		<div class="row">
      	<div class="col-sm-6">
      		<p style="color:red;text-align: center;" id="error_edit_nipQ"></p>
      	</div>
      	<div class="col-sm-6">
      		<p style="color:red;text-align: center;" id="error_edit_jabatanQ"></p>
      	</div>
      </div>
    </div>
   <div class="form-group">
	<div class="row">
	<label class="col-sm-2 control-label text-right">Daerah Tujuan <span class="text-red">*</span></label>
	<div class="col-sm-10">
		<select class="form-control" name="daerah" id="daerah" value="<?php echo $row['kode_daerah']; ?>">  
	    <?php
	        $sql = mysqli_query($koneksi, "SELECT * From daerah");
	        while ($row = mysqli_fetch_array($sql)){
	        $kode_daerah = $row['kode_daerah'];
	        $nama_daerah = $row['nama_daerah'];

	        if ($drh == $kode_daerah) {
	        	$cek = "selected";
	        }else{
	        	$cek = "";
	        }
	        echo"<option value='$kode_daerah' $cek>$nama_daerah</option>";
	        }
	    ?>
		</select>  		
	</div>
	</div>
</div>
     <div class="form-group">
  		<div class="row">
      	<div class="col-sm-12">
      		<p style="color:red;text-align: center;" id="error_edit_daerah"></p>
      	</div>
      </div>
    </div>
    <div class="form-group">
    	<div class="row">
          <label class="col-sm-2 control-label text-center">Tanggal Berangkat <span class="text-red">*</span></label>
          <div class="col-sm-4"><input type="date" class="form-control" name="tgl_berangkat" id="tgl_berangkat" value="<?php echo $berangkat?>" autocomplete="off">  		
          </div>
          <label class="col-sm-2 control-label text-center">Tanggal Kembali <span class="text-red">*</span></label>
          <div class="col-sm-4"><input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?php echo $kembali?>" autocomplete="off">  		
          </div>
      </div>
    </div>
    <div class="form-group">
  		<div class="row">
      	<div class="col-sm-6">
      		<p style="color:red;text-align: center;" id="error_edit_tglberangkat"></p>
      	</div>
      	<div class="col-sm-6">
      		<p style="color:red;text-align: center;" id="error_edit_tglkembali"></p>
      	</div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
          <label class="col-sm-2 control-label text-right">Dalam Rangka <span class="text-red">*</span></label>
          <div class="col-sm-10">
          	<textarea id="keterangan" name="keterangan" style="width: 100%;height: 75px;resize: none;">
          		<?php echo $rangka; ?>
          	</textarea> 		
          </div>
      </div>
    </div>
	
</form>