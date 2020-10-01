		<?php  
			include '../koneksidb.php';
		?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Data Bidang</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<script src="Bidang/crud_bidang.js"></script>

					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								D.Master Pegawai
							</li>
							<li class="active">Data Bidang</li>
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
								Data Bidang
							</h1>
						</div><!-- /.page-header -->

								<div class="row">
									<div class="col-xs-12">
											
												<div class="box-tools pull-left">
            										<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-male"></i> Tambah Data</button>
          										</div>

												<!-- modal insert -->
										        <div class="example-modal">
										          <div id="modal-tambah" class="modal fade" role="dialog" style="display:none;">
										            <div class="modal-dialog"> 
										              <div class="modal-content">
										                <div class="modal-header">
										                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										                  <h3 class="modal-title">Tambah Data Bidang Baru</h3>
										                </div>
										                <div class="modal-body">
										                  <form role="form" id="form-tambah" method="post" action="input.php">
										                    <div class="form-group">
										                      <div class="row">
										                      <label class="col-sm-3 control-label text-right">Kode Bidang <span class="text-red">*</span></label>         
										                      <div class="col-sm-8"><input type="text" class="form-control" name="kode_bidang" id="kode_bidang" placeholder="Kode Bidang" value="" autocomplete="off">  
										                      </div> 
										                      </div>
										                    </div>
										                    <div class="form-group">
										                  		<div class="row">
										                      	<div class="col-sm-12">
										                      		<p style="color:red;text-align: center;" id="error_kode"></p>
										                      	</div>
										                      </div>
										                    </div>
										                    <div class="form-group">
										                      <div class="row">
										                      <label class="col-sm-3 control-label text-right">Nama Bidang <span class="text-red">*</span></label>
										                      <div class="col-sm-8"><input type="text" class="form-control" name="nama_bidang" id="nama_bidang" placeholder="Nama Bidang" value="" autocomplete="off">  		
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
										                    <div class="modal-footer">
										                      <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
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
												<div class="modal-dialog">
													<div class="modal-content">
														<form role="form" id="form-edit" method="post" action="input.php">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">DATA BIDANG</h4>
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

										<!-- div.dataTables_borderWrap -->
										<div id="area_bidang">
											
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