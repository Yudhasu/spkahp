
<div class="row-fluid">
		<img style='width:100%' src="images/bg.png" />
	</div>
<div class="navbar">
				<div class="navbar-inner">
					<ul class="nav">   
						<li>
							<a style='color:#fff' href="index.php"> Home Page</a>
						</li>   
						<li>
							<a style='color:#fff' href="about.php"> About Us</a>                                
						</li>
				<?php 
					if ($_SESSION['username'] == '' AND $_SESSION['namauser'] == ''){
						echo "<li>
								<a style='color:#fff' href='login.php'> Login Siswa</a>                                
							  </li>
							  <li>
								<a style='color:#fff' href='admin.php'> Login Admin</a>                                
							  </li>";
					}elseif ($_SESSION['username'] != ''){
				?>
						<li>
							<a style='color:#fff' href="pemahaman_materi.php">Uji Materi</a>
						</li>
						<li>
							<a style='color:#fff' href="logout.php"> Logout</a>                                
						</li>
				<?php
					}
					
					if (empty($_SESSION['namauser'])){
					
					}else{
					
				?>		
						<li>
							<a style='color:#fff' href="siswa.php"> Siswa</a>                                
						</li>
						<li>
							<a style='color:#fff' href="proses.php"> Proses Keputusan</a>                                 
						</li>
						<li>
							<a style='color:#fff' href="laporan_akhir.php">Laporan Akhir</a>                                 
						</li>
					<!--	<li>
							<a style='color:#fff' href="#tab8" data-toggle="tab"> Hasil Keputusan</a>                                 
						</li>
						<li>
							<a style='color:#fff' href="laporan_akhir.php"> Laporan Hasil Akhir</a>                                 
						</li>  -->
						 <li>
							<a style='color:#fff' href="logout.php"> Logout</a>                                
						</li> 
				<?php
					 }
				?>
					</ul>
				</div>
			</div>