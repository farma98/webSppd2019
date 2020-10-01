$(document).ready(function(){
	var data = "Lpd/data.php";
	$('#area_lpd').load(data);
	
	$("#form-tambah-lpd").submit(function(e) {
		e.preventDefault();
		
		$("#error_no_surat").html('');
		$("#error_waktu_pelaksanaan").html('');
		$("#error_instansi_tujuan").html('');
		$("#error_arahan").html('');
		$("#error_masalah").html('');
		$("#error_saran").html('');
		
		var dataform = $("#form-tambah-lpd").serialize();
		$.ajax({
			url: "Lpd/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_no_surat").html(hasil.error.kode);
					$("#error_waktu_pelaksanaan").html(hasil.error.nama);
					$("#error_instansi_tujuan").html(hasil.error.kode);
					$("#error_arahan").html(hasil.error.kode);
					$("#error_masalah").html(hasil.error.kode);
					$("#error_saran").html(hasil.error.kode);
				} else {
					$('#modal-tambah-lpd').modal('hide');
					$('.modal-backdrop').hide();
					$("#nosurat").val('');
					$("#tgl_pelaksanaan").val('');
					$("#tujuan").val('');
					$("#arahan").val('');
					$("#masalah").val('');
					$("#saran").val('');
					$('#area_lpd').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit-lpd").modal('show');
		$.post('Lpd/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit-lpd").html(html);
			}   
		);
	});
	
	
	$("#form-edit-lpd").submit(function(e) {
		e.preventDefault();
		
		$("#error_no_surat").html('');
		$("#error_waktu_pelaksanaan").html('');
		$("#error_instansi_tujuan").html('');
		$("#error_arahan").html('');
		$("#error_masalah").html('');
		$("#error_saran").html('');
		
		var dataform = $("#form-edit-lpd").serialize();
		$.ajax({
			url: "Lpd/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_no_surat").html(hasil.error.kode);
					$("#error_waktu_pelaksanaan").html(hasil.error.nama);
					$("#error_instansi_tujuan").html(hasil.error.kode);
					$("#error_arahan").html(hasil.error.kode);
					$("#error_masalah").html(hasil.error.kode);
					$("#error_saran").html(hasil.error.kode);
				} else {
					$('#modal-edit-lpd').modal('hide');
					$('.modal-backdrop').hide();
					$("#nosurat").val('');
					$("#tgl").val('');
					$("#arahan").val('');
					$("#masalah").val('');
					$("#saran").val('');
					$('#area_lpd').load(data);
				}
			}
		});
	});

	$("#form-detil-lpd").submit(function(e) {
		e.preventDefault();
		
		$("#error_no_surat").html('');
		$("#error_waktu_pelaksanaan").html('');
		$("#error_instansi_tujuan").html('');
		$("#error_arahan").html('');
		$("#error_masalah").html('');
		$("#error_saran").html('');
		
		var dataform = $("#form-detil-lpd").serialize();
		$.ajax({
			url: "Lpd/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_no_surat").html(hasil.error.kode);
					$("#error_waktu_pelaksanaan").html(hasil.error.nama);
					$("#error_instansi_tujuan").html(hasil.error.kode);
					$("#error_arahan").html(hasil.error.kode);
					$("#error_masalah").html(hasil.error.kode);
					$("#error_saran").html(hasil.error.kode);
				} else {
					$('#modal-detil-lpd').modal('hide');
					$('.modal-backdrop').hide();
					$("#nosurat").val('');
					$("#tgl_pelaksanaan").val('');
					$("#arahan").val('');
					$("#masalah").val('');
					$("#saran").val('');
					$('#area_lpd').load(data);
				}
			}
		});
	});
	
	$(document).on('click','#detil',function(e){
		e.preventDefault();
		$("#modal-detil-lpd").modal('show');
		
	});
	
	$("#form-tambah-tra").submit(function(e) {
		e.preventDefault();
		
		$("#error_no_surat").html('');
		$("#error_jenis_transportasi").html('');
		$("#error_nama_transportasi").html('');
		$("#error_no_tiket").html('');
		$("#error_harga_tiket").html('');
		$("#error_asal").html('');
		$("#error_tujuan").html('');

		var dataform = $("#form-tambah-tra").serialize();
		$.ajax({
			url: "Lpd/input1.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_no_surat").html(hasil.error.kode);
					$("#error_jenis_transportasi").html(hasil.error.nama);
					$("#error_nama_transportasi").html(hasil.error.kode);
					$("#error_no_tiket").html(hasil.error.kode);
					$("#error_harga_tiket").html(hasil.error.kode);
					$("#error_asal").html(hasil.error.kode);
					$("#error_tujuan").html(hasil.error.kode);
				} else {
					$('#modal-tambah-tra').modal('hide');
					$('.modal-backdrop').hide();
					$("#nosurat1").val('');
					$("#jenis_transportasi").val('');
					$("#nama_transportasi").val('');
					$("#no_tiket").val('');
					$("#no_penerbangan").val('');
					$("#no_kursi").val('');
					$("#harga_tiket").val('');
					$("#asal").val('');
					$("#tujuan").val('');
					$('#area_tra').load(data);
				}
			}
		});
	});

	$(document).on('click','#edit1',function(e){
		e.preventDefault();
		$("#modal-edit-tra").modal('show');
		$.post('Lpd/edit1.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit-tra").html(html);
			}   
		);
	});
	
	
	$("#form-edit-tra").submit(function(e) {
		e.preventDefault();
		
		$("#error_no_surat").html('');
		$("#error_jenis_transportasi").html('');
		$("#error_nama_transportasi").html('');
		$("#error_no_tiket").html('');
		$("#error_harga_tiket").html('');
		$("#error_asal").html('');
		$("#error_tujuan").html('');
		
		var dataform = $("#form-edit-tra").serialize();
		$.ajax({
			url: "Lpd/update1.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_no_surat").html(hasil.error.kode);
					$("#error_jenis_transportasi").html(hasil.error.nama);
					$("#error_nama_transportasi").html(hasil.error.kode);
					$("#error_no_tiket").html(hasil.error.kode);
					$("#error_harga_tiket").html(hasil.error.kode);
					$("#error_asal").html(hasil.error.kode);
					$("#error_tujuan").html(hasil.error.kode);
				} else {
					$('#modal-edit-tra').modal('hide');
					$('.modal-backdrop').hide();
					$("#nosurat1").val('');
					$("#jenis_transportasi").val('');
					$("#nama_transportasi").val('');
					$("#no_tiket").val('');
					$("#no_penerbangan").val('');
					$("#no_kursi").val('');
					$("#harga_tiket").val('');
					$("#asal").val('');
					$("#tujuan").val('');
					$('#area_tra').load(data);
				}
			}
		});
	});
	
	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('Lpd/hapus1.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_tra').load(data);			
			}   
		);
	});
});


