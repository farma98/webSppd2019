$(document).ready(function(){
	var data = "Uangharian/data.php";
	$('#area_uang').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_kuh").html('');
		$("#error_pejabat").html('');
		$("#error_uang").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "Uangharian/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_kuh").html(hasil.error.kuh);
					$("#error_pejabat").html(hasil.error.pejabat);
					$("#error_uang").html(hasil.error.uang);
				} else {
					$('#modal-tambah').modal('hide');
					$('.modal-backdrop').hide();
					$("#kuh").val('');
					$("#pejabat").val('');
					$("#uang").val('');
					$('#area_uang').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('Uangharian/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_kuh").html('');
		$("#error_pejabat").html('');
		$("#error_uang").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "Uangharian/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_kuh").html(hasil.error.edit_kuh);
					$("#error_edit_pejabat").html(hasil.error.edit_pejabat);
					$("#error_edit_uang").html(hasil.error.edit_uang);
				} else {
					$('#modal-edit').modal('hide');
					$('.modal-backdrop').hide();
					$("#kuh").val('');
					$("#pejabat").val('');
					$("#uang").val('');
					$('#area_uang').load(data);
				}
			}
		});
	});

	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('Uangharian/hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_uang').load(data);			
			}   
		);
	});

});


