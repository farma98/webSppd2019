										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>

										<div class="table-header">
											TABEL DATA SPPD DISPORA JATIM
										</div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>No</th>
														<th>No Surat</th>
														<th>Nama</th>
														<th>Tujuan</th>
														<th>Tanggal Berangkat</th>
														<th>Tanggal Kembali</th>
														<th>Aksi</th>
													</tr>
												</thead>

												<tbody>
													<?php
														include "../koneksidb.php";
										                $no = 1;
										                $queryview = mysqli_query($koneksi, "SELECT s.no_surat, d.nama_daerah, s.nama, s.tgl_berangkat, s.tgl_kembali FROM sppd s JOIN daerah d on s.kode_daerah = d.kode_daerah");
										                while ($row = mysqli_fetch_assoc($queryview)) {
										                $tgl_berangkat = $row['tgl_berangkat'];
										                $tgl_kembali = $row['tgl_kembali'];	
										                $format1 = date('d-m-Y', strtotime($tgl_berangkat));
										                $format2 = date('d-m-Y', strtotime($tgl_kembali));		
										            ?>
										            <tr>
										            	<td>
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
											            <td><?php echo $no++;?></td>
											            <td><?php echo $row['no_surat'];?></td>
									                    <td><?php echo $row['nama'];?></td>
									                    <td><?php echo $row['nama_daerah'];?></td>
									                    <td><?php echo $format1 ?></td>
									                    <td><?php echo $format2 ?></td>
									                    <td>
									                    	<div class="action-buttons">
									                    		<a class="red" href="#">
																	<a href="#" id="detail" data-id="<?php echo $row['no_surat']; ?>"><i class="ace-icon fa fa-info bigger-130"></i></a>
																</a>
																<a class="green" href="#">
																	<a href="#" id="edit" data-id="<?php echo $row['no_surat']; ?>"><i class="ace-icon fa fa-edit bigger-130"></i></a>
																</a>
																<a class="red" href="#">
																	<a href="#" id="hapus" data-id="<?php echo $row['no_surat']; ?>"><i class="ace-icon fa fa-trash bigger-130"></i></a>
																</a>
																<a class="red" href="#">
																	<a href="Sppd/pdf.php?id=<?php echo $row['no_surat']; ?>" id="exportpdfsppd" target="_blank"><i class="ace-icon fa fa-file-pdf-o bigger-130"></i></a>
																</a>
																<a class="red" href="#">
																	<a href="Sppd/word.php?id=<?php echo $row['no_surat']; ?>" id="exportwordsppd" target="_blank"><i class="ace-icon fa fa-file-word-o bigger-130"></i></a>
																</a>
															</div>
									                    </td>
								                    </tr>
								                    <?php
                                  						}
                                  					?>     
												</tbody>
											</table>
											<hr>
											<h6>Keterangan Tombol Aksi :</h6>
											<div class="action-buttons">
												<a class="green" href="#">
													<a href="#"><i class="ace-icon fa fa-info bigger-130"></i> Tombol Untuk Lihat Detail</a>
												</a>
												<a class="green" href="#">
													<a href="#"><i class="ace-icon fa fa-edit bigger-130"></i> Tombol Untuk Edit Data</a>
												</a>
												<a class="red" href="#">
													<a href="#"><i class="ace-icon fa fa-trash bigger-130"></i> Tombol Untuk Hapus Data</a>
												</a>
												<br>
												<a class="red" href="#">
													<a href="#"><i class="ace-icon fa fa-file-pdf-o bigger-130"></i> 
														Tombol Untuk Cetak/Export PDF
													</a>
												</a>
												<a class="red" href="#">
													<a href="#"><i class="ace-icon fa fa-file-word-o bigger-130"></i> 
														Tombol Untuk Cetak/Export Word
													</a>
												</a>
											</div>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/pdfmake.min.js"></script>
		<script src="assets/js/vfs_fonts.js"></script>
		<script src="assets/js/jszip.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null,null,null,null,null,null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  } 
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);	
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
			})
		</script>					
		<!-- <script type="text/javascript">
			function print_d(){
						window.open("sppd/pdf.php","_blank");
					}
		</script>

		<script type="text/javascript">
			function print_a(){
						window.open("sppd/word.php","_blank");
					}
		</script>	 -->