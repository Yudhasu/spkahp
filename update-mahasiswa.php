<?php

  include "koneksi.php";
  $id       = $_POST['id'];
  $jml_data = count($id);
  $nama_siswa   = $_POST['nama_siswa'];
  $nilai   = $_POST['nilai'];
  
 
  if($_GET['mod']=='update'){
  for ($i=1; $i <= $jml_data; $i++){
  
    mysql_query("UPDATE siswa SET nama_siswa 		= '".$nama_siswa[$i]."',
									  nilai_rapor 		= '".$nilai[$i]."'
                                  WHERE id_siswa	= '".$id[$i]."'");
								  
}

	 echo "<script>window.alert('Sukses Simpan data Mahasiswa. . .');
        window.location=('siswa.php')</script>";
    }elseif ($_GET['mod']='tambah') {
    	# code...
    	mysql_query("INSERT INTO siswa (nis,
										nama_siswa,
										jk,
										nilai_rapor) 
								VALUES ('$_POST[nis]',
										'$_POST[nama]',
										'$_POST[jk]',
										'$_POST[nilai]')");
    	 echo "<script>window.alert('Sukses Simpan data Mahasiswa. . .');
        window.location=('siswa.php')</script>";
    }

?>