
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
						  <b>Isilah Jawaban Berikut Dengan Baik dan Benar</b>
						</div>
<form action="" method="POST">
<b>Rekayasa Keamanan Siber</b>
<hr>
1.  Apa tujuan utama anda untuk masuk jurusan Rekayasa Keamanan Siber? <br>
<input type="radio" name='m1' value='A'>A. Kemampuan bahasa asing yang baik<br>
<input type="radio" name='m1' value='B'>B. agar bisa kerjain teman<br>
<input type="radio" name='m1' value='C'>C. Memiliki pengalaman kerja di bidang keamanan siber<br>
<br>
2. Apa yang menjadi fokus utama dalam jurusan Rekayasa Keamanan Siber?<br>
<input type="radio" name="m2" value="A">A. menjadi orang jahat<br>
<input type="radio" name="m2" value="B">B. bisa membobol atm<br>
<input type="radio" name="m2" value="C">C. ahli dalam Keamanan jaringan dan sistem<br>
<input type="radio" name="m2" value="D">D. menjadi heacker jahat<br>
<br>
3. Apa yang dimaksud dengan keamanan siber?<br>
<input type="radio" name="m3" value="A">A. Mencegah akses tidak sah ke data dan sistem komputer<br>
<input type="radio" name="m3" value="B">B. menjadi pembisnis yang handal<br>
<input type="radio" name="m3" value="C">C. menjadi sequrty dirumah sakit<br>
<input type="radio" name="m3" value="D">D. menjadi kameramen yang handal<br>
<br>
4. Apa yang Anda ketahui tentang Rekayasa Keamanan Siber<br>
<input type="radio" name="m4" value="A">A. bisa menjadi pembisnis<br>
<input type="radio" name="m4" value="B">B. bisa mengamankan sistem dari serangan-serangan<br>
<input type="radio" name="m4" value="C">C. dapat menjadi kameramen yang berpengalaman<br>
<input type="radio" name="m4" value="D">D. bisa menjadi artis terkenal<br>
<br>
5. Kompetensi apa yang menjadi fokus utama dalam jurusan Rekayasa Keamanan Siber?<br>
<input type="radio" name="m5" value="A">A. Pemrograman web<br>
<input type="radio" name="m5" value="B">B. Pengembangan aplikasi mobile<br>
<input type="radio" name="m5" value="C">C. Keamanan jaringan komputer<br>
<input type="radio" name="m5" value="D">D. Desain grafis<br>
<br>
6. Untuk masuk jurusan Rekayasa Keamanan Siber, diperlukan pengetahuan dan keterampilan di bidang apa?<br>
<input type="radio" name="m6" value="A">A. Biologi<br>
<input type="radio" name="m6" value="B">B. Teknologi informasi dan komunikasi<br>
<input type="radio" name="m6" value="C">C. Ilmu sosial<br>
<input type="radio" name="m6" value="D">D. Fisika<br>
<br>
7. Apa yang menjadi perhatian utama dalam studi Rekayasa Keamanan Siber?<br>
<input type="radio" name="m7" value="A">A.  Membuat aplikasi berbasis cloud computing<br>					
<input type="radio" name="m7" value="B">B.  Meningkatkan performa sistem komputer<br>					
<input type="radio" name="m7" value="C">C.  Melindungi pacar dari laki-laki hidung blang<br>   
<input type="radio" name="m7" value="D">D.  Melindungi data dan informasi dari serangan hacker <br>
<br>
8. Jurusan Rekayasa Keamanan Siber memiliki prospek karir di bidang apa?<br>
<input type="radio" name="m8" value="A">A.  Ahli keuangan<br>
<input type="radio" name="m8" value="B">B.  Pengembang game<br>
<input type="radio" name="m8" value="C">C.  Spesialis keamanan data<br>
<input type="radio" name="m8" value="D">D.  Peneliti medis<br>
<br>
9. Berikut ini yang merupakan bidang studi yang menjadi fokus utama dalam jurusan Rekayasa Keamanan Siber adalah...<br>
<input type="radio" name="m9" value="A">A. Teknologi Rekayasa Multimedia<br>
<input type="radio" name="m9" value="B">B. Keamanan Jaringan dan Sistem<br>
<input type="radio" name="m9" value="C">C. Teknologi Cloud Computing<br>
<input type="radio" name="m9" value="D">D. Bisnis Digital<br>
<br>
10. Keahlian apa yang sangat dibutuhkan dalam Rekayasa Keamanan Siber?<br>
<input type="radio" name="m10" value="A">a. Pemrograman web<br>
<input type="radio" name="m10" value="B">b. Keamanan jaringan<br>
<input type="radio" name="m10" value="C">c. Pengembangan aplikasi mobile<br>
<input type="radio" name="m10" value="D">d. Analisis data<br><br>
<br>
<b>Teknologi Rekayasa Multimedia</b>
<hr>
11. Teknologi Rekayasa Multimedia adalah jurusan yang menggabungkan elemen-elemen teknologi dengan <br>
<input type="radio" name="m11" value="A">a.  Ekonomi dan Bisnis<br>
<input type="radio" name="m11" value="B">b.  Hukum dan Politik<br>
<input type="radio" name="m11" value="C">c.  Seni dan Desain<br>
<input type="radio" name="m11" value="D">d. Kedokteran dan Kesehatan<br>
<br>
12. Salah satu persyaratan masuk jurusan Teknologi Rekayasa Multimedia biasanya adalah memiliki keahlian dalam<br>
<input type="radio" name="m12" value="A">a. Ilmu kedokteran<br>
<input type="radio" name="m12" value="B">b. Manajemen bisnis<br>
<input type="radio" name="m12" value="C">c. Pemrograman komputer<br>
<input type="radio" name="m12" value="D">d. Pendidikan matematika<br>
<br>
13. Salah satu mata kuliah yang umum di jurusan Teknologi Rekayasa Multimedia adalah <br>
<input type="radio" name="m13" value="A">a. Algoritma dan Pemrograman<br>
<input type="radio" name="m13" value="B">b. iklim<br>
<input type="radio" name="m13" value="C">c. cuaca<br>
<input type="radio" name="m13" value="D">d. Sejarah Dunia<br>
<input type="radio" name="m13" value="E">e. Fisika Dasar<br>
<br>
14. Untuk masuk ke jurusan Teknologi Rekayasa Multimedia, biasanya diperlukan latar belakang pendidikan<br>
<input type="radio" name="m14" value="A">a. IPA<br>
<input type="radio" name="m14" value="B">b. IPS<br>
<input type="radio" name="m14" value="C">c. Bahasa dan Sastra<br>
<input type="radio" name="m14" value="D">d. Seni dan Desain<br>
<br>
15. Keahlian apa yang diutamakan dalam jurusan Teknologi Rekayasa Multimedia?<br>
<input type="radio" name="m15" value="A">a. Keuangan dan Akuntansi<br>
<input type="radio" name="m15" value="B">b. Matematika Lanjutan<br>
<input type="radio" name="m15" value="C">c. Desain Grafis<br>
<input type="radio" name="m15" value="D">d. Penulisan Ilmiah<br>
<br>
16. Salah satu bidang kerja yang dapat diikuti setelah lulus dari jurusan Teknologi Rekayasa Multimedia adalah<br>
<input type="radio" name="m16" value="A">a. Pelayan Restoran<br>
<input type="radio" name="m16" value="B">b. Pengacara<br>
<input type="radio" name="m16" value="C">c. Animator<br>
<input type="radio" name="m16" value="D">d. Dokter Gigi<br>
<br>
17. Jurusan Teknologi Rekayasa Multimedia memiliki fokus pada pengembangan <br>
<input type="radio" name="m17" value="A">a. Jaringan komputer<br>
<input type="radio" name="m17" value="B">b. Aplikasi mobile<br>
<input type="radio" name="m17" value="C">c. Teknologi nuklir<br>
<input type="radio" name="m17" value="D">d.  Kebijakan publik<br>
<br>
18. Untuk masuk ke jurusan Teknologi Rekayasa Multimedia, seringkali diperlukan portofolio yang berisi <br>
<input type="radio" name="m18" value="A">a. Pengangguran<br>
<input type="radio" name="m18" value="B">b. Artikel jurnal ilmiah<br>
<input type="radio" name="m18" value="C">c.  Buku harian pribadi<br>
<input type="radio" name="m18" value="D">d. Rekaman musik<br>
<input type="radio" name="m18" value="E">e. Karya seni dan desain<br>
<br>
19. Salah satu kegiatan yang umum dilakukan oleh mahasiswa jurusan Teknologi Rekayasa Multimedia adalah<br>
<input type="radio" name="m19" value="A">a. Mengeksplorasi alam bebas<br>
<input type="radio" name="m19" value="B">b. Menulis naskah drama<br>
<input type="radio" name="m19" value="C">c. Mengerjakan proyek desain multimedia<br>
<input type="radio" name="m19" value="D">d. Mengikuti pertandingan olahraga<br>
<br>
20. Apa keunggulan jurusan Teknologi Rekayasa Multimedia dibandingkan jurusan lainnya?<br>
<input type="radio" name="m20" value="A">a. ombinasi antara desain grafis dan pemrograman<br>
<input type="radio" name="m20" value="B">b. Pengajaran yang berbasis proyek untuk pengalaman praktis<br>
<input type="radio" name="m20" value="C">c. Penekanan pada aspek teknis dan kreatif<br>
<input type="radio" name="m20" value="D">d. Peluang kerja yang luas di industri kreatif<br>
<br>
<br>
<input type="submit" name="lanjut" value="Lanjut">
</form>
<?php
if (isset($_POST['lanjut'])) {
	# code...

	if ($_POST['m1']=='C') {
		# code...
		$nilai_m1 = 10;
	}else{
		$nilai_m1 = 0;
	}
	if ($_POST['m2']=='C') {
		# code...
		$nilai_m2 = 10;
	}else{
		$nilai_m2 = 0;
	}
	if ($_POST['m3']=='A') {
		# code...
		$nilai_m3 = 10;
	}else{
		$nilai_m3 = 0;
	}
	if ($_POST['m4']=='B') {
		# code...
		$nilai_m4 = 10;
	}else{
		$nilai_m4 = 0;
	}
	if ($_POST['m5']=='C') {
		# code...
		$nilai_m5 = 10;
	}else{
		$nilai_m5 = 0;
	}
	if ($_POST['m6']=='B') {
		# code...
		$nilai_m6 = 10;
	}else{
		$nilai_m6 = 0;
	}
	if ($_POST['m7']=='D') {
		# code...
		$nilai_m7 = 10;
	}else{
		$nilai_m7 = 0;
	}
	if ($_POST['m8']=='C') {
		# code...
		$nilai_m8 = 10;
	}else{
		$nilai_m8 = 0;
	}
	if ($_POST['m9']=='B') {
		# code...
		$nilai_m9 = 10;
	}else{
		$nilai_m9 = 0;
	}
	if ($_POST['m10']=='B') {
		# code...
		$nilai_m10 = 10;
	}else{
		$nilai_m10 = 0;
	}
	if ($_POST['m11']=='C') {
		# code...
		$nilai_m11 = 10;
	}else{
		$nilai_m11 = 0;
	}
	if ($_POST['m12']=='C') {
		# code...
		$nilai_m12 = 10;
	}else{
		$nilai_m12 = 0;
	}
	if ($_POST['m13']=='A') {
		# code...
		$nilai_m13 = 10;
	}else{
		$nilai_m13 = 0;
	}
	if ($_POST['m14']=='D') {
		# code...
		$nilai_m14 = 10;
	}else{
		$nilai_m14 = 0;
	}
	if ($_POST['m15']=='C') {
		# code...
		$nilai_m15 = 10;
	}else{
		$nilai_m15 = 0;
	}
	if ($_POST['m16']=='C') {
		# code...
		$nilai_m16 = 10;
	}else{
		$nilai_m16 = 0;
	}
	if ($_POST['m17']=='B') {
		# code...
		$nilai_m17 = 10;
	}else{
		$nilai_m17 = 0;
	}
	if ($_POST['m18']=='E') {
		# code...
		$nilai_m18 = 10;
	}else{
		$nilai_m18 = 0;
	}
	if ($_POST['m19']=='C') {
		# code...
		$nilai_m19 = 10;
	}else{
		$nilai_m19 = 0;
	}
	if ($_POST['m20']=='D') {
		# code...
		$nilai_m20 = 10;
	}else{
		$nilai_m20 = 0;
	}

	$total_mia = $nilai_m1+$nilai_m2+$nilai_m3+$nilai_m4+$nilai_m5+$nilai_m6+$nilai_m7+$nilai_m8+$nilai_m9+$nilai_m10;
	$total_iis = $nilai_m11+$nilai_m12+$nilai_m13+$nilai_m14+$nilai_m15+$nilai_m16+$nilai_m17+$nilai_m18+$nilai_m19+$nilai_m20;

	$simpan = mysql_query("UPDATE siswa SET materi_mia = $total_mia, materi_iis = $total_iis WHERE nis = '$_SESSION[passuser]'");
	if ($simpan) {
		# code...
		echo "<script>window.location='soal_minat.php'</script>";
	}
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




