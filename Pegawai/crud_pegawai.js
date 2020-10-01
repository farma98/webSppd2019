$(document).ready(function(){
	var data = "Pegawai/data.php";
	$('#area_pegawai').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_nip").html('');
		$("#error_nama").html('');
		$("#error_golongan").html('');
		$("#error_kodejabatan").html('');
		$("#error_kodebidang").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "Pegawai/input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_nip").html(hasil.error.nip);
					$("#error_nama").html(hasil.error.nama);
					$("#error_golongan").html(hasil.error.golongan);
					$("#error_kodejabatan").html(hasil.error.kodejabatan);
					$("#error_kodebidang").html(hasil.error.kodebidang);
				} else {
					$('#modal-tambah').modal('hide');
					$('.modal-backdrop').hide();
					$("#nip").val('');
					$("#nama").val('');
					$("#golongan").val('');
					$("#kode_jabatan").val('');
					$("#kode_bidang").val('');
					$('#area_pegawai').load(data);
				}
			}
		});
	});

		$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('Pegawai/edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_nip").html('');
		$("#error_nama").html('');
		$("#error_golongan").html('');
		$("#error_kodejabatan").html('');
		$("#error_kodebidang").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "Pegawai/update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_nip").html(hasil.error.edit_nip);
					$("#error_edit_nama").html(hasil.error.edit_nama);
					$("#error_edit_golongan").html(hasil.error.edit_golongan);
					$("#error_edit_kodejabatan").html(hasil.error.edit_kodejabatan);
					$("#error_edit_kodebidang").html(hasil.error.edit_kodebidang);
				} else {
					$('#modal-edit').modal('hide');
					$('.modal-backdrop').hide();
					$("#nip").val('');
					$("#nama").val('');
					$("#golongan").val('');
					$("#kode_jabatan").val('');
					$("#kode_bidang").val('');
					$('#area_pegawai').load(data);
				}
			}
		});
	});

	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('Pegawai/hapus.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#area_pegawai').load(data);			
			}   
		);
	});

});


