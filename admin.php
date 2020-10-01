<?php 
	include 'koneksidb.php';
	session_start();
	if (!isset($_SESSION["login"])) {
 	header("Location:index.php");
 	exit;
 	}

 	// SCRIPT LOGOUT OTOMATIS
 	if(isset($_SESSION["username"])){ // jika ada sesi
            
            // jika tidak ada aktivitas pada browser 
            // selama 1 menit, maka
            if((time() - $_SESSION["last_login_time"]) > 900){ // 60 = 1 * 60

                // akan diarahkan kehalaman logout.php
                header("location: logout.php");
            } else {
                // jika ada aktivitas update waktu
                $_SESSION["last_login_timestamp"] = time();
            }
        } else {
            header("location:index.php");
        }

 	// SCRIPT UBAH PASSWORD
	if(count($_POST)>0) {
		$result = mysqli_query($koneksi, "SELECT * FROM login WHERE id_user='" .  $_SESSION['id_user'] . "'");
		$row=mysqli_fetch_array($result);
		if($_POST["currentPassword"] == $row["password"]) {
		mysqli_query($koneksi, "UPDATE login set password='" . $_POST["newPassword"] . "' WHERE id_user ='" .  $_SESSION['id_user'] . "'");
		$message = "Password Changed";
		}
		else $message = "Current Password Tidak Valid";
	}
	?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>SPPD DISPORA 2019</title>

		<link rel="icon" type="image/png" href="Login/images/icon.png">

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/load_ajax.js"></script>

		<style>
			a{
				cursor: pointer;
			}
			td,th{
				text-align: center;
			}	
		</style>

		<script>
			function validatePassword() {
			var currentPassword,newPassword,confirmPassword,output = true;

			currentPassword = document.frmChange.currentPassword;
			newPassword = document.frmChange.newPassword;
			confirmPassword = document.frmChange.confirmPassword;

			if(!currentPassword.value) {
			currentPassword.focus();
			document.getElementById("currentPassword").innerHTML = "required";
			output = false;
			}
			else if(!newPassword.value) {
			newPassword.focus();
			document.getElementById("newPassword").innerHTML = "required";
			output = false;
			}
			else if(!confirmPassword.value) {
			confirmPassword.focus();
			document.getElementById("confirmPassword").innerHTML = "required";
			output = false;
			}
			if(newPassword.value != confirmPassword.value) {
			newPassword.value="";
			confirmPassword.value="";
			newPassword.focus();
			document.getElementById("confirmPassword").innerHTML = "No Match";
			output = false;
			}     
			return output;
			}
		</script>

	</head>

	<body class="no-skin">
			<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							SPPD ADMIN
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/default.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Selamat Datang,</small>
          								<h6>Haloo <?php echo $_SESSION['username']?></h6>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a data-toggle="modal" data-target="#modal-password">
										<i class="ace-icon fa fa-cog"></i>
										Ubah Password
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
					<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-danger" style="width: 100%;">
							<i class="ace-icon fa fa-calendar"></i>
							<?php
								$tanggal= mktime(date("m"),date("d"),date("Y"));
								echo date("d-F-Y", $tanggal);
								date_default_timezone_set('Asia/Jakarta');
							?> 
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a class="tombol" id="dash">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> D. Master Pegawai </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="tombol" id="djabatan">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Jabatan
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
						<ul class="submenu">
							<li class="">
								<a class="tombol" id="dbidang">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Bidang
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
						<ul class="submenu">
							<li class="">
								<a class="tombol" id="dgolongan">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Golongan
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
						<ul class="submenu">
							<li class="">
								<a class="tombol" id="dpegawai">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Pegawai
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-money"></i>
							<span class="menu-text"> D. Master Biaya </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="tombol" id="duangharian">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Uang Harian
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
						<ul class="submenu">
							<li class="">
								<a class="tombol" id="dbiayapenginapan">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Biaya Penginapan
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-building"></i>
							<span class="menu-text"> D. Master Kota </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="tombol" id="dkota">
									<i class="menu-icon fa fa-caret-right"></i>
									Kota
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-car"></i>
							<span class="menu-text"> D. Master Transport </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a class="tombol" id="dtransportasi">
									<i class="menu-icon fa fa-caret-right"></i>
									Transportasi
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="ubah">
						

					</div>
				</div>
			</div><!-- /.main-content -->
						<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">SPPD</span>
							DISPORA JAWA TIMUR &copy; 2019
						</span>
					</div>
				</div>
			</div>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- modal ubah password -->
        <div class="example-modal">
          <div id="modal-password" class="modal fade" role="dialog" style="display:none;">
            <div class="modal-dialog"> 
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title">Ubah Password</h3>
                </div>
                <div class="modal-body">
                  <form role="form" name="frmChange" method="post" action="" onSubmit="return validatePassword();">
                  	<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                    <div class="form-group">
                      <div class="row">
                      <label class="col-sm-3 control-label text-right">Password Lama <span class="text-red">*</span></label>         
                      <div class="col-sm-8"><input type="password" class="form-control" name="currentPassword" id="currentPassword" placeholder="Password Lama" value="" autocomplete="off">  
                      </div> 
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                      <label class="col-sm-3 control-label text-right">Password Baru <span class="text-red">*</span></label>
                      <div class="col-sm-8"><input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Password Baru" value="" autocomplete="off">  		
                      </div>
                      </div>
                    </div>
                     <div class="form-group">
                      <div class="row">
                      <label class="col-sm-3 control-label text-right"> <span class="text-red">*</span></label>         
                      <div class="col-sm-8"><input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Konfirmasi Password" value="" autocomplete="off">  
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

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>				

		<!-- <![endif]-->

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
	</body>
</html>

