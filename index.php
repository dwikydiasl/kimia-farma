<?php
include "header.php";
?>
<div id="header">
	<div class="navigasi header">
		<div class="container">
			<nav class="navbar navbar-expand-lg ">
				<a class="navbar-brand" href="#">
					<img src="assets/img/icon/logo.png">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars "></i>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<form class="form-inline mr-auto mt-2 mt-lg-0">
							<!--
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						-->
					</form>
					<div class="menu">
						<ul class="navbar-nav  my-2 my-lg-0">
							<li class="nav-item ">
								<a class="nav-link active" href="index.php">Home </a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="berita.php">Berita</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="job.php">Job Vacancies</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>		
	</div>
</div>
<div class="slider">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="assets/img/bg1.jpeg" alt="First slide">
				<div class="carousel-caption">
					<h1>E-RECRUITMENT</h1>
					<h4>Kimia Farma</h4>
					<div class="btn-outline">
						<a class="btn " href="job.php" role="button">Login / Register</a>
					</div>
				</div>   
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="assets/img/bg2.jpeg" alt="Second slide">
				<div class="carousel-caption">
					<h4>" Menjadi perusahaan Healthcare pilihan utama yang terintegrasi dan menghasilkan nilai yang berkesinambungan. "</h4>
				</div>   
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="assets/img/bg3.jpeg" alt="Third slide">
				<div class="carousel-caption">
					<h4>"Perseroan telah menetapkan budaya perusahaan yang merupakan nilai-nilai inti Perseroan (corporate values) yaitu I C A R E yang menjadi acuan/pedoman bagi Perseroan dalam menjalankan usahanya, untuk berkarya meningkatkan kualitas hidup dan kesehatan masyarakat. "</h4>
				</div>  
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<div id="info">
	<div class="container konten">
		<div class="row spacing">
			<div class="col-12 col-sm-6 col-md-6">
				<h2>Apa itu Kimia Farma</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="col-12 col-sm-6 col-md-6">
				<img src="assets/img/icon/lab.svg">
			</div>
		</div>
		<div class="row spacing">
			<div class="col-12 col-sm-6 col-md-6">
				<img src="assets/img/icon/tanya.svg">				
			</div>
			<div class="col-12 col-sm-6 col-md-6">
				<h2>Mengapa Kimia Farma</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
		<div class="row spacing">
			<div class="col-12 col-sm-6 col-md-6">
				<h2>Bekerja di Kimia Farma</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="col-12 col-sm-6 col-md-6">
				<img src="assets/img/icon/work.svg">
			</div>
		</div>
	</div>
</div>

<div id="testimoni">
	<h3 align="center">TESTIMONI</h3>
	<div class="container">
		<div class="owl-carousel owl-theme">
			<div class="item">
				<div class="konten-testimoni" align="center">
					<div class="quotes" align="left">
						<i class="fas fa-quote-left"></i>
					</div>
					<img src="assets/img/icon/user2.png" width="30px">
					<h5>Dinda Sekar Putri</h5>
					<p>
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse."
					</p>
				</div>
			</div>
			<div class="item">
				<div class="konten-testimoni" align="center">
					<div class="quotes" align="left">
						<i class="fas fa-quote-left"></i>
					</div>
					<img src="assets/img/icon/user1.png" width="30px">
					<h5>Joko Anwar</h5>
					<p>
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse."
					</p>
				</div>
			</div>
			<div class="item">
				<div class="konten-testimoni" align="center">
					<div class="quotes" align="left">
						<i class="fas fa-quote-left"></i>
					</div>
					<img src="assets/img/icon/user2.png" width="30px">
					<h5>Putri Tunjung</h5>
					<p>
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse."
					</p>
				</div>
			</div>
			<div class="item">
				<div class="konten-testimoni" align="center">
					<div class="quotes" align="left">
						<i class="fas fa-quote-left"></i>
					</div>
					<img src="assets/img/icon/user2.png" width="30px">
					<h5>Dinda Sekar Putri</h5>
					<p>
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse."
					</p>
				</div>
			</div>
			<div class="item">
				<div class="konten-testimoni" align="center">
					<div class="quotes" align="left">
						<i class="fas fa-quote-left"></i>
					</div>
					<img src="assets/img/icon/user2.png" width="30px">
					<h5>Dinda Sekar Putri</h5>
					<p>
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse."
					</p>
				</div>
			</div>
		</div>	
	</div>
</div>



<?php
include "footer.php";
?>