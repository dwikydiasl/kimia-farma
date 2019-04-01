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
								<a class="nav-link" href="berita.php">Berita</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="job.php">Job Vacancies</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="">Dashboard</a>
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
		<img src="assets/img/bg4.jpeg">
	</div>	

	<div class="container ">
		<div class="title2">				
			<h2><u>Dash</u>board</h2>
		</div>
		<div class="row panel">
			<div class="col-12 col-sm-12 col-md-4">		
				<div class="after-login" align="center">
					<img src="assets/img/icon/user1.png">
					<h5>Haloo</h5>
					<h6>Joko Anwar </h6>
					<p>Lamaran Aktif : </p>
					<small>Asisten Manajer Akuntansi Konsolidasi</small>
					<div class="btn-blue2" align="center">
						<button type="submit" class="btn btn-sm ">Logout</button>
					</div>		
				</div>
				<div class="upload-resume">
					<h6>Upload Berkas</h6>
					<div class="form-group">
						<label> KTP</label>
						<input type="file" class="form-control-file" id="">
					</div>
					<div class="form-group">
						<label> Ijazah</label>
						<input type="file" class="form-control-file" id="">
					</div>
					<div class="form-group">
						<label> Transkip</label>
						<input type="file" class="form-control-file" id="">
					</div>
					<div class="form-group">
						<label> CV</label>
						<input type="file" class="form-control-file" id="">
					</div>
					<div class="form-group">
						<label> Berkas pendukung lainnya</label>
						<input type="file" class="form-control-file" id="">
					</div>
				</div>
			
			</div>
			<div class="col-12 col-sm-12 col-md-8">
				<div class="bg2">
					<div class="menu-dashboard">
						<ul class="nav  mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-edit-tab" data-toggle="pill" href="#pills-edit" role="tab" aria-controls="pills-edit" aria-selected="true"> Profil</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-kerja-tab" data-toggle="pill" href="#pills-kerja" role="tab" aria-controls="pills-kerja" aria-selected="false">Pengalaman Kerja</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-lamaran-tab" data-toggle="pill" href="#pills-lamaran" role="tab" aria-controls="pills-lamaran" aria-selected="false">Lamaran</a>
							</li>
						</ul>
					</div>

					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit-tab">
							<div class="profil">
								<form>
									<h6>Biodata Diri</h6>
									<div class="form-group">
										<label>Upload Foto</label>
										<input type="file" class="form-control-file" id="">
									</div>
									<div class="form-group">
										<label>Nama Lengkap</label>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Nama Sesuai KTP">
									</div>
									<div class="form-group">
										<label>Alamat</label>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Alamat Sesuai KTP">
									</div>
									<div class="row">
										<div class="col-6 col-sm-6 col-md-6">
											<div class="form-group">
												<label>Jenis Kelamin</label>
												<select class="form-control" id="">
													<option>Laki-Laki</option>
													<option>Perempuan</option>
												</select>
											</div>
										</div>
										<div class="col-6 col-sm-6 col-md-6">
											<div class="form-group">
												<label>Status</label>
												<select class="form-control" id="">
													<option>Menikah</option>
													<option>Belum Menikah</option>
													<option>Duda/Janda</option>
												</select>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="col-6 col-sm-6 col-md-6">
											<div class="form-group">
												<label>No Telp</label>
												<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="0351-980xxx">
											</div>
										</div>
										<div class="col-6 col-sm-6 col-md-6">
											<div class="form-group">
												<label>No Handphone</label>
												<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="081276xxxx">
											</div>
										</div>
									</div>	
									<h6>Pendidikan</h6>	
									<div class="table-responsive">
										<table class="table tabel-pendidikan">
											<thead>
												<tr>
													<th scope="col">Tingkat</th>
													<th scope="col">Nama Sekolah</th>
													<th scope="col">Jurusan</th>
													<th scope="col">IPK</th>
													<th scope="col">Tahun Lulus</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">SD</th>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td class="ipk">
														<input type="number" min="0" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td class="action2">
														<a href="">
															<i class="fas fa-edit"></i>
														</a>
														<a href="">
															<i class="fas fa-times"></i>
														</a>	
													</td>
												</tr>
												<tr>
													<th scope="row">SMP</th>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td class="ipk">
														<input type="number" min="0" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td class="action2">
														<a href="">
															<i class="fas fa-edit"></i>
														</a>
														<a href="">
															<i class="fas fa-times"></i>
														</a>	
													</td>
												</tr>
												<tr>
													<th scope="row">SMA</th>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td class="ipk">
														<input type="number" min="0" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td class="action2">
														<a href="">
															<i class="fas fa-edit"></i>
														</a>
														<a href="">
															<i class="fas fa-times"></i>
														</a>	
													</td>
												</tr>
												<tr>
													<th scope="row">Universitas</th>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td class="ipk">
														<input type="number" min="0" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td>
														<input type="text" class="form-control form-control-sm" id="" aria-describedby="">
													</td>
													<td class="action2">
														<a href="">
															<i class="fas fa-edit"></i>
														</a>
														<a href="">
															<i class="fas fa-times"></i>
														</a>	
													</td>
												</tr>
											</tbody>
										</table>
									</div>	
									<div class="btn-blue2" align="center">
										<button type="submit" class="btn btn-sm ">Simpan</button>
									</div>							
								</form>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-kerja" role="tabpanel" aria-labelledby="pills-kerja-tab">
							<div class="pengalaman-kerja">
								<form>
									<h6>Pengalaman Kerja</h6>
									<div class="form-group">
										<label>Nama Instansi</label>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
									</div>
									<div class="form-group">
										<label>Bidang</label>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
									</div>
									<div class="form-group">
										<label>Jabatan</label>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="">
									</div>
									<div class="row">
										<div class="col-6 col-sm-6 col-md-6">
											<div class="form-group">
												<label>Tahun Masuk</label>
												<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="">
											</div>
										</div>
										<div class="col-6 col-sm-6 col-md-6">
											<div class="form-group">
												<label>Tahun Keluar</label>
												<input type="number" min="0" class="form-control" id="" aria-describedby="" placeholder="">
											</div>
										</div>
									</div>	
									<div class="btn-blue2" align="center">
										<button type="submit" class="btn btn-sm ">Simpan</button>
									</div>	
								</form>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-lamaran" role="tabpanel" aria-labelledby="pills-lamaran-tab">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">Kategori</th>
											<th scope="col">Bidang</th>
											<th scope="col">Proses</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">Ekternal</th>
											<td>Accounting</td>
											<td>Seleksi Adminstrasi</td>
											<td class="action1"><i class="fas fa-times-circle"></i></td>
										</tr>
									</tbody>
								</table>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
</div>


<?php
include "footer.php";
?>