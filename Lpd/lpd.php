<?php  
	include '../koneksidb.php';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>SPPD</title>

<meta name="description" content="Static &amp; Dynamic Tables" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<script src="lpd/crud_lpd.js"></script>

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			SPPD
		</li>
		<li class="active">LPD</li>
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
				<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-tambah-lpd"><i class="fa fa-file"></i> Tambah LPD</button>
			</div>

			<!-- modal insert LPD-->
			<div class="example-modal">
				<div id="modal-tambah-lpd" class="modal fade" role="dialog" style="display:none;">
					<div class="modal-dialog modal-lg"> 
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title">Tambah Data LPD Baru</h3>
							</div>
							<div class="modal-body">
								<form role="form" id="form-tambah-lpd" method="post" action="input.php">
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">No Surat<span class="text-red"></span></label>
											<div class="col-sm-4">
												<select class="form-control" name="nosurat" id="nosurat" onchange="cek_database();">
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
											<label class="col-sm-2 control-label text-center">Waktu Pelaksanaan<span class="text-red"></span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="tgl" id="tgl" readonly></input>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">Instansi Tujuan<span class="text-red"></span></label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="tujuan" id="tujuan"></input>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-rigt">Arahan yang Diberikan<span class="text-red"></span></label>
											<div class="col-sm-10">
												<textarea id="arahan" name="arahan" style="width: 100%;height: 75px;resize:none;"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-right">Masalah/Temuan<span class="text-red"></span></label>
											<div class="col-sm-10">
												<textarea id="masalah" name="masalah" style="width: 100%;height: 75px;resize:none;"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-right">Saran/Tindakan<span class="text-red"></span></label>
											<div class="col-sm-10">
												<textarea id="saran" name="saran" style="width: 100%;height: 75px;resize:none;"></textarea>
											</div>
										</div>
									</div>
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
			
			<div id="modal-edit-lpd" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<form role="form" id="form-edit-lpd" method="post" action="update.php">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">DATA LPD</h4>
						</div>
							<div class="modal-body">
								<div id="data-edit-lpd">
									
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
			<div id="area_lpd">
			</div>
		</div>
	</div>
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->
<script>
	function cek_database(){
		var no = $("#nosurat").val();
		$.ajax({
			url: 'Lpd/ajax_cek.php',
			data: "no_surat="+no,
		}).success(function(data){
			var json = data,
			obj = JSON.parse(json);
				$('#tgl').val(obj.tgl);
			});
	}
</script>