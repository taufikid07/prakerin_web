<?php
include("model/auth.php");
include("model/header.php");
include("model/koneksi.php");


// ACTION =======================================================
$qangkot = mysql_query("SELECT * FROM angkutan_umum ORDER BY id DESC");
$t_angkot='';
$i=0;
while($dangkot = mysql_fetch_array($qangkot)){
	$i++;
	$t_angkot.='
	<tr class="gradeA">
		<td>'.$i.'</td>
		<td>'.$dangkot['nama_angkutan'].'</td>
		<td>'.$dangkot['harga'].'</td>
		<td class="center">'.$dangkot['jarak'].'</td>
		<td class="center">
		<a class="fancybox btn btn-warning" href="#edit'.$dangkot['id'].'"><i class="icon-pencil"></i>Edit</a>
		<div id="edit'.$dangkot['id'].'" style="width:500px;display:none;">
			<div class="judul_fan"><h3>Edit Angkutan Umum</h3></div>
			<hr>
			<form class="form-horizontal" method="post" action="model/mangkot.php?id='.$dangkot['id'].'">
				<div class="form-grup">
					<label class="control-label col-lg-4"> Kode Angkot </label>
					<div class="col-lg-6">
						<input type="text" id="required2" name="kode" class="form-control" value="'.$dangkot['kode_angkutan'].'"/>
					</div>
				</div>	
				<div class="form-group">
					<label class="control-label col-lg-4"> Nama Angkot </label>
					<div class="col-lg-6">
						<input type="text" id="required3" name="nama" class="form-control" value="'.$dangkot['nama_angkutan'].'"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4"> Simpul </label>
					<div class="col-lg-6">
						<textarea id="wysihtml5" class="form-control" rows="3" name="simpul">'.$dangkot['simpul'].'</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4"> Harga Angkot </label>
					<div class="col-lg-6">
						<input type="text" id="required4" name="harga" class="form-control" value="'.$dangkot['harga'].'" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4"> Jarak Angkot </label>
					<div class="col-lg-6">
						<input type="text" id="required5" name="jarak" class="form-control" value="'.$dangkot['jarak'].'" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4"> Jumlah Armada</label>
					<div class="col-lg-6">
						<input type="text" id="required6" name="jml_armada" class="form-control" value="'.$dangkot['jml_armada'].'" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4"> Warna </label>
					<div class="col-lg-6">
						<input type="text" id="required2" name="warna" class="form-control" value="'.$dangkot['warna'].'" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4"> Kategori </label>
					<div class="col-lg-6">
						<input type="text" id="required7" name="kategori" class="form-control" value="'.$dangkot['kategori'].'" />
					</div>
				</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Update change" name="update">
			</div>
			</form>
		</div>
		
		
		</td>
	</tr>';
}

echo '
	 <!-- Begin Body -->
<body class="padTop53">
	 
	 <!-- Main Wrapper -->
	<div id="wrap">
		 <!-- Header Section -->
		<div id="top">
			<nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px">
				<a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle"> 
					<i class="icon-align-justify"></i>
				</a>
				<!-- Logo Section -->
				<header class="navbar-header">
				
					<a href="index.html" class="navbar-brand">
					<img src="assest/img/logo.png" alt="" /></a>
				</header>
				<!-- End Logo Section -->
				<ul class="nav navbar-top-links navbar-right">
					<!-- Admin Settings Sections -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-user"> </i>&nbsp; <i class="icon-chevron-down"></i>
						</a>
						<ul class="dropdown-menu" dropdown-user">
							<li><a href="#"><i class="icon-user"></i> User Profile </a>
							</li>
							<li><a href="#"><i class="icon-gear"></i> Settings </a>
							</li>
							<li class="divider"></li>
							<li><a href="model/logout.php"><i class="icon-signout"></i> Logout </a>
							</li>
						</ul>
					</li>
					<!-- End Admin Setting -->
				</ul>
			</nav>
		</div>
		<!-- End Header Sections -->
		
		<!-- Menu Sections -->
		<div id="left">
			<div class="media user-media well-small">
				<a class="user-link" href="#">
					<img class="media-object img-thumbnail user-img" alt="User Picture" src="assest/img/user.png" />
				</a>
				<br />
				<div class="media-body">
					<h5 class="media-heading">DHEKA</h5>
					<ul class="list-unstyled user-info">
						<li>
							<a class="btn btn-success btn-xs btn-circle" style="width: 10px;heigth: 12px;"></a> Online
						</li>
					</ul>
				</div>
				<br />
			</div>';
		include("model/loeftbar.php");
		echo '
		</div>
		<!-- End Menu Section -->
		
		
		<!-- Page Content -->
		<div id="content">
		
			<div class="inner"
				<div class="row">
					<div class="col-lg-12">
						<h2>Data Angkutan Umum</h2>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<button class="btn-succes" data-toggle="modal" data-target="#uimodal"> Add Angkutan Umum </button>
							</div>
							<div class="panel-body">
								<div class="table-responsive"
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Angkutan</th>
												<th>Harga</th>
												<th>Jarak</th>
												<th> Action</th>
											</tr>
										</thead>
											'.$t_angkot.'
										</tbody>
									</table>
								</div>
							</div>
							</div>
						</div>
				</div>
				
				
				<!-- POOPUP BARU -->
				<div class="col-lg-12">
					<div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="model-content">
									<div class="model-header">
										<buton type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
										<h4 class="modal-title" id="H3"> Add New Angkutan Umum </h4>
									</div>
									<div class="modal-body">
										<form action="model/mangkot.php" class="form-horizontal" id="block-validate" method="POST">
										
										<div class="form-group">
											<label class="control-label col-lg-4">Kode Angkot</label>
											<div class="col-lg-6">
												<input type="text" id="required2" nama="kode" class="form-control" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-lg-4">Nama Angkot</label>
											<div class="col-lg-6">
												<input type="text" id="required3" name="nama" class="form-control" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-lg-4"> Simpul </label>
											<div class="col-lg-6">
												<textarea id="wysihtml5" class="form-control" row="3" name="simpul"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-lg-4">Harga Angkot</label>
											<div class="col-lg-6">
												<input type="text" id="required4" name="harga" class="form-control" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-lg-4"> Jarak Angkot</label>
											<div class="col-lg-6">
												<input type="text" id="required5" name="jarak" class="form-control" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-lg-4"> Jumlah Armada </label>
											<div class="col-lg-6">
												<input type="text" id="required6" name="jml_armada" class="form-control" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-lg-4"> Warna </label>
											<div class="col-lg-6">
												<input type="text" id="required2" name="warna" class="form-control" />
											</div>
										</div>
										<div class="form-group"
											<label class="control-label col-lg-4"> Kategori </label>
											<div class="col-lg-6">
												<input class="text" id="required7" name="kategori" class="form-control" />
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
										<input type="submit" class="btn btn-primary" value="Save change" name="insert">
									</div>
									</form>
								</div>
							</div>
						</div>
				</div>
			</div>
			<div class="row"></div>
			<div class="row"></div>
			</div>
		</div>
	   <!-- End Page Content -->
	</div>
	 <!-- End Main Wrapper -->';
		
include("model/footer.php");
?>
