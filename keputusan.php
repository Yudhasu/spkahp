<?php 
session_start(); 

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
						  <b>Keputusan Akhir</b>
						</div>
<?php
	$prioritas_kriteria1 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_kriteria1'"));
	$prioritas_kriteria2 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_kriteria2'"));
	$prioritas_kriteria3 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_kriteria3'"));
	$prioritas_rapor1 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_rapor1'"));
	$prioritas_rapor2 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_rapor2'"));
	$prioritas_rapor3 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_rapor3'"));
	$prioritas_rapor4 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_rapor4'"));
	$prioritas_materi1 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_materi1'"));
	$prioritas_materi2 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_materi2'"));
	$prioritas_materi3 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_materi3'"));
	$prioritas_materi4 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_materi4'"));
	$prioritas_minat1 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_minat1'"));
	$prioritas_minat2 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_minat2'"));
	$prioritas_minat3 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_minat3'"));
	$prioritas_minat4 = mysql_fetch_array(mysql_query("SELECT * FROM prioritas WHERE field = 'prioritas_minat4'"));

	$nilai_rapor = mysql_fetch_array(mysql_query("SELECT nilai_rapor FROM siswa WHERE nis = '$_SESSION[passuser]'"));
	if ($nilai_rapor['nilai_rapor'] == '4') {
		# code...
			$nilai_rapor_akhir = $prioritas_rapor1['nilai']*$prioritas_kriteria1['nilai'];  
	}elseif ($nilai_rapor['nilai_rapor'] == '3') {
		# code...
			$nilai_rapor_akhir = $prioritas_rapor2['nilai']*$prioritas_kriteria1['nilai'];
	}elseif ($nilai_rapor['nilai_rapor'] == '2') {
		# code...
			$nilai_rapor_akhir = $prioritas_rapor3['nilai']*$prioritas_kriteria1['nilai'];
	}else{
		$nilai_rapor_akhir = $prioritas_rapor4['nilai']*$prioritas_kriteria1['nilai'];
	}


	$materi_mia = mysql_fetch_array(mysql_query("SELECT materi_mia FROM siswa WHERE nis = '$_SESSION[passuser]'"));
	if ($materi_mia['materi_mia']>90) {
		# code...
		$nilai_materi_mia = $prioritas_materi1['nilai']*$prioritas_kriteria2['nilai'];
	}elseif ($materi_mia['materi_mia'] >= 80) {
		# code...
		$nilai_materi_mia = $prioritas_materi2['nilai']*$prioritas_kriteria2['nilai'];
	}elseif ($materi_mia['materi_mia']>=70) {
		# code...
		$nilai_materi_mia = $prioritas_materi3['nilai']*$prioritas_kriteria2['nilai'];
	}else{
		$nilai_materi_mia = $prioritas_materi4['nilai']*$prioritas_kriteria2['nilai'];
	}
	$materi_iis = mysql_fetch_array(mysql_query("SELECT materi_iis FROM siswa WHERE nis = '$_SESSION[passuser]'"));
	if ($materi_iis['materi_iis']>90) {
		# code...
		$nilai_materi_iis = $prioritas_materi1['nilai']*$prioritas_kriteria2['nilai'];
	}elseif ($materi_iis['materi_iis'] >= 80) {
		# code...
		$nilai_materi_iis = $prioritas_materi2['nilai']*$prioritas_kriteria2['nilai'];
	}elseif ($materi_iis['materi_iis']>=70) {
		# code...
		$nilai_materi_iis = $prioritas_materi3['nilai']*$prioritas_kriteria2['nilai'];
	}else{
		$nilai_materi_iis = $prioritas_materi4['nilai']*$prioritas_kriteria2['nilai'];
	}


	$minat_mia = mysql_fetch_array(mysql_query("SELECT minat_mia FROM siswa WHERE nis = '$_SESSION[passuser]'"));
	if ($minat_mia['minat_mia']>90) {
		# code...
		$nilai_minat_mia = $prioritas_minat1['nilai']*$prioritas_kriteria3['nilai'];
	}elseif ($minat_mia['minat_mia']>=80) {
		# code...
		$nilai_minat_mia = $prioritas_minat2['nilai']*$prioritas_kriteria3['nilai'];
	}elseif ($minat_mia['minat_mia']>=70) {
		# code...
		$nilai_minat_mia = $prioritas_minat3['nilai']*$prioritas_kriteria3['nilai'];
	}else{
		$nilai_minat_mia = $prioritas_minat4['nilai']*$prioritas_kriteria3['nilai'];
	}
	$minat_iis = mysql_fetch_array(mysql_query("SELECT minat_iis FROM siswa WHERE nis = '$_SESSION[passuser]'"));
	if ($minat_iis['minat_iis']>90) {
		# code...
		$nilai_minat_iis = $prioritas_minat1['nilai']*$prioritas_kriteria3['nilai'];
	}elseif ($minat_iis['minat_iis']>=80) {
		# code...
		$nilai_minat_iis = $prioritas_minat2['nilai']*$prioritas_kriteria3['nilai'];
	}elseif ($minat_iis['minat_iis']>=70) {
		# code...
		$nilai_minat_iis = $prioritas_minat3['nilai']*$prioritas_kriteria3['nilai'];
	}else{
		$nilai_minat_iis = $prioritas_minat4['nilai']*$prioritas_kriteria3['nilai'];
	}
	$total_mia = $nilai_rapor_akhir+$nilai_materi_mia+$nilai_minat_mia;
	$total_iis = $nilai_rapor_akhir+$nilai_materi_iis+$nilai_minat_iis;
?>
<!--	<table width="100%" border="1">
		<tr>
			<td>&nbsp;</td>
			<td>NIlai Rapor</td>
			<td>Pemahaman Materi</td>
			<td>Minat Siswa</td>
			<td>Total</td>
		</tr>
		<tr>
			<td>MIA</td>
			<td><?php echo "$nilai_rapor_akhir"; ?></td>
			<td><?php echo "$nilai_materi_mia"; ?></td>
			<td><?php echo "$nilai_minat_mia"; ?></td>
			<td><?php echo "$total_mia"; ?></td>
		</tr>
		<tr>
			<td>IIS</td>
			<td><?php echo "$nilai_rapor_akhir"; ?></td>
			<td><?php echo "$nilai_materi_iis"; ?></td>
			<td><?php echo "$nilai_minat_iis"; ?></td>
			<td><?php echo "$total_iis"; ?></td>
		</tr>
	</table> -->
	<?php
	$final = max($total_mia, $total_iis);
	$num_final = number_format($final, 2, '.', '');
	$num_final = $final*100;
	$num_final = round($num_final, 2);
	if ($final == $total_mia) {
		# code...
		$jurusan = "Rekayasa Keamanan Siber";
	}else{
		$jurusan = "Teknologi Rekayasa Multimedia";
	}
	$siswa = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE nis = '$_SESSION[passuser]'"));
	?>
	<table width="100%" border="1">
		<tr>
			<th colspan="4" height="50px">Keterangan</th>
		</tr>
		<tr>
			<th>Nis</th>
			<th>Nama</th>
			<th>Nilai</th>
			<th>Jurusan</th>
		</tr>
			<td align="center"><?php echo "$siswa[nis]"; ?></td>
			<td><?php echo "$siswa[nama_siswa]"; ?></td>
			<td align="center"><?php echo "$num_final%"; ?></td>
			<td align="center"><?php echo "$jurusan"; ?></td>
		<tr>

		</tr>
	</table>
	<?php
		mysql_query("UPDATE siswa SET NP = '$num_final', jurusan = '$jurusan' WHERE nis = '$_SESSION[passuser]'");
	?>
				</div>
			
	</div>
	
	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
  </div>
	
	
  </body>
</html>




