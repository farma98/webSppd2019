		    $(document).ready(function(){
		        $('.tombol').click(function(){
		            var menu = $(this).attr('id');
		            if(menu == "dash"){
		                $('.ubah').load('Dashboardadmin/Dashboard.php');                       
		            }else if(menu == "djabatan"){
		                $('.ubah').load('Jabatan/Data_Jabatan.php');                         
		            }else if(menu == "dbidang"){
		                $('.ubah').load('Bidang/Data_Bidang.php');                         
		            }else if(menu == "dgolongan"){
		                $('.ubah').load('Golongan/Data_Golongan.php');                         
		            }else if(menu == "dpegawai"){
		                $('.ubah').load('Pegawai/Data_Pegawai.php');                         
		            }else if(menu == "duangharian"){
		                $('.ubah').load('Uangharian/Data_Uang_Harian.php');                         
		            }else if(menu == "dbiayapenginapan"){
		                $('.ubah').load('Penginapan/Data_Penginapan.php');                         
		            }else if(menu == "dkota"){
		                $('.ubah').load('Kota/Data_Kota.php');                         
		            }else if(menu == "dtransportasi"){
		                $('.ubah').load('Transportasi/Data_Transportasi.php');                         
		            }
		        });
		 
		 
		        // halaman yang di load default pertama kali
		        $('.ubah').load('Dashboardadmin/Dashboard.php');                       
		    
		    });
