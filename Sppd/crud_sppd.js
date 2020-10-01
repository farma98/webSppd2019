$(document).ready(function(){
	var data = "Sppd/data.php";
	$('#area_sppd').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();

		$("#error_nomor").html('');
		$("#error_nama").html('');
		$("#error_nipQ").html('');
		$("#error_jabatanQ").html('');
		$("#error_daerah").html('');
		$("#error_tglberangkat").html('');
		$("#error_tglkembali").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "Sppd/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_nomor").html(hasil.error.nomor);
					$("#error_nama").html(hasil.error.nama);
					$("#error_nipQ").html(hasil.error.nipQ);
					$("#error_jabatanQ").html(hasil.error.jabatanQ);
					$("#error_daerah").html(hasil.error.daerah);
					$("#error_tglberangkat").html(hasil.error.tglberangkat);
					$("#error_tglkembali").html(hasil.error.tglkembali);
				} else {
					$('#modal-tambah').modal('hide');
					$('.modal-backdrop').hide();
					$("#nomor_surat").val('');
					$("#nama").val('');
					$("#nipQ").val('');
					$("#jabatan").val('');
					$("#keterangan").val('');
					$("#daerah").val('');
					$("#tglberangkat").val('');
					$("#tglkembali").val('');
					$('#area_sppd').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('Sppd/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_nomor").html('');
		$("#error_nama").html('');
		$("#error_nipQ").html('');
		$("#error_jabatanQ").html('');
		$("#error_daerah").html('');
		$("#error_tglberangkat").html('');
		$("#error_tglkembali").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "Sppd/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_nomor").html(hasil.error.edit_nomor);
					$("#error_edit_nama").html(hasil.error.edit_nama);
					$("#error_edit_nipQ").html(hasil.error.edit_nipQ);
					$("#error_edit_jabatanQ").html(hasil.error.edit_jabatanQ);
					$("#error_edit_daerah").html(hasil.error.edit_daerah);
					$("#error_edit_tglberangkat").html(hasil.error.edit_tglberangkat);
					$("#error_edit_tglkembali").html(hasil.error.edit_tglkembali);
				} else {
					$('#modal-edit').modal('hide');
					$('.modal-backdrop').hide();
					$("#nomor_surat").val('');
					$("#nama").val('');
					$("#nipQ").val('');
					$("#jabatan").val('');
					$("#keterangan").val('');
					$("#daerah").val('');
					$("#tglberangkat").val('');
					$("#tglkembali").val('');
					$('#area_sppd').load(data);
				}
			}
		});
	});

	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('Sppd/hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_sppd').load(data);			
			}   
		);
	});

	$(document).on('click','#detail',function(e){
		e.preventDefault();
		$("#modal-detail").modal('show');
		$.post('Sppd/detail.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-detail").html(html);
			}   
		);
	});
});

