<?php
include ("model/auth.php");
include ("model/header.php");
include ("model/koneksi.php");


// ACTION ===================================================================
$quser = mysql_query (SELECT * FROM user ORDER BY id_user DESC");
$t_user = '';
$i=0;
while($duser = mysql_fetch_array ($quser)) {
	$i++;
	$t_user.='
	<tr class="gradeA">
		<td>'.$i.'</td>
		<td>'.$duser['Nama_Depan'].'</td>
		<td>'.$duser['Nama_Belakang'].'</td>
		<td>'.$duser['Email'].'</td>
		<td class="center">
		<a class="fancybox btn btn-warning" href="#edit'.$duser['id_user'].'"><i class="icon-pencil"></i>Edit</a>
		<div id="edit'.$duser['id_user'].'" style="width:500px;display: none;">
			<div class="judul_fan"><h3>Edit User</h3></div>
			<hr>
		<form class="form-horizontal" method="post" action="model/muser.php?id_user='$duser['id_user'].'">
		 <div class="form-group">
					<label class="control-label col-lg-4">Nama Depan</label>
					<div class="col-lg-6">
						<input type="text" id="required2" name="depan" class="form-control" value="'.$duser['Nama_Depan'].'"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Nama Belakang</label>
					<div class="col-lg-6">
						<input type="text" id="required3" name="belakang" class="form-control" velue="'$duser['Nama_Belakang'].'"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Email</label>
					<div class="col-lg-6">
						<input type="text" id="required3" name="email" class="form-control" value="'$duser['Email'].'"/>
					</div>
				</div>
				<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Update change" name="update">
			</div>
			
		</form>
		</div>
		
		<a href="model/muser.php?delete=delete&id_user='.$duser['id_user'].'"onclick="return delete_confirm();" class="btn btn-danger btn-flat"><i class="icon-remove icon-white"></i>Delete</a>
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
			<nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
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
							<i class="icon-user"></i>&nbsp; <i class="icon-chevron-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#"><i class="icon-user"></i>User Profil</a>
							</li>
							<li><a href="#"><i class="icon-gear"></i>Setiings</a>
							</li>
							<li class="divider">
							<li><a href="model/logout.php"><i class="icon-signout"></i>Logout</a>
							</li>
						</ul>
					</li>
					<!-- End Admin Setiing -->
				</ul>
			</nav>
		</div>
		<!-- End Header Section -->
		
		<!-- Menu Section -->
		<div id="left">
			<div class="media user-media well-small">
				<a class="user-link" href="#"
					<img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/logo.png" />
				</a>
				<br />
				<div class="media-body">
					<h5 class="media-heading">Dheka</h5>
					<ul class="list-unstyled user-info">
						<li>
							 <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a>Online
						</li>
					</ul>
				</div>
				<br />
			</div>';
		include ("model/leftbar.php");
		echo '
		</div>
		<!-- End Menu Section -->
		
		
		<!-- Page Content -->
		<div id="content"
		
			<div class="inner">
				<div class="row">
					<div class="col-lg-12">
						<h2> Data User </h2>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<button class="btn btn-succes" data-toggle="modal" data-target="#uiModal"> Add New User </button>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Depan</th>
												<th>Nama Belakang</th>
												<th>Email</th>
												<th>Action<th>
											</tr>
										</thead>
										<tbody>
											'.$t_user.'
										</tbody>
									</table>
								</div>
							</div>
							</div>
						</div>
				</div>
				
				<!-- Popup Baru -->
				<div clas="col-lg-12">
					<div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title" id="H3">Add New User</h4>
								</div>
								<div class="modal-body">
									<form action="model/muser.php" class="form-horizontal" id="block-validate" method="POST">
									
									<div class="form-group">
										<label class="control-label col-lg-4">Nama Depan</label>
										<div class="col-lg-6">
											<input type="text" id="required2" name="depan" class="form-control />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-4">Nama Belakang</label>
										<div class="col-lg-6">
											<input type="text" id="required3" name="belakang" class="form-control" />
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-4">Email</label>
										<div class="col-lg-6">
											<textarea id="whysihtml5" class="form-control" rows="3" name="email"></textarea>
										</div>
									</div>
									
									
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<input type="submit" class="btn btn-primary" value="Save change" name="insert">
							</div>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="row"></div>
	<div c;ass="row"></div>
	</div>
  </div>
   <!-- End Page Content -->
 </div>
	 <!-- End Main Wrapper -->';
	 
include ("model/footer.php");
?>	 
	 
										