$(document).ready(function(){
	var data = "Spt/data.php";
	$('#area_spt').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama").html('');
		$("#error_nipQ").html('');
		$("#error_jabatanQ").html('');
		$("#error_pangkatQ").html('');
		$("#error_keterangan").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "Spt/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_nama").html(hasil.error.nama);
					$("#error_nipQ").html(hasil.error.nipQ);
					$("#error_jabatanQ").html(hasil.error.jabatanQ);
					$("#error_pangkatQ").html(hasil.error.pangkatQ);
					$("#keterangan").html(hasil.error.keterangan);
				} else {
					$('#modal-tambah').modal('hide');
					$('.modal-backdrop').hide();
					$("#nama").val('');
					$("#nipQ").val('');
					$("#jabatanQ").val('');
					$("#pangkatQ").val('');
					$("#keterangan").val('');
					$('#area_spt').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('Spt/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama").html('');
		$("#error_nipQ").html('');
		$("#error_jabatanQ").html('');
		$("#error_pangkatQ").html('');
		$("#error_keterangan").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "Spt/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_nama").html(hasil.error.edit_nama);
					$("#error_edit_nipQ").html(hasil.error.edit_nipQ);
					$("#error_edit_jabatanQ").html(hasil.error.edit_jabatanQ);
					$("#error_edit_pangkatQ").html(hasil.error.edit_pangkatQ);
					$("#error_edit_keterangan").html(hasil.error.edit_keterangan);
				} else {
					$('#modal-edit').modal('hide');
					$('.modal-backdrop').hide();
					$("#nama").val('');
					$("#nipQ").val('');
					$("#jabatanQ").val('');
					$("#pangkatQ").val('');
					$("#keterangan").val('');
					$('#area_spt').load(data);
				}
			}
		});
	});

	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('Spt/hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_spt').load(data);			
			}   
		);
	});

});