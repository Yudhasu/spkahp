<?php 
session_start(); 
error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
	<title>Beasiswa - Analitic Hierarchy Process</title>
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
						  <b>Masukan Data Siswa</b>
						</div>
					<form method='POST' action='update-mahasiswa.php?mod=tambah'>
					<table class="table table-bordered">
						<tr>
							<td>NIS</td>
							<td><input type='text' name='nis'></td>
						</tr>
						<tr>
							<td>Nama Siswa</td>
							<td><input type='text' name='nama'></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td><input type='radio' name='jk' value='L'>Laki-Laki
								<input type='radio' name='jk' value='P'>Perempuan 
							</td>
						</tr>
						<tr>
							<td>Nilai Rapor</td>
							<td>
								<select value='nilai'>
									<option value=''>-Pilih-Nilai-</option>
									<option value='1'> Kurang Dari 70  </option>
									<option value='2'> 70 sampai 80 </option>
									<option value='3'> 80 sampai 90 </option>
									<option value='4'>Besar dari 90 </option>
								</select>
							</td>
						</tr> 
				<!--		
						<tr>
							<td>Saran Ortu</td>
							<td>
								<select>
									<option> -Pilih-Saran- </option>
									<option> MIA</option>
									<option> IIS </option>
									<option> Tidak tahu </option>
								</select>
							</td>
						</tr> -->
							<tr><td colspan='2'><input  class='btn btn-primary' type='submit' name='tambah' value='Tambah Data'></td></tr>
						
					</table>
					</form>
				</div>
			
	</div>
	
	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
  </div>
	
	
  </body>
</html>




