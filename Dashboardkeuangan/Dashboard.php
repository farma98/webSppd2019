					<?php 
						include '../koneksidb.php';
						session_start();
					?>
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								Home
							</li>
							<li class="active">Dashboard</li>
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
								Dashboard
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Selamat Datang <?php echo $_SESSION['username']?> Di
									<strong class="green">
										APLIKASI SPPD DISPORA JAWA TIMUR 2019
										<small>(v1.0)</small>
									</strong>
								</div>

								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-12 infobox-container">
										<div class="infobox infobox-green" style="background-color: #ebeced;height: 75px">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-envelope"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
													<?php 
														$sql = "SELECT * FROM spt";
														$query = mysqli_query($koneksi, $sql);
														$count = mysqli_num_rows($query);
														echo "Total : ";
														echo "$count";
													?>
												</span>
												<div class="infobox-content">DATA SPT</div>
											</div>
										</div>

										<div class="infobox infobox-blue" style="background-color: #ebeced;height: 75px;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-pencil-square-o"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
													<?php 
														$sql = "SELECT * FROM sppd";
														$query = mysqli_query($koneksi, $sql);
														$count = mysqli_num_rows($query);
														echo "Total : ";
														echo "$count";
													?>
												</span>
												<div class="infobox-content">DATA SPPD</div>
											</div>
										</div>

										<div class="infobox infobox-pink" style="background-color: #ebeced;height: 75px;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-file-pdf-o"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
													<?php 
														$sql = "SELECT * FROM sppd";
														$query = mysqli_query($koneksi, $sql);
														$count = mysqli_num_rows($query);
														echo "Total : ";
														echo "$count";
													?>
												</span>
												<div class="infobox-content">DATA LPD</div>
											</div>
										</div>

										<div class="infobox infobox-red" style="background-color: #ebeced;height: 75px;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-money"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
													<?php 
														$sql = "SELECT * FROM kwitansi";
														$query = mysqli_query($koneksi, $sql);
														$count = mysqli_num_rows($query);
														echo "Total : ";
														echo "$count";
													?>
												</span>
												<div class="infobox-content">DATA KWITANSI</div>
											</div>
										</div>

										<div class="infobox infobox-orange2" style="background-color: #ebeced;height: 75px;">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-car"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
													<?php 
														$sql=("SELECT t.no_tiket, t.nama_kendaraan, t.no_penerbangan, t.no_kursi, d.nama_daerah 
															FROM transportasi t join akomodasi a on t.no_tiket = a.no_tiket 
															join daerah d on a.kode_daerah = d.kode_daerah");
														$query = mysqli_query($koneksi, $sql);
														$count = mysqli_num_rows($query);
														echo "Total : ";
														echo "$count";
													?>
												</span>
												<div class="infobox-content">DATA TRANSPORTASI</div>
											</div>
										</div>
									</div>

									<div class="vspace-12-sm"></div>

								</div><!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->