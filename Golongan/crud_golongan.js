$(document).ready(function(){
	var data = "Golongan/data.php";
	$('#area_golongan').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_golongan").html('');
		$("#error_pangkat").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "Golongan/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_golongan").html(hasil.error.golongan);
					$("#error_pangkat").html(hasil.error.pangkat);
				} else {
					$('#modal-tambah').modal('hide');
					$('.modal-backdrop').hide();
					$("#golongan").val('');
					$("#pangkat").val('');
					$('#area_golongan').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('Golongan/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_golongan").html('');
		$("#error_pangkat").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "Golongan/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_golongan").html(hasil.error.edit_golongan);
					$("#error_edit_pangkat").html(hasil.error.edit_pangkat);
				} else {
					$('#modal-edit').modal('hide');
					$('.modal-backdrop').hide();
					$("#golongan").val('');
					$("#pangkat").val('');
					$('#area_golongan').load(data);
				}
			}
		});
	});

	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('Golongan/hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_golongan').load(data);			
			}   
		);
	});

});


