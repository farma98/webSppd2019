<?php  
	include '../koneksidb.php';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>SPPD</title>

<meta name="description" content="Static &amp; Dynamic Tables" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<script src="kwitansi/crud_kwitansi.js"></script>
<script>
	function hitungBayar(){
		var harian = document.getElementById("uang_harian").value;
		var transport = document.getElementById("uang_transport").value;
		var penginapan = document.getElementById("uang_penginapan").value;
		var sewa = document.getElementById("sewa").value;
		var hari = document.getElementById("durasi").value;
		
		var jumlah1 = 450000*parseInt(hari);
		document.getElementById("uang_harian").value=jumlah1;
		var jumlah = jumlah1 + parseInt(transport) + parseInt(penginapan) + parseInt(sewa);
		document.getElementById("jml_bayar").value = jumlah;
	}
	function hitungBayar1(){
		var harian = document.getElementById("uang_harian").value;
		var transport = document.getElementById("biaya_transport").value;
		var penginapan = document.getElementById("uang_penginapan").value;
		var sewa = document.getElementById("sewa").value;
		var hari = document.getElementById("durasi").value;
		
		var jumlah1 = 450000*parseInt(hari);
		document.getElementById("uang_harian").value=jumlah1;
		var jumlah = jumlah1 + parseInt(transport) + parseInt(penginapan) + parseInt(sewa);
		document.getElementById("jml_bayar").value = jumlah;
	}
</script>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			SPPD
		</li>
		<li class="active">RPD</li>
	</ul><!-- /.breadcrumb -->

	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"/>
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- /.nav-search -->
</div>

<div class="page-content">
	<div class="page-header">
		<h1>
			RPD
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<div class="box-tools pull-left">
				<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-tambah-kwi"><i class="fa fa-file"></i> Tambah RPD</button>
			</div>

					<!-- modal insert -->
			<div class="example-modal">
				<div id="modal-tambah-kwi" class="modal fade" role="dialog" style="display:none;">
					<div class="modal-dialog modal-lg"> 
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title">Tambah RPD Baru</h3>
							</div>
							<div class="modal-body">
								<form role="form" id="form-tambah-kwi" method="post" action="input.php">
									<div style="font-size: 20px;margin-bottom: 20px;">Tanda Bukti (RPD)</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">No Surat<span class="text-red">*</span></label>
											<div class="col-sm-4">
												<select class="form-control" name="nosurat" id="nosurat" placeholder="No. Surat" onchange="cek_database();">
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
											<label class="col-sm-2 control-label text-center">Tanggal Bukti<span class="text-red">*</span></label>
											<div class="col-sm-4">
												<input type="date" class="form-control" name="tgl_bukti" id="tgl_bukti" value="" autocomplete="off">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">Tujuan<span class="text-red"></span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="tujuanQ" id="tujuanQ" autocomplete="off" readonly="">  		
											</div>
											<label class="col-sm-2 control-label text-center">Uang Harian<span class="text-red"></span></label>
											<div class="col-sm-4">
												<input type="number" class="form-control" name="uang_harian" id="uang_harian" value="450000" min="0" onchange="hitungBayar();" onclick="hitungBayar();" onkeyup="hitungBayar();" autocomplete="off" readonly>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">Biaya Transport<span class="text-red"></span></label>
											<div class="col-sm-4">
												<input type="number" class="form-control" name="uang_transport" id="uang_transport" value="0" min="0" onchange="hitungBayar();" onclick="hitungBayar();" onkeyup="hitungBayar();" autocomplete="off">  		
											</div>
											<label class="col-sm-2 control-label text-center">Biaya Penginapan<span class="text-red"></span></label>
											<div class="col-sm-4">
												<input type="number" class="form-control" name="uang_penginapan" id="uang_penginapan" value="0" min="0" onchange="hitungBayar();" onclick="hitungBayar();" onkeyup="hitungBayar();" autocomplete="off">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">Sewa Kendaraan<span class="text-red"></span></label>
											<div class="col-sm-4">
												<input type="number" class="form-control" name="sewa" id="sewa" value="0" min="0" onchange="hitungBayar();" onclick="hitungBayar();" onkeyup="hitungBayar();" autocomplete="off">
											</div>
											<label class="col-sm-2 control-label text-center">Jumlah Di Bayarkan <span class="text-red"></span></label>
											<div class="col-sm-4">
												<input type="number" class="form-control" name="jml_bayar" id="jml_bayar" value="0" min="0" onchange="hitungBayar();" onclick="hitungBayar();" onkeyup="hitungBayar();" autocomplete="off" readonly="">  		
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<label class="col-sm-2 control-label text-center">Nama Penginapan<span class="text-red"></span></label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="nama_penginapan" id="nama_penginapan" value="" autocomplete="off">  		
											</div>
											<label class="col-sm-2 control-label text-center">Durasi Menginap<span class="text-red"></span></label>
											<div class="col-sm-1">
												<input type="number" class="form-control" name="durasi" id="durasi" value="0" min="0" onchange="hitungBayar();" onclick="hitungBayar();" onkeyup="hitungBayar();" autocomplete="off">  		
											</div>
											<span class="text-red">Hari</span>
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
			
			<div id="modal-edit-kwi" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<form role="form" id="form-edit-kwi" method="post" action="update.php">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">DATA RPD</h4>
						</div>
							<div class="modal-body">
								<div id="data-edit-kwi">
								
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
			<div id="area_kwitansi">
			</div>
		</div>
	</div>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->
<script>
	function cek_database(){
		var no = $("#nosurat").val();
		$.ajax({
			url: 'Kwitansi/ajax_cek.php',
			data: "no_surat="+no,
		}).success(function(data){
			var json = data,
			obj = JSON.parse(json);
				$('#tujuanQ').val(obj.tujuanQ);
			});
	}
</script>