<?php 
error_reporting(0);
session_start(); 

?>
<!DOCTYPE html>
<html>
  <head>
	<title>Analitic Hierarchy Process</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
<!--	<link rel="icon" type="image/x-icon" href="http://phpmu.com/wp-content/themes/diverso/favicon.ico" />
	<script src="http://code.jquery.com/jquery.js"></script> -->
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
				<h4><span class="pe">&nbsp;&nbsp;&nbsp;&nbsp;</span>Halaman Utama </h4>
				<div class="span12">
					<?php
						include "koneksi.php";
						$statis = mysql_query("SELECT * FROM statis where id_statis=2");
						$r = mysql_fetch_array($statis);
						$isi = nl2br($r['isi']);
					?>
					<img style='width:420px; float:left; padding-right:10px;' src='images/ahp.png'>
					<?php echo $isi ?><br><br>
					
				</div>
			
	</div>
	
	<div class="row-fluid">
		<?php include "footer.php"; ?>
	</div>
  </div>
  </body>
</html>




