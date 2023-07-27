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
						  <b>Hasil Pengolahan</b>
						</div>
					
									<?php 
						include "koneksi.php";
						$kriteria1 = mysql_query("SELECT * FROM kriteria WHERE id_kriteria = '1'");
						$kriteria2 = mysql_query("SELECT * FROM kriteria WHERE id_kriteria = '2'");
						$kriteria3 = mysql_query("SELECT * FROM kriteria WHERE id_kriteria = '3'");
						$rkriteria1 = mysql_fetch_array($kriteria1);
						$rkriteria2 = mysql_fetch_array($kriteria2);
						$rkriteria3 = mysql_fetch_array($kriteria3);
						$alt1 = mysql_fetch_array(mysql_query("SELECT * FROM alternative WHERE id_alternative = '1'"));
						$alt2 = mysql_fetch_array(mysql_query("SELECT * FROM alternative WHERE id_alternative = '2'"));
						$alt3 = mysql_fetch_array(mysql_query("SELECT * FROM alternative WHERE id_alternative = '3'"));
						$alt4 = mysql_fetch_array(mysql_query("SELECT * FROM alternative WHERE id_alternative = '4'"));

								//kriteria	
									$nr1=$_POST['nr1'];
									$nr2=$_POST['nr2'];
									$ms1=$_POST['ms1'];

									$dec_nr1 = 1/$nr1;
									$dec_nr2 = 1/$nr2;
									$dec_ms1 = 1/$ms1;
									
									
									$num_dec_nr1 = number_format($dec_nr1, 2, '.', '');
									$num_dec_nr2 = number_format($dec_nr2, 2, '.', '');
									$num_dec_ms1 = number_format($dec_ms1, 2, '.', '');

									$jumlah1=1+$dec_nr1+$dec_nr2;
									$jumlah2=$nr1+1+$dec_ms1;
									$jumlah3=$nr2+$ms1+1;

									$num_jumlah1 = number_format($jumlah1, 4, '.', '');
									$num_jumlah2 = number_format($jumlah2, 4, '.', '');
									$num_jumlah3 = number_format($jumlah3, 4, '.', '');

									//Penjumlahan selesai
									//Prioritas
									$p11 = 1/$jumlah1;
									$p12 = $nr1/$jumlah2;
									$p13 = $nr2/$jumlah3;
									$p21 = $dec_nr1/$jumlah1;
									$p22 = 1/$jumlah2;
									$p23 = $ms1/$jumlah3;
									$p31 = $dec_nr2/$jumlah1;
									$p32 = $dec_ms1/$jumlah2;
									$p33 = 1/$jumlah3;

									$jmlp1 = $p11+$p12+$p13;
									$jmlp2 = $p21+$p22+$p23;
									$jmlp3 = $p31+$p32+$p33;

									$prioritas1 = $jmlp1/3;
									$prioritas2 = $jmlp2/3;
									$prioritas3 = $jmlp3/3;
									//output kriteria
									echo "
										<table border='1' align=center>
											<tr>
												<th colspan=4>Matriks Kriteria</th>
											</tr>
											<tr>
												<th width=10%>&nbsp;</th>
												<th width=10%>$rkriteria1[nama_kriteria]</th>
												<th width=10%>$rkriteria2[nama_kriteria]</th>
												<th width=10%>$rkriteria3[nama_kriteria]</th>
											</tr>
											<tr>
												<td><b>$rkriteria1[nama_kriteria]</b></td>
												<td>1</td> 
												<td>$nr1</td> 
												<td>$nr2</td> 
											</tr>
											<tr>
												<td><b>$rkriteria2[nama_kriteria]</b></td>
												<td>$num_dec_nr1</td> 
												<td>1</td> 
												<td>$ms1</td> 
											</tr>
											<tr>
												<td><b>$rkriteria3[nama_kriteria]</b></td> 
												<td>$num_dec_nr2</td>	
												<td>$num_dec_ms1</td> 
												<td>1</td>
											</tr>
											<tr>
												<td><b>Total</b></td>
												<td>$jumlah1</td>
												<td>$jumlah2</td>
												<td>$jumlah3</td>
											</tr>
										</table>

										<table border='1'>
											<tr>
												<th colspan=6>Matriks Bobot Prioritas</th>
											</tr>
											<tr>
												<th width=10%>&nbsp;</th>
												<th width=10%>$rkriteria1[nama_kriteria]</th>
												<th width=10%>$rkriteria2[nama_kriteria]</th>
												<th width=10%>$rkriteria3[nama_kriteria]</th>
												<th width=10%>Jumlah</th>
												<th width=10%>Prioritas</th>
											</tr>
											<tr>
												<td><b>$rkriteria1[nama_kriteria]</b></td>
												<td>$p11</td> 
												<td>$p12</td> 
												<td>$p13</td> 
												<td>$jmlp1</td>
												<td>$prioritas1</td>
											</tr>
											<tr>
												<td><b>$rkriteria2[nama_kriteria]</b></td>
												<td>$p21</td> 
												<td>$p22</td> 
												<td>$p23</td> 
												<td>$jmlp2</td>
												<td>$prioritas2</td>
											</tr>
											<tr>
												<td><b>$rkriteria3[nama_kriteria]</b></td> 
												<td>$p31</td> 
												<td>$p32</td> 
												<td>$p33</td> 
												<td>$jmlp3</td>
												<td>$prioritas3</td>
											</tr>
										</table>
									";
									//

									//Matriks Alternative Nilai Rapor

									$a1 = $_POST['a1']; 
									$a2 = $_POST['a2'];
									$a3 = $_POST['a3'];
									$b1 = $_POST['b1'];
									$b2 = $_POST['b2'];
									$c1 = $_POST['c1'];

									$dec_a1 = 1/$a1;
									$dec_a2 = 1/$a2;
									$dec_a3 = 1/$a3;
									$dec_b1 = 1/$b1;
									$dec_b2 = 1/$b2;
									$dec_c1 = 1/$c1;

									$jumlah_rapor1 = 1+$dec_a1+$dec_a2+$dec_a3;
									$jumlah_rapor2 = $a1+1+$dec_b1+$dec_b2;
									$jumlah_rapor3 = $a2+$b1+1+$dec_c1;
									$jumlah_rapor4 = $a3+$b2+$c1+1;

									//Prioritas

									$rapor_p11 = 1/$jumlah_rapor1;
									$rapor_p12 = $a1/$jumlah_rapor2;
									$rapor_p13 = $a2/$jumlah_rapor3;
									$rapor_p14 = $a3/$jumlah_rapor4;
									$rapor_p21 = $dec_a1/$jumlah_rapor1;
									$rapor_p22 = 1/$jumlah_rapor2;
									$rapor_p23 = $b1/$jumlah_rapor3;
									$rapor_p24 = $b2/$jumlah_rapor4;
									$rapor_p31 = $dec_a2/$jumlah_rapor1;
									$rapor_p32 = $dec_b1/$jumlah_rapor2;
									$rapor_p33 = 1/$jumlah_rapor3;
									$rapor_p34 = $c1/$jumlah_rapor4;
									$rapor_p41 = $dec_a3/$jumlah_rapor1;
									$rapor_p42 = $dec_b2/$jumlah_rapor2;
									$rapor_p43 = $dec_c1/$jumlah_rapor3;
									$rapor_p44 = 1/$jumlah_rapor4;

									$jumlah_raporp1 = $rapor_p11+$rapor_p12+$rapor_p13+$rapor_p14;
									$jumlah_raporp2 = $rapor_p21+$rapor_p22+$rapor_p23+$rapor_p24;
									$jumlah_raporp3 = $rapor_p31+$rapor_p32+$rapor_p33+$rapor_p34;
									$jumlah_raporp4 = $rapor_p41+$rapor_p42+$rapor_p43+$rapor_p44;

									$rapor_prioritas1 = $jumlah_raporp1/4;
									$rapor_prioritas2 = $jumlah_raporp2/4;
									$rapor_prioritas3 = $jumlah_raporp3/4;
									$rapor_prioritas4 = $jumlah_raporp4/4;

									$ps_rapor1 = $rapor_prioritas1/$rapor_prioritas1;
									$ps_rapor2 = $rapor_prioritas2/$rapor_prioritas1;
									$ps_rapor3 = $rapor_prioritas3/$rapor_prioritas1;
									$ps_rapor4 = $rapor_prioritas4/$rapor_prioritas1;
									
					

					echo "				<br><br>
										<table border='1' align=center>
											<tr>
												<th colspan=10>Perhitungan Nilai Rapor Siswa</th>
											</tr>
											<tr>
												<th width=10%>&nbsp;</th>
												<th width=10%>$alt1[nama_alternative]</th>
												<th width=10%>$alt2[nama_alternative]</th>
												<th width=10%>$alt3[nama_alternative]</th>
												<th width=10%>$alt4[nama_alternative]</th>
											</tr>
											<tr>
												<td><b>$alt1[nama_alternative]</b></td>
												<td>1</td> 
												<td>$a1</td>
												<td>$a2</td>
												<td>$a3</td>
											</tr>
											<tr>
												<td><b>$alt2[nama_alternative]</b></td>
												<td>$dec_a1</td>
												<td>1</td> 
												<td>$b1</td>
												<td>$b2</td>
											</tr>
											<tr>
												<td><b>$alt3[nama_alternative]</b></td>
												<td>$dec_a2</td>
												<td>$dec_b1</td> 
												<td>1</td>
												<td>$c1</td>
											</tr>
											<tr>
												<td><b>$alt4[nama_alternative]</b></td>
												<td>$dec_a3</td>
												<td>$dec_b2</td> 
												<td>$dec_c1</td>
												<td>1</td>
											</tr>
											<tr>
												<td><b>Total</b></td>
												<td>$jumlah_rapor1</td>
												<td>$jumlah_rapor2</td>
												<td>$jumlah_rapor3</td>
												<td>$jumlah_rapor4</td>
											</tr>
										</table>

										<table border='1' align=center>
											<tr>
												<th colspan=10>Prioritas Nilai Rapor Siswa </th>
											</tr>
											<tr>
												<th width=10%>&nbsp;</th>
												<th width=10%>$alt1[nama_alternative]</th>
												<th width=10%>$alt2[nama_alternative]</th>
												<th width=10%>$alt3[nama_alternative]</th>
												<th width=10%>$alt4[nama_alternative]</th>
												<th width=10%>Jumlah</th>
												<th width=10%>Prioritas</th>
												<th width=10%>Prioritas Subkriteria</th>
											</tr>
											<tr>
												<td><b>$alt1[nama_alternative]</b></td>
												<td>$rapor_p11</td> 
												<td>$rapor_p12</td> 
												<td>$rapor_p13</td>
												<td>$rapor_p14</td>
												<td>$jumlah_raporp1</td>
												<td>$rapor_prioritas1</td>
												<td>$ps_rapor1</td>
											</tr>
											<tr>
												<td><b>$alt2[nama_alternative]</b></td>
												<td>$rapor_p21</td> 
												<td>$rapor_p22</td> 
												<td>$rapor_p23</td>
												<td>$rapor_p24</td>
												<td>$jumlah_raporp2</td>
												<td>$rapor_prioritas2</td>
												<td>$ps_rapor2</td>
											</tr>
											<tr>
												<td><b>$alt3[nama_alternative]</b></td>
												<td>$rapor_p31</td> 
												<td>$rapor_p32</td> 
												<td>$rapor_p33</td>
												<td>$rapor_p34</td>
												<td>$jumlah_raporp3</td>
												<td>$rapor_prioritas3</td>
												<td>$ps_rapor3</td>
											</tr>
											<tr>
												<td><b>$alt4[nama_alternative]</b></td>
												<td>$rapor_p41</td> 
												<td>$rapor_p42</td> 
												<td>$rapor_p43</td>
												<td>$rapor_p44</td>
												<td>$jumlah_raporp4</td>
												<td>$rapor_prioritas4</td>
												<td>$ps_rapor4</td>
											</tr>
										</table>
									";					

									//Perhitungan alternativ minat siswa


									$aa1 = $_POST['aa1']; 
									$aa2 = $_POST['aa2'];
									$aa3 = $_POST['aa3'];
									$bb1 = $_POST['bb1'];
									$bb2 = $_POST['bb2'];
									$cc1 = $_POST['cc1'];

									$dec_aa1 = 1/$aa1;
									$dec_aa2 = 1/$aa2;
									$dec_aa3 = 1/$aa3;
									$dec_bb1 = 1/$bb1;
									$dec_bb2 = 1/$bb2;
									$dec_cc1 = 1/$cc1;

									$jumlah_siswa1 = 1+$dec_aa1+$dec_aa2+$dec_aa3;
									$jumlah_siswa2 = $aa1+1+$dec_bb1+$dec_bb2;
									$jumlah_siswa3 = $aa2+$bb1+1+$dec_cc1;
									$jumlah_siswa4 = $aa3+$bb2+$cc1+1;

									//Prioritas

									$siswa_p11 = 1/$jumlah_siswa1;
									$siswa_p12 = $aa1/$jumlah_siswa2;
									$siswa_p13 = $aa2/$jumlah_siswa3;
									$siswa_p14 = $aa3/$jumlah_siswa4;
									$siswa_p21 = $dec_aa1/$jumlah_siswa1;
									$siswa_p22 = 1/$jumlah_siswa2;
									$siswa_p23 = $bb1/$jumlah_siswa3;
									$siswa_p24 = $bb2/$jumlah_siswa4;
									$siswa_p31 = $dec_aa2/$jumlah_siswa1;
									$siswa_p32 = $dec_bb1/$jumlah_siswa2;
									$siswa_p33 = 1/$jumlah_siswa3;
									$siswa_p34 = $cc1/$jumlah_siswa4;
									$siswa_p41 = $dec_aa3/$jumlah_siswa1;
									$siswa_p42 = $dec_bb2/$jumlah_siswa2;
									$siswa_p43 = $dec_cc1/$jumlah_siswa3;
									$siswa_p44 = 1/$jumlah_siswa4;

									$jumlah_siswap1 = $siswa_p11+$siswa_p12+$siswa_p13+$siswa_p14;
									$jumlah_siswap2 = $siswa_p21+$siswa_p22+$siswa_p23+$siswa_p24;
									$jumlah_siswap3 = $siswa_p31+$siswa_p32+$siswa_p33+$siswa_p34;
									$jumlah_siswap4 = $siswa_p41+$siswa_p42+$siswa_p43+$siswa_p44;

									$siswa_prioritas1 = $jumlah_siswap1/4;
									$siswa_prioritas2 = $jumlah_siswap2/4;
									$siswa_prioritas3 = $jumlah_siswap3/4;
									$siswa_prioritas4 = $jumlah_siswap4/4;

									$ps_siswa1 = $siswa_prioritas1/$siswa_prioritas1;
									$ps_siswa2 = $siswa_prioritas2/$siswa_prioritas1;
									$ps_siswa3 = $siswa_prioritas3/$siswa_prioritas1;
									$ps_siswa4 = $siswa_prioritas4/$siswa_prioritas1;
					

					echo "				<br><br>
										<table border='1' align=center>
											<tr>
												<th colspan=10>Perhitungan Pemahaman Materi</th>
											</tr>
											<tr>
												<th width=10%>&nbsp;</th>
												<th width=10%>$alt1[nama_alternative]</th>
												<th width=10%>$alt2[nama_alternative]</th>
												<th width=10%>$alt3[nama_alternative]</th>
												<th width=10%>$alt4[nama_alternative]</th>
											</tr>
											<tr>
												<td><b>$alt1[nama_alternative]</b></td>
												<td>1</td> 
												<td>$aa1</td>
												<td>$aa2</td>
												<td>$aa3</td>
											</tr>
											<tr>
												<td><b>$alt2[nama_alternative]</b></td>
												<td>$dec_aa1</td>
												<td>1</td> 
												<td>$bb1</td>
												<td>$bb2</td>
											</tr>
											<tr>
												<td><b>$alt3[nama_alternative]</b></td>
												<td>$dec_aa2</td>
												<td>$dec_bb1</td> 
												<td>1</td>
												<td>$cc1</td>
											</tr>
											<tr>
												<td><b>$alt4[nama_alternative]</b></td>
												<td>$dec_aa3</td>
												<td>$dec_bb2</td> 
												<td>$dec_cc1</td>
												<td>1</td>
											</tr>
											<tr>
												<td><b>Total</b></td>
												<td>$jumlah_siswa1</td>
												<td>$jumlah_siswa2</td>
												<td>$jumlah_siswa3</td>
												<td>$jumlah_siswa4</td>
											</tr>
										</table>

										<table border='1' align=center>
											<tr>
												<th colspan=10>Prioritas Pemahaman Materi </th>
											</tr>
											<tr>
												<th width=10%>&nbsp;</th>
												<th width=10%>$alt1[nama_alternative]</th>
												<th width=10%>$alt2[nama_alternative]</th>
												<th width=10%>$alt3[nama_alternative]</th>
												<th width=10%>$alt4[nama_alternative]</th>
												<th width=10%>Jumlah</th>
												<th width=10%>Prioritas</th>
												<th width=10%>Prioritas Subkriteria</th>
											</tr>
											<tr>
												<td><b>$alt1[nama_alternative]</b></td>
												<td>$siswa_p11</td> 
												<td>$siswa_p12</td> 
												<td>$siswa_p13</td>
												<td>$siswa_p14</td>
												<td>$jumlah_siswap1</td>
												<td>$siswa_prioritas1</td>
												<td>$ps_siswa1</td>
											</tr>
											<tr>
												<td><b>$alt2[nama_alternative]</b></td>
												<td>$siswa_p21</td> 
												<td>$siswa_p22</td> 
												<td>$siswa_p23</td>
												<td>$siswa_p24</td>
												<td>$jumlah_siswap2</td>
												<td>$siswa_prioritas2</td>
												<td>$ps_siswa2</td>
											</tr>
											<tr>
												<td><b>$alt3[nama_alternative]</b></td>
												<td>$siswa_p31</td> 
												<td>$siswa_p32</td> 
												<td>$siswa_p33</td>
												<td>$siswa_p34</td>
												<td>$jumlah_siswap3</td>
												<td>$siswa_prioritas3</td>
												<td>$ps_siswa3</td>
											</tr>
											<tr>
												<td><b>$alt4[nama_alternative]</b></td>
												<td>$siswa_p41</td> 
												<td>$siswa_p42</td> 
												<td>$siswa_p43</td>
												<td>$siswa_p44</td>
												<td>$jumlah_siswap4</td>
												<td>$siswa_prioritas4</td>
												<td>$ps_siswa4</td>
											</tr>
										</table>
									";					


									//Perhitungan alternativ Saran Orang Tua

									$aaa1 = $_POST['aaa1']; 
									$aaa2 = $_POST['aaa2'];
									$aaa3 = $_POST['aaa3'];
									$bbb1 = $_POST['bbb1'];
									$bbb2 = $_POST['bbb2'];
									$ccc1 = $_POST['ccc1'];

									$dec_aaa1 = 1/$aaa1;
									$dec_aaa2 = 1/$aaa2;
									$dec_aaa3 = 1/$aaa3;
									$dec_bbb1 = 1/$bbb1;
									$dec_bbb2 = 1/$bbb2;
									$dec_ccc1 = 1/$ccc1;

									$jumlah_minat1 = 1+$dec_aaa1+$dec_aaa2+$dec_aaa3;
									$jumlah_minat2 = $aaa1+1+$dec_bbb1+$dec_bbb2;
									$jumlah_minat3 = $aaa2+$bbb1+1+$dec_ccc1;
									$jumlah_minat4 = $aaa3+$bbb2+$ccc1+1;

									//Prioritas

									$minat_p11 = 1/$jumlah_minat1;
									$minat_p12 = $aaa1/$jumlah_minat2;
									$minat_p13 = $aaa2/$jumlah_minat3;
									$minat_p14 = $aaa3/$jumlah_minat4;
									$minat_p21 = $dec_aaa1/$jumlah_minat1;
									$minat_p22 = 1/$jumlah_minat2;
									$minat_p23 = $bbb1/$jumlah_minat3;
									$minat_p24 = $bbb2/$jumlah_minat4;
									$minat_p31 = $dec_aaa2/$jumlah_minat1;
									$minat_p32 = $dec_bbb1/$jumlah_minat2;
									$minat_p33 = 1/$jumlah_minat3;
									$minat_p34 = $ccc1/$jumlah_minat4;
									$minat_p41 = $dec_aaa3/$jumlah_minat1;
									$minat_p42 = $dec_bbb2/$jumlah_minat2;
									$minat_p43 = $dec_ccc1/$jumlah_minat3;
									$minat_p44 = 1/$jumlah_minat4;

									$jumlah_minatp1 = $minat_p11+$minat_p12+$minat_p13+$minat_p14;
									$jumlah_minatp2 = $minat_p21+$minat_p22+$minat_p23+$minat_p24;
									$jumlah_minatp3 = $minat_p31+$minat_p32+$minat_p33+$minat_p34;
									$jumlah_minatp4 = $minat_p41+$minat_p42+$minat_p43+$minat_p44;

									$minat_prioritas1 = $jumlah_minatp1/4;
									$minat_prioritas2 = $jumlah_minatp2/4;
									$minat_prioritas3 = $jumlah_minatp3/4;
									$minat_prioritas4 = $jumlah_minatp4/4;

									$ps_minat1 = $minat_prioritas1/$minat_prioritas1;
									$ps_minat2 = $minat_prioritas2/$minat_prioritas1;
									$ps_minat3 = $minat_prioritas3/$minat_prioritas1;
									$ps_minat4 = $minat_prioritas4/$minat_prioritas1;
					

					echo "				<br><br>
										<table border='1' align=center>
											<tr>
												<th colspan=10>Perhitungan Minat Siswa</th>
											</tr>
											<tr>
												<th width=10%>&nbsp;</th>
												<th width=10%>$alt1[nama_alternative]</th>
												<th width=10%>$alt2[nama_alternative]</th>
												<th width=10%>$alt3[nama_alternative]</th>
												<th width=10%>$alt4[nama_alternative]</th>
											</tr>
											<tr>
												<td><b>$alt1[nama_alternative]</b></td>
												<td>1</td> 
												<td>$aaa1</td>
												<td>$aaa2</td>
												<td>$aaa3</td>
											</tr>
											<tr>
												<td><b>$alt2[nama_alternative]</b></td>
												<td>$dec_aaa1</td>
												<td>1</td> 
												<td>$bbb1</td>
												<td>$bbb2</td>
											</tr>
											<tr>
												<td><b>$alt3[nama_alternative]</b></td>
												<td>$dec_aaa2</td>
												<td>$dec_bbb1</td> 
												<td>1</td>
												<td>$ccc1</td>
											</tr>
											<tr>
												<td><b>$alt4[nama_alternative]</b></td>
												<td>$dec_aaa3</td>
												<td>$dec_bbb2</td> 
												<td>$dec_ccc1</td>
												<td>1</td>
											</tr>
											<tr>
												<td><b>Total</b></td>
												<td>$jumlah_minat1</td>
												<td>$jumlah_minat2</td>
												<td>$jumlah_minat3</td>
												<td>$jumlah_minat4</td>
											</tr>
										</table>

										<table border='1' align=center>
											<tr>
												<th colspan=10>Prioritas Minat Siswa </th>
											</tr>
											<tr>
												<th width=10%>&nbsp;</th>
												<th width=10%>$alt1[nama_alternative]</th>
												<th width=10%>$alt2[nama_alternative]</th>
												<th width=10%>$alt3[nama_alternative]</th>
												<th width=10%>$alt4[nama_alternative]</th>
												<th width=10%>Jumlah</th>
												<th width=10%>Prioritas</th>
												<th width=10%>Prioritas Subkriteria</th>
											</tr>
											<tr>
												<td><b>$alt1[nama_alternative]</b></td>
												<td>$minat_p11</td> 
												<td>$minat_p12</td> 
												<td>$minat_p13</td>
												<td>$minat_p14</td>
												<td>$jumlah_minatp1</td>
												<td>$minat_prioritas1</td>
												<td>$ps_minat1</td>
											</tr>
											<tr>
												<td><b>$alt2[nama_alternative]</b></td>
												<td>$minat_p21</td> 
												<td>$minat_p22</td> 
												<td>$minat_p23</td>
												<td>$minat_p24</td>
												<td>$jumlah_minatp2</td>
												<td>$minat_prioritas2</td>
												<td>$ps_minat2</td>
											</tr>
											<tr>
												<td><b>$alt3[nama_alternative]</b></td>
												<td>$minat_p31</td> 
												<td>$minat_p32</td> 
												<td>$minat_p33</td>
												<td>$minat_p34</td>
												<td>$jumlah_minatp3</td>
												<td>$minat_prioritas3</td>
												<td>$ps_minat3</td>
											</tr>
											<tr>
												<td><b>$alt4[nama_alternative]</b></td>
												<td>$minat_p41</td> 
												<td>$minat_p42</td> 
												<td>$minat_p43</td>
												<td>$minat_p44</td>
												<td>$jumlah_minatp4</td>
												<td>$minat_prioritas4</td>
												<td>$ps_minat4</td>
											</tr>
										</table>
									";					

					mysql_query("UPDATE val SET value = '$_POST[nr1]' WHERE id_val='1'");	
					mysql_query("UPDATE val SET value = '$_POST[nr2]' WHERE id_val='2'");
					mysql_query("UPDATE val SET value = '$_POST[ms1]' WHERE id_val='3'");
					mysql_query("UPDATE val SET value = '$_POST[a1]' WHERE id_val='4'");
					mysql_query("UPDATE val SET value = '$_POST[a2]' WHERE id_val='5'");
					mysql_query("UPDATE val SET value = '$_POST[a3]' WHERE id_val='6'");
					mysql_query("UPDATE val SET value = '$_POST[b1]' WHERE id_val='7'");
					mysql_query("UPDATE val SET value = '$_POST[b2]' WHERE id_val='8'");
					mysql_query("UPDATE val SET value = '$_POST[c1]' WHERE id_val='9'");
					mysql_query("UPDATE val SET value = '$_POST[aa1]' WHERE id_val='10'");
					mysql_query("UPDATE val SET value = '$_POST[aa2]' WHERE id_val='11'");
					mysql_query("UPDATE val SET value = '$_POST[aa3]' WHERE id_val='12'");
					mysql_query("UPDATE val SET value = '$_POST[bb1]' WHERE id_val='13'");
					mysql_query("UPDATE val SET value = '$_POST[bb2]' WHERE id_val='14'");
					mysql_query("UPDATE val SET value = '$_POST[cc1]' WHERE id_val='15'");
					mysql_query("UPDATE val SET value = '$_POST[aaa1]' WHERE id_val='16'");
					mysql_query("UPDATE val SET value = '$_POST[aaa2]' WHERE id_val='17'");
					mysql_query("UPDATE val SET value = '$_POST[aaa3]' WHERE id_val='18'");
					mysql_query("UPDATE val SET value = '$_POST[bbb1]' WHERE id_val='19'");
					mysql_query("UPDATE val SET value = '$_POST[bbb2]' WHERE id_val='20'");
					mysql_query("UPDATE val SET value = '$_POST[ccc1]' WHERE id_val='21'");

					mysql_query("UPDATE prioritas SET nilai = '$prioritas1' WHERE id_prioritas='1'");
					mysql_query("UPDATE prioritas SET nilai = '$prioritas2' WHERE id_prioritas='2'");
					mysql_query("UPDATE prioritas SET nilai = '$prioritas3' WHERE id_prioritas='3'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_rapor1' WHERE id_prioritas='4'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_rapor2' WHERE id_prioritas='5'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_rapor3' WHERE id_prioritas='6'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_rapor4' WHERE id_prioritas='7'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_siswa1' WHERE id_prioritas='8'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_siswa2' WHERE id_prioritas='9'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_siswa3' WHERE id_prioritas='10'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_siswa4' WHERE id_prioritas='11'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_minat1' WHERE id_prioritas='12'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_minat2' WHERE id_prioritas='13'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_minat3' WHERE id_prioritas='14'");
					mysql_query("UPDATE prioritas SET nilai = '$ps_minat4' WHERE id_prioritas='15'");
					?>

					<div class="alert alert-danger">
						  Data Konsultasi anda Sengaja tidak kami simpan pada halaman ini, takutnya nanti terjadi penumpukan data yang asal-asalan.
						</div>
				</div>
			
	</div>
	
	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
  </div>
	
	
  </body>
</html>