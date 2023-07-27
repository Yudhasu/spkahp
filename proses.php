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
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/highcharts.js" type="text/javascript"></script>
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
					<div class="tabbable"> <!-- Only required for left/right tabs -->
					  <ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Pair Comparation Kriteria</a></li>
						<li><a href="#tab2" data-toggle="tab">Pair Comparation 1</a></li>
						<li><a href="#tab3" data-toggle="tab">Pair Comparation 2</a></li>
						<li><a href="#tab4" data-toggle="tab">Pair Comparation 3</a></li>
					  </ul>
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
						$renr1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'nr1'"));
						$renr2 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'nr2'"));
						$rems1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'ms1'"));
						$rea1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'a1'"));
						$rea2 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'a2'"));
						$rea3 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'a3'"));
						$reb1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'b1'"));
						$reb2 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'b2'"));
						$rec1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'c1'"));
						$reaa1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'aa1'"));
						$reaa2 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'aa2'"));
						$reaa3 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'aa3'"));
						$rebb1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'bb1'"));
						$rebb2 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'bb2'"));
						$recc1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'cc1'"));
						$reaaa1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'aaa1'"));
						$reaaa2 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'aaa2'"));
						$reaaa3 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'aaa3'"));
						$rebbb1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'bbb1'"));
						$rebbb2 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'bbb2'"));
						$reccc1 = mysql_fetch_array(mysql_query("SELECT * FROM val WHERE field = 'ccc1'"));
					?>
						  <div class="tab-content">
							<div class="tab-pane active" id="tab1">
							Matriks Kriteria
							<form action="perhitungan.php" method="POST">
							  <table class="table table-bordered">
							  	<tr>
									<td></td>
                                    <td><?php echo "$rkriteria1[nama_kriteria]"; ?></td>
									<td><?php echo "$rkriteria2[nama_kriteria]"; ?></td>
									<td><?php echo "$rkriteria3[nama_kriteria]"; ?></td>
								</tr>
								<tr>
									<td><?php echo "$rkriteria1[nama_kriteria]"; ?></td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><select name="nr1" class="span12" >
										<?php
											$renr1 = $renr1['value'];
											for ($nr1=1; $nr1<=9 ; $nr1++) { 
												# code...
												if ($nr1 == $renr1) {
													# code...
													echo "<option value='$nr1' selected>$nr1</option>";
												}else{
													echo "<option value='$nr1'>$nr1</option>";
												}
												
											}
										?>
									</select></td>
									<td><select name="nr2" class="span12" >
										<?php
											$renr2 = $renr2['value'];
											for ($nr2=1; $nr2<=9 ; $nr2++) { 
												# code...
												if ($nr2 == $renr2) {
													# code...
													echo "<option value='$nr2' selected>$nr2</option>";
												}else{
												echo "<option value='$nr2'>$nr2</option>";
												}
											}
										?>
									</select></td>
								</tr>
								<tr>
									<td><?php echo "$rkriteria2[nama_kriteria]"; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><select name="ms1" class="span12" >
										<?php
											$rems1 = $rems1['value'];
											for ($ms1=1; $ms1<=9 ; $ms1++) { 
												# code...
												if ($ms1 == $rems1) {
													# code...
													echo "<option value='$ms1' selected>$ms1</option>";
												}else{
													echo "<option value='$ms1'>$ms1</option>";
												}
												
											}
										?>
									</select></td>
								</tr>
								<tr>
									<td><?php echo "$rkriteria3[nama_kriteria]"; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
								</tr>
								
							  </table>
						
												 
							</div>
							
							<!--  Ke 2!-->
							<div class="tab-pane" id="tab2">
							
							 <b>Matriks  Subkriteria NILAI RATA-RATA RAPOR</b>
							  <table class="table table-bordered">
								<tr>
									<td width="100px"></td>
									<td><?php echo $alt1['nama_alternative']; ?></td>
									<td><?php echo $alt2['nama_alternative']; ?></td>
									<td><?php echo $alt3['nama_alternative']; ?></td>
									<td><?php echo $alt4['nama_alternative']; ?></td>
								</tr>
								<tr>
									<td><?php echo $alt1['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><select name="a1" class="span12" >
										<?php
											$rea1 = $rea1['value'];
											for ($a1=1; $a1<=9 ; $a1++) { 
												# code...
												if ($a1 == $rea1) {
													# code...
													echo "<option value='$a1' selected>$a1</option>";
												}else{
												echo "<option value='$a1'>$a1</option>";
												}
											}
										?>
									</select></td>
									<td><select name="a2" class="span12" >
										<?php
											$rea2 = $rea2['value'];
											for ($a2=1; $a2<=9 ; $a2++) { 
												# code...
												if ($a2 == $rea2) {
													# code...
													echo "<option value='$a2' selected>$a2</option>";
												}else{
												echo "<option value='$a2'>$a2</option>";
												}
											}
										?>
									</select></td>
									<td><select name="a3" class="span12" >
										<?php
											$rea3 = $rea3['value'];
											for ($a3=1; $a3<=9 ; $a3++) { 
												# code...
												if ($a3 == $rea3) {
													# code...
													echo "<option value='$a3' selected>$a3</option>";
												}else{
												echo "<option value='$a3'>$a3</option>";
												}
											}
										?>
									</select></td>
								</tr>
									<td><?php echo $alt2['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="1" disabled class="span12" /></td>
									<td><select name="b1" class="span12" >
										<?php
											$reb1 = $reb1['value'];
											for ($b1=1; $b1<=9 ; $b1++) { 
												# code...
												if ($b1 == $reb1) {
													# code...
													echo "<option value='$b1' selected>$b1</option>";
												}else{
												echo "<option value='$b1'>$b1</option>";
											}
											}
										?>
									</select></td>
									<td><select name="b2" class="span12" >
										<?php
											$reb2 = $reb2['value'];
											for ($b2=1; $b2<=9 ; $b2++) { 
												# code...
												if ($b2 == $reb2) {
													# code...
													echo "<option value='$b2' selected>$b2</option>";
												}else{
												echo "<option value='$b2'>$b2</option>";
											}
											}
										?>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $alt3['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="1" disabled class="span12"/></td>
									<td><select name="c1" class="span12" >
										<?php
											$rec1 = $rec1['value'];
											for ($c1=1; $c1<=9 ; $c1++) { 
												# code...
												if ($c1 == $rec1) {
													# code...
													echo "<option value='$c1' selected>$c1</option>";
												}else{
												echo "<option value='$c1'>$c1</option>";
											}
											}
										?>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $ralt4['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
									</select></td>
								</tr>
							  </table>
							 
						
							
							</div>
							<div class="tab-pane" id="tab3">
						
							 <b>Matriks Subkriteria NILAI SISWA</b>
							 
							  <table class="table table-bordered">
								<tr>
									<td width="100px"></td>
									<td><?php echo $alt1['nama_alternative']; ?></td>
									<td><?php echo $alt2['nama_alternative']; ?></td>
									<td><?php echo $alt3['nama_alternative']; ?></td>
									<td><?php echo $alt4['nama_alternative']; ?></td>
								</tr>
								<tr>
									<td><?php echo $alt1['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><select name="aa1" class="span12" >
										<?php
											$reaa1 = $reaa1['value'];
											for ($aa1=1; $aa1<=9 ; $aa1++) { 
												# code...
												if ($aa1 == $reaa1) {
													# code...
													echo "<option value='$aa1' selected>$aa1</option>";
												}else{
												echo "<option value='$aa1'>$aa1</option>";
											}
											}
										?>
									</select></td>
									<td><select name="aa2" class="span12" >
										<?php
											$reaa2 = $reaa2['value'];
											for ($aa2=1; $aa2<=9 ; $aa2++) { 
												# code...
												if ($aa2 == $reaa2) {
													# code...
													echo "<option value='$aa2' selected>$aa2</option>";
												}
												echo "<option value='$aa2'>$aa2</option>";
											}
										?>
									</select></td>
									<td><select name="aa3" class="span12" >
										<?php
											$reaa3 = $reaa3['value'];
											for ($aa3=1; $aa3<=9 ; $aa3++) { 
												# code...
												if ($aa3 == $reaa3) {
													# code...
													echo "<option value='$aa3' selected>$aa3</option>";
												}else{
												echo "<option value='$aa3'>$aa3</option>";
											}
											}
										?>
									</select></td>
								</tr>
									<td><?php echo $alt2['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="1" disabled class="span12" /></td>
									<td><select name="bb1" class="span12" >
										<?php
											$rebb1 = $rebb1['value'];
											for ($bb1=1; $bb1<=9 ; $bb1++) { 
												# code...
												if ($bb1 == $rebb1) {
													# code...
													echo "<option value='$bb1' selected>$bb1</option>";
												}else{
												echo "<option value='$bb1'>$bb1</option>";
											}
											}
										?>
									</select></td>
									<td><select name="bb2" class="span12" >
										<?php
											$rebb2 = $rebb2['value'];
											for ($bb2=1; $bb2<=9 ; $bb2++) { 
												# code...
												if ($bb2 == $rebb2) {
													# code...
													echo "<option value='$bb2' selected>$bb2</option>";
												}else{
												echo "<option value='$bb2'>$bb2</option>";
											}
											}
										?>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $alt3['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="1" disabled class="span12"/></td>
									<td><select name="cc1" class="span12" >
										<?php
											$recc1 = $recc1['value'];
											for ($cc1=1; $cc1<=9 ; $cc1++) { 
												# code...
												if ($cc1 == $recc1) {
													# code...
													echo "<option value='$cc1' selected>$cc1</option>";
												}else{
												echo "<option value='$cc1'>$cc1</option>";
											}
											}
										?>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $ralt4['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
									</select></td>
								</tr>
							  </table>
							
							 
							</div>
							
							<div class="tab-pane" id="tab4">
						
							 <b>Matriks Subkriteria Minat Siswa</b>
							 <table class="table table-bordered">
								<tr>
									<td width="100px"></td>
									<td><?php echo $alt1['nama_alternative']; ?></td>
									<td><?php echo $alt2['nama_alternative']; ?></td>
									<td><?php echo $alt3['nama_alternative']; ?></td>
									<td><?php echo $alt4['nama_alternative']; ?></td>
								</tr>
								<tr>
									<td><?php echo $alt1['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><select name="aaa1" class="span12" >
										<?php
											$reaaa1 = $reaaa1['value'];
											for ($aaa1=1; $aaa1<=9 ; $aaa1++) { 
												# code...
												if ($aaa1 == $reaaa1) {
													# code...
													echo "<option value='$aaa1' selected>$aaa1</option>";
												}else{
												echo "<option value='$aaa1'>$aaa1</option>";
											}
											}
										?>
									</select></td>
									<td><select name="aaa2" class="span12" >
										<?php
											$reaaa2 = $reaaa2['value'];
											for ($aaa2=1; $aaa2<=9 ; $aaa2++) { 
												# code...
												if ($reaaa2 == $aaa2) {
													# code...
													echo "<option value='$aaa2' selected>$aaa2</option>";
												}else{
												echo "<option value='$aaa2'>$aaa2</option>";
											}
											}
										?>
									</select></td>
									<td><select name="aaa3" class="span12" >
										<?php
											$reaaa3 = $reaaa3['value'];
											for ($aaa3=1; $aaa3<=9 ; $aaa3++) { 
												# code...
												if ($aaa3 == $reaaa3) {
													# code...
													echo "<option value='$aaa3' selected>$aaa3</option>";
												}else{
												echo "<option value='$aaa3'>$aaa3</option>";
											}
											}
										?>
									</select></td>
								</tr>
									<td><?php echo $alt2['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="1" disabled class="span12" /></td>
									<td><select name="bbb1" class="span12" >
										<?php
											$rebbb1 = $rebbb1['value'];
											for ($bbb1=1; $bbb1<=9 ; $bbb1++) { 
												# code...
												if ($bbb1 == $rebbb1) {
													# code...
													echo "<option value='$bbb1' selected>$bbb1</option>";
												}else{
												echo "<option value='$bbb1'>$bbb1</option>";
											}
											}
										?>
									</select></td>
									<td><select name="bbb2" class="span12" >
										<?php
										$rebbb2 = $rebbb2['value'];
											for ($bbb2=1; $bbb2<=9 ; $bbb2++) { 
												# code...
												if ($bbb2 == $rebbb2) {
													# code...
													echo "<option value='$bbb2' selected>$bbb2</option>";
												}else{
												echo "<option value='$bbb2'>$bbb2</option>";
											}
											}
										?>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $alt3['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="1" disabled class="span12"/></td>
									<td><select name="ccc1" class="span12" >
										<?php
											$reccc1 = $reccc1['value'];
											for ($ccc1=1; $ccc1<=9 ; $ccc1++) { 
												# code...
												if ($ccc1 == $reccc1) {
													# code...
													echo "<option value='$ccc1' selected>$ccc1</option>";
												}else{
												echo "<option value='$ccc1'>$ccc1</option>";
											}
											}
										?>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $ralt4['nama_alternative']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
									</select></td>
								</tr>
							  </table>
							  <input style="float:right;" type="submit" class="btn btn-primary" name="simpan" value="PROSES" />

							 </form>
							</div>				 
	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
 


  </body>
</html>




