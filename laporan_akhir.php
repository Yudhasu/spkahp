<?php 
session_start(); 
error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
	<title>Analitic Hierarchy Process</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	
<!--	<script src="http://code.jquery.com/jquery.js"></script> -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript"> 
			$(function(){
				var url = window.location.href; 
				$(".container a").each(function() {
					if(url == (this.href)) { 
						$(this).closest("li").addClass("active");
					}
				});
			});
	</script>		
  </head>
  <body>
  <div class="container">
	<?php include "menu.php"; ?>
	 		<div class="row-fluid">
			
				<div class="span12">
						<div class="alert alert-info">
						  <b>Laporan Akhir dari Pemilihan Jurusan</b>
						</div>
					
					<table class="table table-bordered">
						<tr bgcolor='#cecece'>
							<th>No</th>
							<th>Nama Siswa</th>
							<th>Nilai Akhir</th>
							<th>Jurusan</th>
						</tr>

							<?php
								include "koneksi.php";
								$mhs = mysql_query("SELECT * FROM siswa ORDER BY nis ASC");
								$no=1;
								while ($mh = mysql_fetch_array($mhs)){
									echo "
										<tr>
											<td>$no</td>
											<td>$mh[nama_siswa]</td>
											<td>$mh[NP]%</td>
											<td>$mh[jurusan]</td>
										</tr>
									";
								$no++; 
								}
							?>
					</table>
					<div class="alert alert-danger">
						 
						</div>
				</div>
			
	</div>
	
	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
  </div>
	
	
  </body>
</html>