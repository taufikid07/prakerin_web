<?php

include("model/auth.php");
include("model/koneksi.php");
echo '

	 <!-- Begin Body -->
<body class="padTop53">
	 <!-- Main Wrapper -->
	<div id="wrap">
		 <!-- Header Sections -->
		<div id="top">
			<nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
				<a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
					<i classs="icon-align-justify"></i>
				</a>
				<!-- Logo Sections -->
				<header class="navbar-header">
				
					<a href="index.html" class="navbar-brand">
					<img src="assest/img/logo.png" alt="" /></a>
				</header>
				<!-- End Logo Sections -->
				<ul class="nav navbar-top-links navbar-right">
					<!-- Admin Setting Sections -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<li class="icon-user"></i>&nbsp; <i class="icon-chevron-down"></li>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#"><i class="icon-user"></i> User Profil </a>
							</li>
							<li><a href="#"><i class="icon-gear"></i> Settings </a>
							</li>
							<li class="divider"></li>
							<li><a href="model/logout.php"><i class="icon-signout"></i> Logout </a>
							</li>
						</ul>
					</li>
					<!-- End Admin setting -->
				</ul>
			</nav>
		</div>
		<!-- End Header Section -->
		
		
		
		<!-- Menu Sections -->
		<div id="left">
			<div class="media user-media well-small">
			    <a class="user-link" href="#">
					<img class="media-object img-thumbnail user-img" alt="User Picture" src="assest/img/user.png" />
				</a>
				<br />
				<div class="media-body">
					<h5 class="media-heading"> Dheka </h5>
					<ul class="list-unstyled user-info">
						<li>
							<a class="btn btn-success btn-xs btn-circle" style="width:10px;height:12px;"></a> Online
						</li>
					</ul>
				</div>
				<br />
			</div>';
			include("model/leftbar.php")
			echo '
		</div>
		<!-- End Menu Section -->
		<!-- Page content -->
		<div id="content">
			<div class="inner">
				<div class="row">
					<div class="col-lg-12">
						<h1> Admin Dashboard Welcome '.$_SESSION['username'].'</h1>
					</div>
				</div>
				  <hr />
				 <!-- Block Section -->
				 <div class="row">
					<div class="col-lg-12">
						<div style="text-align: center;">
							<a class="quick-btn" href="angkutan.php">
								<i class="icon-check icon-2x"></i>
								<span> Angkutan <span>
							</a>
							<a class="quick-btn" href="rute.php">
								<i class="icon-signal icon-2x"></i>
								<span> Rute Jalan <span>
							</a>
							
						</div>
					</div>
				</div>
				 <!-- End Block Section -->
			</div>
			</div>
		</div>
		<!-- End Page Content -->
	</div>

	<!-- End Main Wrapper -->';
include("model/footer.php");
?>
			
			
			
			
			
			
			
			
			
			
			