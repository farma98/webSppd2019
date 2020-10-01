$(document).ready(function(){
	var data = "Transport/data.php";
	$('#area_tra').load(data);
	
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
			url: "Transport/input1.php",
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

	$(document).on('click','#edit',function(e){
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
			url: "Transport/update1.php",
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
		$.post('Transport/hapus1.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_tra').load(data);			
			}   
		);
	});
});


