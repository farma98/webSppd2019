		<?php  
			include '../koneksidb.php';
		?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>SPPD</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<script src="Sppd/crud_sppd.js"></script>

					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								SPPD
							</li>
							<li class="active">SPPD</li>
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
								SPPD
							</h1>
						</div><!-- /.page-header -->

								<div class="row">
									<div class="col-xs-12">
											
												<div class="box-tools pull-left">
            										<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i> Tambah SPPD</button>
          										</div>

												<!-- modal insert -->
										        <div class="example-modal">
										          <div id="modal-tambah" class="modal fade" role="dialog" style="display:none;">
										            <div class="modal-dialog modal-lg"> 
										              <div class="modal-content">
										                <div class="modal-header">
										                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										                  <h3 class="modal-title">Tambah Data SPPD Baru</h3>
										                </div>
										                <div class="modal-body">
										                  <form role="form" id="form-tambah" method="post" action="input.php">
										                    <div style="font-size: 20px;margin-bottom: 20px;">SPPD</div>
										                    <div class="form-group">
										                       <div class="row">
											                      <label class="col-sm-2 control-label text-center">Nomer Surat <span class="text-red">*</span></label>
											                      <div class="col-sm-10"><input type="number" class="form-control" name="nomor_surat" id="nomor_surat" value="" autocomplete="off">	
											                      </div>
										                      </div>
										                    </div>
										                    <div class="form-group">
										                  		<div class="row">
										                      	<div class="col-sm-12">
										                      		<p style="color:red;text-align: center;" id="error_nomor"></p>
										                      	</div>
										                      </div>
										                    </div>
										                    <div class="form-group">
										                       <div class="row">
											                      <label class="col-sm-2 control-label text-center">Nama <span class="text-red">*</span></label>
											                      <div class="col-sm-10">
											                      	<select class="form-control" name="nama" id="nama" onchange="cek_database()" style="width: 100%">
											                      	 <option>Pilih Nama </option>    
													                    <?php
													                        $sql = mysqli_query($koneksi, "SELECT * From pegawaii");
													                        $row = mysqli_num_rows($sql);
													                        while ($row = mysqli_fetch_array($sql)){
													                        echo "<option value='". $row['nama'] ."'>" .$row['nama'] ."</option>";  
													                        }
													                    ?>
											                      	</select>	  		
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
										                    		<label class="col-sm-2 control-label text-center">Nip <span class="text-red">*</span></label>
											                      	<div class="col-sm-4"><input type="text" class="form-control" name="nipQ" id="nipQ" value="" autocomplete="off" readonly="">  		
											                      	</div>
										                    		<label class="col-sm-2 control-label text-center">Jabatan <span class="text-red">*</span></label>
											                      	<div class="col-sm-4"><input type="text" class="form-control" name="jabatanQ" id="jabatanQ" value="" autocomplete="off" readonly="">  		
											                      	</div>
										                    	</div>
										                    </div>
										                    <div class="form-group">
										                  		<div class="row">
										                      	<div class="col-sm-6">
										                      		<p style="color:red;text-align: center;" id="error_nipQ"></p>
										                      	</div>
										                      	<div class="col-sm-6">
										                      		<p style="color:red;text-align: center;" id="error_jabatanQ"></p>
										                      	</div>
										                      </div>
										                    </div>
										                    <div class="form-group">
											                      <div class="row">
											                      <label class="col-sm-2 control-label text-center">Daerah Tujuan <span class="text-red">*</span></label>
											                      <div class="col-sm-10">
											                      	<select class="form-control" name="daerah" id="daerah" style="width: 100%">
											                      	 <option>Pilih Kota </option>    
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
										                    </div>
										                     <div class="form-group">
										                  		<div class="row">
										                      	<div class="col-sm-12">
										                      		<p style="color:red;text-align: center;" id="error_daerah"></p>
										                      	</div>
										                      </div>
										                    </div>
										                    <div class="form-group">
										                    	<div class="row">
											                      <label class="col-sm-2 control-label text-center">Tanggal Berangkat <span class="text-red">*</span></label>
											                      <div class="col-sm-4"><input type="date" class="form-control" name="tgl_berangkat" id="tgl_berangkat" value="" autocomplete="off">  		
											                      </div>
											                      <label class="col-sm-2 control-label text-center">Tanggal Kembali <span class="text-red">*</span></label>
											                      <div class="col-sm-4"><input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" value="" autocomplete="off">  		
											                      </div>
										                      </div>
										                    </div>
										                    <div class="form-group">
										                  		<div class="row">
										                      	<div class="col-sm-6">
										                      		<p style="color:red;text-align: center;" id="error_tglberangkat"></p>
										                      	</div>
										                      	<div class="col-sm-6">
										                      		<p style="color:red;text-align: center;" id="error_tglkembali"></p>
										                      	</div>
										                      </div>
										                    </div>
										                    <div class="form-group">
										                      <div class="row">
											                      <label class="col-sm-2 control-label text-right">Dalam Rangka <span class="text-red">*</span></label>
											                      <div class="col-sm-10">
											                      	<textarea id="keterangan" name="keterangan" style="width: 100%;height: 75px;resize: none;">
											                      		
											                      	</textarea> 		
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

										        <!-- modal update -->
										        <div id="modal-edit" class="modal fade" role="dialog">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<form role="form" id="form-edit" method="post" action="input.php">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">DATA SPPD</h4>
														</div>
															<div class="modal-body">
																<div id="data-edit">
																
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

											 <!-- modal detail -->
										        <div id="modal-detail" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<form role="form" id="form-detail" method="post" action="input.php">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">DETAIL SPPD</h4>
														</div>
															<div class="modal-body">
																<div id="data-detail">
																
																</div>			
															</div>
															 <div class="modal-footer">
										                      <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Kembali</button>
										                    </div>
														</form>		
													</div>
												</div>
											</div> <!-- modal detail close -->

										<!-- div.dataTables_borderWrap -->
										<div id="area_sppd">
											
										</div>
										
									</div>
								</div>

								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

<script type="text/javascript">
    function cek_database(){
        var nama = $("#nama").val();
        $.ajax({
            url: 'Sppd/ajax_cek.php',
            data:"nip="+nama ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#nipQ').val(obj.nipQ);
            $('#jabatanQ').val(obj.jabatanQ);
            });
    }
</script>
<!-- SELECT 2 -->
<script type="text/javascript">
 $(document).ready(function() {
     $('#nama').select2({
      placeholder: 'Pilih Nama',
      allowClear: true
     });
 });

 $(document).ready(function() {
     $('#daerah').select2({
      placeholder: 'Pilih Daerah',
      allowClear: true
     });
 });
</script>