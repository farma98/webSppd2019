<?php  
	include '../koneksidb.php';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>SPPD</title>

<meta name="description" content="Static &amp; Dynamic Tables" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<script src="Jabatan/crud_jabatan.js"></script>
<script>
	function getNip(){
		var nip = document.getElementById("nama").value;
		document.getElementById("nip").value=nip;
	}
	
	function getPangkat(){
		
	}
</script>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			SPPD
		</li>
		<li class="active">Kwitansi</li>
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
			Kwitansi
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<div class="box-tools pull-left">
				<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-tambah-kwi"><i class="fa fa-file"></i> Tambah Kwitansi</button>
			</div>

			<!--Modal Insert Transportasi-->
			
			<!-- div.dataTables_borderWrap -->
			<div id="area_transport">
			</div>
		</div>
	</div>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->