$(document).ready(function(){
	var data = "Transportasi/data.php";
	$('#area_transportasi').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_kode").html('');
		$("#error_jenis").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "Transportasi/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_kode").html(hasil.error.kode);
					$("#error_jenis").html(hasil.error.jenis);
				} else {
					$('#modal-tambah').modal('hide');
					$('.modal-backdrop').hide();
					$("#kode_transportasi").val('');
					$("#jenis_transportasi").val('');
					$('#area_transportasi').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('Transportasi/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_kode").html('');
		$("#error_jenis").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "Transportasi/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_kode").html(hasil.error.edit_kode);
					$("#error_edit_jenis").html(hasil.error.edit_nama);
				} else {
					$('#modal-edit').modal('hide');
					$('.modal-backdrop').hide();
					$("#kode_transportasi").val('');
					$("#jenis_transportasi").val('');
					$('#area_transportasi').load(data);
				}
			}
		});
	});

	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('Transportasi/hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_transportasi').load(data);			
			}   
		);
	});

});


