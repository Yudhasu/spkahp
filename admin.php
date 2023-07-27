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
	
  </head>
  <body>
  <div class="container">
	<?php include "menu.php"; ?>
	 		<div class="row-fluid">
			
				<div class="span12">
						<h4><span class="pe">&nbsp;&nbsp;&nbsp;&nbsp;</span>Halaman Login Admin </h4>
					
					<form method=POST name='formku' onSubmit='return valid()' action=cek_login.php>
			<td align=center><div align='center'>
			  <table><input type='hidden' name='level' value='Admin'>
				<tr><td><b>Username admin</b></td><td> : <input type=text name=id_user class=input> </td></tr>
					<tr><td><b>Password admin</b></td>
					<td> : <input type=password name=password class=input></td></tr>
					<tr><td></td><td><input class='btn btn-primary' type=submit value=Login class=submit></td></tr>
			  </table>
			  
			</div></td>
		</form>
				</div>
			
	</div>
	
	<div class="row-fluid">
		<?php include "footer.php"; ?>
	</div>
  </div>
	
	
  </body>
</html>




