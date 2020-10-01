4<?php  
	include '../koneksidb.php';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>SPPD</title>

<meta name="description" content="Static &amp; Dynamic Tables" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<script src="Transport/crud_tra.js"></script>
<script>
	
</script>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			SPPD
		</li>
		<li class="active">Transportasi</li>
	</ul><!-- /.breadcrumb -->

	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- /.nav-search -->
</div>

<div class="page-content">
	<div class="page-header">
		<h1>
			LPD
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<div class="box-tools pull-left">
				<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-tambah-tra"><i class="fa fa-file"></i> Tambah Data Transportasi</button>
			</div>
			
			<!--Modal Insert Transportasi-->
			<div class="example-modal">
				<div id="modal-tambah-tra" class="modal fade" role="dialog" style="display:none;">
					<div class="modal-dialog modal-lg"> 
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title">Tambah Data Transportasi Baru</h3>
							</div>
							<div class="modal-body">
								<form role="form" id="form-tambah-tra" method="post" action="input1.php">
								
									<!--Data Transportasi Berangkat-->
									<div style="font-size: 20px;margin-bottom: 20px;">Data Transportasi (Berangkat)</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">No. Surat <span class="text-red"></span></label>
											<div class="col-sm-6">
												<select class="form-control" name="nosurat1" id="nosurat1">
													<option></option>    
													<?php
														$sql = mysqli_query($koneksi, "SELECT * From sppd");
														$row = mysqli_num_rows($sql);
														while ($row = mysqli_fetch_array($sql)){
														echo "<option value='". $row['no_surat'] ."'>" .$row['no_surat'] ."</option>";  
														}
													?>
												</select>
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
												<input type="text" class="form-control" name="nama_transportasi" id="nama_transportasi" value="" autocomplete="off" placeholder="Nama Transportasi">  		
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">No Tiket <span class="text-red">*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="no_tiket" id="no_tiket" value="" autocomplete="off" placeholder="No Tiket">  		
											</div>
											<label class="col-sm-2 control-label text-center">No Penerbangan <span class="text-red"></span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="no_penerbangan" id="no_penerbangan" value="" autocomplete="off" placeholder="No Penerbangan">  		
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">No Kursi <span class="text-red"></span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="no_kursi" id="no_kursi" value="" autocomplete="off">  		
											</div>
											<label class="col-sm-2 control-label text-center">Harga Tiket <span class="text-red">*</span></label>
											<div class="col-sm-4">
												<input type="number" class="form-control" name="harga_tiket" id="harga_tiket" value=" autocomplete="off">  		
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
									<div class="modal-footer">
										<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
										<button type="reset" class="btn btn-warning" >Reset</button>
										<button type="submit" class="btn btn-primary" >Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div><!-- modal insert close -->
			
			<div id="modal-edit-tra" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<form role="form" id="form-edit-tra" method="post" action="update1.php">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">DATA Transportasi</h4>
						</div>
							<div class="modal-body">
								<div id="data-edit-tra">
									
								</div>				
							</div>
							
							 <div class="modal-footer">
							  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
							  <button type="submit" class="btn btn-primary" >Simpan</button>
							</div>
						</form>		
					</div>
				</div>
			</div> <!-- modal update close -->
			<!-- div.dataTables_borderWrap -->
			<div id="area_tra">
			</div>
		</div>
	</div>
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->