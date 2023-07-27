<?php 
session_start(); 
error_reporting(0);
include "koneksi.php";
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
						  <b>Minat Siswa</b>
						</div>
<form action="" method="POST">
<b>Rekayasa Keamanan Siber</b>
<hr>
1. apakah anda buta warna?<br>
<input type="radio" name="minat1" value="A">a. saya tidak buta warna<br>
<input type="radio" name="minat1" value="B">b. ya saya buta warna<br>

2. Diantara pilihan berikut Mata pelajaran manakah yang anda sukai?<br>
<input type="checkbox" name="minat2" value="20">jaringan<br>
<input type="checkbox" name="minat3" value="20">keamanan<br>
<input type="checkbox" name="minat4" value="20">web<br>
<input type="checkbox" name="minat5" value="20">Kimia<br>
<br>
<br>
<b>Teknologi Rekayasa Multimedia</b>
<hr>
3. apakah anda buta warna?<br>
<input type="radio" name="minat6" value="A">a. saya tidak buta warna<br>
<input type="radio" name="minat6" value="B">b. ya saya buta warna<br> 

4. Diantara pilihan berikut Mata pelajaran manakah yang anda sukai?<br>
<input type="checkbox" name="minat7" value="20">desain<br>
<input type="checkbox" name="minat8" value="20">fotografi<br>
<input type="checkbox" name="minat9" value="20">Ekonomi<br>
<input type="checkbox" name="minat10" value="20">Sosiologi<br>
<br>
<br>
<input type="submit" name="ok" value="Lanjut">
</form>
<?php
	if (isset($_POST['ok'])) {
		# code...
		if ($_POST['minat1']=='A') {
			# code...
			$nilai_minat1 = 20;
		}else{
			$nilai_minat1 = 0;
		}
		$nilai_minat2 = $_POST['minat2'];
		$nilai_minat3 = $_POST['minat3'];
		$nilai_minat4 = $_POST['minat4'];
		$nilai_minat5 = $_POST['minat5'];

		if ($_POST['minat6']=='A') {
			# code...
			$nilai_minat6 = 20;
		}else{
			$nilai_minat6 = 0;
		}
		$nilai_minat7 = $_POST['minat7'];
		$nilai_minat8 = $_POST['minat8'];
		$nilai_minat9 = $_POST['minat9'];
		$nilai_minat10 = $_POST['minat10'];

		$total_minat_mia = $nilai_minat1+$nilai_minat2+$nilai_minat3+$nilai_minat4+$nilai_minat5;
		$total_minat_iis = $nilai_minat6+$nilai_minat7+$nilai_minat8+$nilai_minat9+$nilai_minat10;

		mysql_query("UPDATE siswa SET minat_mia = '$total_minat_mia', minat_iis = '$total_minat_iis' WHERE nis = '$_SESSION[passuser]'");
		echo "<script>window.location='keputusan.php'</script>";
	}
?>
				</div>
			
	</div>
	
	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
  </div>
	
	
  </body>
</html>




