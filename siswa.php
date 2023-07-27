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
						<h4><span class="pe">&nbsp;&nbsp;&nbsp;&nbsp;</span>Halaman Data mahasiswa</h4>
					<a href='insert_siswa.php'><input  class='btn btn-primary' type='button' value='Tambah Data'></a>
					<table class="table table-bordered">
						<tr bgcolor='#cecece'>
							<th>NIS</th>
							<th>Nama Siswa</th>
							<th>Jenis Kelamin</th>
							<th>Nilai Siswa Rata-Rata Rapor</th>
							
							
						</tr>
						<form method='POST' action='update-mahasiswa.php?mod=update'>
							<?php
								include "koneksi.php";
								$mhs = mysql_query("SELECT * FROM siswa");
								$no=1;
								while ($mh = mysql_fetch_array($mhs)){
									echo "
										<tr>
											<input name='id[$no]' style='width:93%' type='hidden' value='$mh[id_siswa]'>
											<td><input name='nis[$no]' style='width:93%' type='text' value='$mh[nis]'></td>
											<td><input name='nama_siswa[$no]' style='width:93%' type='text' value='$mh[nama_siswa]'></td>
											<td><input name='jk[$no]' style='width:93%' type='text' value='$mh[jk]'></td>
											<td>
											<select name='nilai[$no]'>
											";
											for ($i=1; $i<=4 ; $i++) { 
												# code...
												if ($i == 1) {
													# code...
													$nilai_rata2 = "< 70";
												}elseif ($i == 2) {
													# code...
													$nilai_rata2 = ">= 70";
												}elseif ($i == 3) {
													# code...
													$nilai_rata2 = ">= 80";
												}elseif ($i == 4) {
													# code...
													$nilai_rata2 = "> 90";
												}

												if ($mh['nilai_rapor'] == $i) {
													# code...
													echo "<option value='$i' selected>$nilai_rata2</option>";
												}else{
													echo "<option value='$i'>$nilai_rata2</option>";
												}
											}
											echo "
											<select>
											</td>
											
										</tr>
									";
								$no++; 
								}
								echo "<tr><td colspan='4'><input  class='btn btn-primary' type='submit' name='update' value='Update Data'></td></tr>";
							?>
						</form>
					</table>
				</div>
			
	</div>
	
	<div class="row-fluid">
		<?php include "footer.php"; ?>
	</div>
  </div>
	
	
  </body>
</html>