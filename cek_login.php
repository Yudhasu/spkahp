<?php
include "koneksi.php";
$pass=md5($_POST['password']);
$level=$_POST['level'];
if ($level=='Admin')
{
$login=mysql_query("SELECT * FROM admin
			WHERE username='$_POST[id_user]' AND password='$pass'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($cocok > 0){
	session_start();
	$_SESSION[namauser]     = $r[username];
  	$_SESSION[namalengkap]  = $r[nama_lengkap];
  	$_SESSION[passuser]     = $r[password];
  	$_SESSION[leveluser]    = $r[level];

	header('location:index.php');
	}
else {
echo "<script>window.alert('Username atau Password anda salah.');
        window.location=('index.php')</script>";
}
}

elseif ($level=='Customer')
{
$login=mysql_query("SELECT * FROM siswa
			WHERE nis='$_POST[id_user]' AND nis='$_POST[password]'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($cocok > 0){
	session_start();
	$_SESSION[username]     = $r['nama_siswa'];
	$_SESSION[passuser]     = $r['nis'];

	header('location:index.php');
	}
else {
echo "<script>window.alert('Username dan Password anda salah atau account anda belum di aktifkan.');
        window.location=('index.php')</script>";
}
}

?>
<link href="templates/style.css" rel="stylesheet" type="text/css" /> 