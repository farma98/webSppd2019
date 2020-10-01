$(document).ready(function(){
	var data = "kwitansi/data.php";
	$('#area_kwitansi').load(data);
	
	$("#form-tambah-kwi").submit(function(e) {
		e.preventDefault();
		
		$("#error_no_surat").html('');
		$("#error_tgl_bukti").html('');
		
		var dataform = $("#form-tambah-kwi").serialize();
		$.ajax({
			url: "Kwitansi/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_no_surat").html(hasil.error.kode);
					$("#error_tgl_bukti").html(hasil.error.nama);
				} else {
					$('#modal-tambah-kwi').modal('hide');
					$('.modal-backdrop').hide();
					$("#nosurat").val('');
					$("#tgl_bukti").val('');
					$("#tujuan").val('');
					$("#uang_harian").val('');
					$("#uang_transport").val('');
					$("#uang_penginapan").val('');
					$("#sewa").val('');
					$("#jml_bayar").val('');
					$("#nama_penginapan").val('');
					$('#area_kwitansi').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit-kwi").modal('show');
		$.post('kwitansi/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit-kwi").html(html);
			}   
		);
	});
	
	
	$("#form-edit-kwi").submit(function(e) {
		e.preventDefault();
		
		$("#error_no_bukti").html('');
		$("#error_tgl_bukti").html('');
		
		var dataform = $("#form-edit-kwi").serialize();
		$.ajax({
			url: "kwitansi/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_no_surat").html(hasil.error.edit_kode);
					$("#error_edit_tgl_bukti").html(hasil.error.edit_nama);
				} else {
					$('#modal-edit-kwi').modal('hide');
					$('.modal-backdrop').hide();
					$("#no_bukti").val('');
					$("#uang_harian").val('');
					$("#biaya_transport").val('');
					$("#uang_penginapan").val('');
					$("#sewa").val('');
					$("#jml_bayar").val('');
					$("#durasi").val('');
					$("#nama_penginapan").val('');
					$('#area_kwitansi').load(data);
				}
			}
		});
	});

	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('kwitansi/hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_kwitansi').load(data);			
			}   
		);
	});
});


