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
								<a class="nav-link " href="index.php">Home </a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="berita.php">Berita</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="job.php">Job Vacancies</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>		
	</div>
</div>
<div id="job">
	<div class="bg-job">
		<img src="assets/img/bg2.jpeg">
	</div>	

	<div class="container ">
		<div class="title2">				
			<h2><u>Job</u> Vacancies</h2>
		</div>
		<div class="row panel">
			<div class="col-12 col-sm-12 col-md-4">
				
				<div class="login">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<div class="btn-blue" align="center">
							<button type="submit" class="btn ">Login</button>
						</div>						
					</form>
					<p>Belum Mendaftar ? silahkan daftar <a href="">disini</a></p>
				</div>

				<!--Muncul setelah login-->
			
				<!--
				<div class="after-login" align="center">
					<img src="assets/img/icon/user1.png">
					<h5>Haloo</h5>
					<h6>Joko Anwar </h6>
					<p>Lamaran Aktif : </p>
					<small>Asisten Manajer Akuntansi Konsolidasi</small>
					<div class="row">
						<div class="col-6 col-sm-6 col-md-6">
							<div class="btn-outline" >
								<a class="btn btn-sm" href="dashboard.php" role="button">Dashboard</a>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-6" style="margin-top: 30px;">
							<div class="btn-blue2" align="center">
								<button type="submit" class="btn btn-sm ">Logout</button>
							</div>
						</div>
					</div>				
				</div>
				-->
			
			</div>
			<div class="col-12 col-sm-12 col-md-8">
				<div class="filter">
					
					<div class="row ">
						<div class="col-12 col-sm-12 col-md-3">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Kategori</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option>-Pilih Kategori-</option>
									<option>Ekternal</option>
									<option>Internal</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-5">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Bidang</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option>-Pilih Bidang-</option>
									<option>Administrasi</option>
									<option>Internal Audit</option>
									<option>IT</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-4" style="padding-top: 6px;">
							<div class="btn-blue" align="center">
							<button type="submit" class="btn ">Cari</button>
						</div>	
						</div>
					</div>
				</div>

				<div class="hasil-pencarian">
					<h6>Silahkan login untuk apply pendaftaran</h6>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Bidang</th>
									<th scope="col">Kategori</th>
									<th scope="col">Batas Lamaran</th>
									<th scope="col">Lokasi</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Pharmacist</td>
									<td>Eksternal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action">
										<a data-toggle="modal" data-target="#exampleModal">detail</a>
									</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Business Development</td>
									<td>Eksternal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action">
										<a data-toggle="modal" data-target="#exampleModal">detail</a>
									</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Accounting</td>
									<td>Eksternal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action">
										<a data-toggle="modal" data-target="#exampleModal">detail</a>
									</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Asisten Manajer Akuntansi Konsolidasi</td>
									<td>Internal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action">
										<a data-toggle="modal" data-target="#internal">detail</a>
									</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Asisten manajer Monev</td>
									<td>Internal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action">
										<a data-toggle="modal" data-target="#internal">detail</a>
									</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Frontliner</td>
									<td>Eksternal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action"><a>detail</a></td>
								</tr>
								<tr>
									<th scope="row">7</th>
									<td>Information Technology</td>
									<td>Eksternal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action"><a>detail</a></td>
								</tr>
								<tr>
									<th scope="row">8</th>
									<td>Property</td>
									<td>Eksternal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action"><a>detail</a></td>
								</tr>
								<tr>
									<th scope="row">9</th>
									<td>Sales & Marketing</td>
									<td>Eksternal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action"><a>detail</a></td>
								</tr>
								<tr>
									<th scope="row">10</th>
									<td>Clinical Laboratories</td>
									<td>Eksternal</td>
									<td>25 Maret 2019</td>
									<td>Jakarta</td>
									<td class="action"><a>detail</a></td>
								</tr>
							</tbody>
						</table>
					</div>

					<div align="center">
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center">
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
										<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
										<span class="sr-only">Next</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
					

				</div>
			
			</div>
		</div>
	</div>
	
	
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pharmacist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Major : Pharmacy</h6>
        <h6>Requirements :</h6>
        <ol>
        	<li>D3 in related major(max age 26 years)</li>
        	<li>S1 in related major(max age 27 years)</li>
        	<li>Minimum GPA 3.00(scale 4.00)</li>
        	<li>PTN Minimum accreditation B(all major)</li>
        	<li>PTS Minimum accreditation A(all major)</li>
        	<li>Fresh Graduated are welcome to apply</li>
        	<li>Single</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success btn-sm">Apply</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="internal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asisten Manajer Akuntansi Konsolidasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Requirements :</h6>
        <ol>
        	<li>Pendidikan minimal S1 akuntansi</li>
        	<li>Pengalaman 2 tahun sebagai Spervisor di PT. Kimia Farma Group</li>
        	<li>Memiliki kompetensi dan pemahanam tentang</li>
        	<ul>
        		<li>Manajemen Keuangan</li>
        		<li>Manajemen Akuntansi</li>
        		<li>manajemen risk</li>
        		<li>Ekonomi Makro & Mikro</li>
        		<li>manajemen Perpajakan</li>
        		<li>Peraturan dan Perundangan Perpajakan</li>
        	</ul>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success btn-sm">Apply</button>
      </div>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>