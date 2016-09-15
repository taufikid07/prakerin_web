<?php
include("model/auth.php");
include("model/header.php");
include("model/koneksi.php");


// ACTION =====================================================================
$qangkot = mysql_query (SELECT * FROM jalan ORDER BY id_jalan DESC");
$t_angkot ='';
$i=0;
while($dangkot = mysql_fetch_array ($qangkot)){
	$i++;
	$t_angkot.='
	<tr class="gradeA">
		<td>'.$i.'</td>
		<td>'.$dangkot['nama_jalan].'</td>
		<td>'.$dangkot['koordinat_jalan'].'</td>
		<td class="center">'.$dangkot['keterangan'].'</td>
		<td class="center">
		<a class="fancybox btn btn-warning" href="#edit'.$dangkot['id_jalan'].'"><i class="icon-pencil"></i>Edit</a>
		<div id="edit'.$dangkot['id_jalan'].'" style="width:500px;display: none;">
			<div class="judul_fan"><h3>Edit Rute Angkot</h3></div>
			<hr>
			<form class="form-horizontal" method="post" action="model/mrute.php?id='.$dangkot['id_jalan'].'">
				<div class="form-group">
					<label class="control-label col-lg-4">Nama Jalan</label>
					<div class="col-lg-6">
						<input type="text" id="required2" name="nama" class="form-control" value="'.$dangkot['nama_jalan'].'" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Koordinat Jalan</label>
					<div class="col-lg-6">
						<input type="text" id="required2" name="koordinat" class="form-control" value="'.$dangkot['koordinat_jalan'].'" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4"> Keterangan </label>
					<div class="col-lg-6">
						<input type="text" id="required4" name="keterangan" class="form-control" value="'.$dangkot['keterangan'].'" />
					</div>
				</div>
				<div class="modal-footer">
					<input type="sumbit" class="btn btn primary" value="Update change" name="update">
				</div>
				</form>
			</div>
			

			</td>
			</td>
		</tr>';
}

echo '
	 <!-- Begin Body -->
<body class="padTop53">

	 <-- Main Wrapper -->
	<div id="wrap">
		 <!-- Header Section -->
		<div id="top">
			<nav class="navbar navbar-inverse navbar-fixed-top" style="padding-top: 10px;">
				<a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collpase" href="#menu" id="menu-toggle">
					<i class="icon-align-justify"></i>
				</a>
				<!-- Logo Section -->
				<header class="navbar-header">
				
					<a href="index.html" class="navbar-brand">
					<img src="assets/img/logo.png" alt="" /></a>
				</header>
				<!-- End Logo Section -->
				<ul class="nav navbar-top-links navbar-right">
					<!-- Admin Settings Sections -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-user"></i>&nbsp; <i class="icon-chevron-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#"><i class="icon-user"></i> User Profile </a>
							</li>
							<li><a href="#"><i class="icon-gear"></i> Settings </a>
							</li>
							<li class="divider"></li>
							<li><a href="model/logout.php"><i class="icon-signout"></i> Logout</a>
							</li>
						</ul>
					</li>
					<!-- End Admin Settings -->
				</ul>
			</nav>
		</div>
		<!-- End Admin Section -->
		
		<!-- Menu Section -->
		<div id="left">
			<div class="media user-media well-small">
				<a class="user-link" href="#">
					<img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.png" />
				</a>
				<br />
				<div class="media-body">
					<h5 class="media-heading"> Dheka </h5>
					<ul class="list-unstyled user-info">
						<li>
							 <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
						</li>
					</ul>
				</div>
				<br />
			</div>';
		include("model/leftbar.php");
		echo '
		</div>
		<!-- End Menu Section -->
		
		
		<!-- Page Content -->
		<div id="content">
		
			<div class="inner">
				<div class="row">
					<div class="col-lg-12">
						<h2> Data Rute Angkot </h2>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<button class="btn btn-success" data-toggle="modal" data-target="#uiModal"> Add Rute </button>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Jalan</th>
												<th>Koordinat Jalan</th>
												<th>Keterangan</th>
												<th>Action</th>
											<tr>
										</thead>
										<tbody>
											'.$t_angkot.'
										</tbody>
									</tabel>
								</div>
							</div>
							</div>
						</div>
				</div>
				
				<!-- Popup Baru -->
				<div class="col-lg-12">
					<div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="model-dialog">
								<div class="model-content">
									<div class="model-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="model-title" id="H3">ADD NEW RUTE</h4>
									</div>
									<div class="model-body">
										<form action="model/mrute.php" class="form-horizontal" id="block-validate" method="POST">
										
										<div class="form-group">
											<label class="control-label col-lg-4"> Nama Jalan></label>
											<div class="col-lg-6">
												<input type="text" id="required2" name="nama" class="form-control" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-lg-4"> Koordinat Jalan</label>
											<div class="col-lg-6">
												<input type="text" id="required3" name="koordinat" class="form-control" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-lg-4"> Keterangan </label>
											<div class="col-lg-6">
												<textarea id="wysihml5" class="form-control" rows="3" name="keterangan"/></textarea>
											</div>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<input type="sumbit" class="btn btn-primary" value="Save change" name="insert">
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
	 
	 
include("model/footer.php">;
?>