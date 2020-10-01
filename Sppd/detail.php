
<?php
	include "../koneksidb.php";
	$no = 1;
	$query = "SELECT s.no_surat, s.nip, d.kode_daerah, d.nama_daerah, s.nama, s.kode_jabatan, s.rangka, s.tgl_berangkat, s.tgl_kembali FROM sppd s JOIN daerah d on s.kode_daerah = d.kode_daerah AND s.no_surat = '$_POST[id]'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
	$drh = $row['kode_daerah'];
  $rgk = $row['rangka'];
?>

<form role="form" id="form-detail" method="post">
    <div class="form-group">
    	<div class="row">
    		<label class="col-sm-2 control-label text-center">Nip <span class="text-red">*</span></label>
          	<div class="col-sm-10"><input type="text" class="form-control" name="nipQ" id="nipQ" value="<?php echo $row['nip']; ?>" autocomplete="off" readonly="">  		
          	</div>
    	</div>
    </div>
     <div class="form-group">
      <div class="row">
        <label class="col-sm-2 control-label text-center">Jabatan <span class="text-red">*</span></label>
            <div class="col-sm-10"><input type="text" class="form-control" name="jabatanQ" id="jabatanQ" value="<?php echo $row['kode_jabatan']; ?>" autocomplete="off" readonly="">     
            </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
          <label class="col-sm-2 control-label text-right">Dalam Rangka <span class="text-red">*</span></label>
          <div class="col-sm-10">
          	<textarea id="keterangan" name="keterangan" style="width: 100%;height: 75px;resize: none;" readonly="">
          	<?php echo $rgk; ?>	
          	</textarea> 		
          </div>
      </div>
    </div>
	
</form>