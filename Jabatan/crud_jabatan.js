$(document).ready(function(){
	var data = "Jabatan/data.php";
	$('#area_jabatan').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_kode").html('');
		$("#error_nama").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "Jabatan/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_kode").html(hasil.error.kode);
					$("#error_nama").html(hasil.error.nama);
				} else {
					$('#modal-tambah').modal('hide');
					$('.modal-backdrop').hide();
					$("#kode_jabatan").val('');
					$("#nama_jabatan").val('');
					$('#area_jabatan').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('Jabatan/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_kode").html('');
		$("#error_nama").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "Jabatan/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_kode").html(hasil.error.edit_kode);
					$("#error_edit_nama").html(hasil.error.edit_nama);
				} else {
					$('#modal-edit').modal('hide');
					$('.modal-backdrop').hide();
					$("#kode_jabatan").val('');
					$("#nama_jabatan").val('');
					$('#area_jabatan').load(data);
				}
			}
		});
	});

	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('Jabatan/hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_jabatan').load(data);			
			}   
		);
	});

});


