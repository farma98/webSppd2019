		    $(document).ready(function(){
		        $('.tombol').click(function(){
		            var menu = $(this).attr('id');
		            if(menu == "dash"){
		                $('.ubah').load('Dashboardstaff/Dashboard.php');                       
		            }else if(menu == "dspt"){
		                $('.ubah').load('Spt/Spt.php');                         
		            }else if(menu == "dsppd"){
		                $('.ubah').load('Sppd/Sppd.php');                         
		            }else if(menu == "dlpd"){
		                $('.ubah').load('Lpd/lpd.php');                         
		            }else if(menu == "dtrans"){
		                $('.ubah').load('Transport/transport.php');                         
		            }
		        });
		 
		        // halaman yang di load default pertama kali
		        $('.ubah').load('Dashboardstaff/Dashboard.php');                       
		    
		    });
