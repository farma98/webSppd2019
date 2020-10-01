$(document).ready(function(){
	var data = "Penginapan/data.php";
	$('#area_penginapan').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_kodepenginapan").html('');
		$("#error_namadaerah").html('');
		$("#error_eselon3").html('');
		$("#error_eselon4").html('');
		$("#error_golongan12").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "Penginapan/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_kodepenginapan").html(hasil.error.kodepenginapan);
					$("#error_namadaerah").html(hasil.error.namadaerah);
					$("#error_eselon3").html(hasil.error.eselon3);
					$("#error_eselon4").html(hasil.error.eselon4);
					$("#error_golongan12").html(hasil.error.golongan12);
				} else {
					$('#modal-tambah').modal('hide');
					$('.modal-backdrop').hide();
					$("#kode_penginapan").val('');
					$("#nama_daerah").val('');
					$("#eselon3").val('');
					$("#eselon4").val('');
					$("#golongan12").val('');
					$('#area_penginapan').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('Penginapan/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_kodepenginapan").html('');
		$("#error_namadaerah").html('');
		$("#error_eselon3").html('');
		$("#error_eselon4").html('');
		$("#error_golongan12").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "Penginapan/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_kodepenginapan").html(hasil.error.edit_kodepenginapan);
					$("#error_edit_namadaerah").html(hasil.error.edit_namadaerah);
					$("#error_edit_eselon3").html(hasil.error.edit_eselon3);
					$("#error_edit_eselon4").html(hasil.error.edit_eselon4);
					$("#error_edit_golongan12").html(hasil.error.edit_golongan12);
				} else {
					$('#modal-edit').modal('hide');
					$('.modal-backdrop').hide();
					$("#kode_penginapan").val('');
					$("#nama_daerah").val('');
					$("#eselon3").val('');
					$("#eselon4").val('');
					$("#golongan12").val('');
					$('#area_penginapan').load(data);
				}
			}
		});
	});

	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('Penginapan/hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_penginapan').load(data);			
			}   
		);
	});

});


