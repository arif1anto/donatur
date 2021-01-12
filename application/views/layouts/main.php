<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistem Informasi Pengolaan Data Sumbangan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="<?php echo site_url('resources/css/bootstrap.min.css');?>" rel='stylesheet' type='text/css' />

		<!-- Custom Theme files -->
		<link href="<?php echo site_url('resources/css/style.css');?>" rel='stylesheet' type='text/css' />
		<link href="<?php echo site_url('resources/css/font-awesome.css');?>" rel="stylesheet"> 

		<script src="<?php echo site_url('resources/js/jquery.min.js');?>"> </script>
		<script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"> </script>
  
		<!-- Mainly scripts -->
		<script src="<?php echo site_url('resources/js/jquery.metisMenu.js');?>"></script>
		<script src="<?php echo site_url('resources/js/jquery.slimscroll.min.js');?>"></script>
		<!-- Custom and plugin javascript -->
		<link href="<?php echo site_url('resources/css/custom.css');?>" rel="stylesheet">
		<script src="<?php echo site_url('resources/js/custom.js');?>"></script>
		<script src="<?php echo site_url('resources/js/screenfull.js');?>"></script>

		<link href="<?php echo site_url('assets/datetime_picker/bootstrap-datetimepicker.min.css');?>" rel='stylesheet' type='text/css' />
		<link href="<?php echo site_url('assets/css/jasny-bootstrap.min.css');?>" rel='stylesheet' type='text/css' />
		<script src="<?php echo site_url('assets/js/jasny-bootstrap.min.js');?>"></script>
		<script src="<?php echo site_url('assets/datetime_picker/moment.js');?>"></script>
		<script src="<?php echo site_url('assets/datetime_picker/bootstrap-datetimepicker.min.js');?>"></script>
		<script src="<?php echo site_url('assets/datetime_picker/id.js');?>"></script>
		
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
			if (!screenfull.enabled) {
				return false;
			}
			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			$('.date').datetimepicker({
				locale:"id",
				format:"DD-MM-YYYY",
				pickTime: false,
				icons: {
	                time: "fa fa-clock-o",
	                date: "fa fa-calendar",
	                up: "fa fa-arrow-up",
	                down: "fa fa-arrow-down"
	            }
			});
		});

		</script>
	</head>

	<body>
		<div id="wrapper">
	        <nav class="navbar-default navbar-static-top" role="navigation">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	              	<h1> <a class="navbar-brand" href="index.html">SIPEDAS<small style="font-size: 8px;
    color: white !important;
    float: left;
    text-align: center;
    width: 100%;
    margin-top: 3px;">Sistem Informasi Pengolah Data Sumbangan</small></a></h1>         
			   	</div>
			 	<div class=" border-bottom">
		        	<div class="full-left">
		        	  	<section class="full-top">
							<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
						</section>
            			<div class="clearfix"> </div>
	           		</div>
		            <!-- Brand and toggle get grouped for better mobile display -->
				 
				   	<!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="drop-men">
				        <ul class=" nav_1">
							<li class="dropdown">
				              	<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $this->session->userdata("admin_nama"); ?><i class="caret"></i></span><img src="<?php echo site_url($this->session->userdata("admin_foto"));?>" height="60px" width="60px"></a>
				              	<ul class="dropdown-menu " role="menu">
					                <li><a href="<?php echo site_url("admin/login/logout") ?>"><i class="fa fa-sign-out"></i>Logout</a></li>
				              	</ul>
				            </li>
				        </ul>
				    </div><!-- /.navbar-collapse -->
					<div class="clearfix"></div>
	  
				    <div class="navbar-default sidebar" role="navigation">
		                <div class="sidebar-nav navbar-collapse">
		                	<ul class="nav" id="side-menu">
		                		<?php 
		                			$url = $this->uri->segment(2);

		                		 ?>

								<li <?php echo $url=="admin"?"class='active'":""; ?>>
			                        <a href="<?php echo site_url('admin/admin/index');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Admin</span> </a>
			                    </li>
								<li <?php echo $url=="galeri"?"class='active'":""; ?>>
			                        <a href="<?php echo site_url('admin/galeri/index');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Galeri</span> </a>
			                    </li>
								<li <?php echo $url=="anak_asuh"?"class='active'":""; ?>>
			                        <a href="<?php echo site_url('admin/anak_asuh/index');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Anak Asuh</span> </a>
			                    </li>
								<li <?php echo $url=="donasi"?"class='active'":""; ?>>
			                        <a href="<?php echo site_url('admin/donasi/index');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Donasi</span> </a>
			                    </li>
								<li <?php echo $url=="donatur"?"class='active'":""; ?>>
			                        <a href="<?php echo site_url('admin/donatur/index');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Donatur</span> </a>
			                    </li>
								<li <?php echo $url=="kontak"?"class='active'":""; ?>>
			                        <a href="<?php echo site_url('admin/kontak/index');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Kontak</span> </a>
			                    </li>
								<li <?php echo $url=="transaksi_pengeluaran"?"class='active'":""; ?>>
			                        <a href="<?php echo site_url('admin/transaksi_pengeluaran/index');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Transaksi Pengeluaran</span> </a>
			                    </li>
								<li <?php echo $url=="rekap_keuangan"?"class='active'":""; ?>>
			                        <a href="<?php echo site_url('admin/rekap_keuangan/index');?>" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Rekap Keuangan</span> </a>
			                    </li>
		                	</ul>
	            		</div>
					</div>
        		</div>
        	</nav>
		 	<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 172px;">
       			<div class="content-main">
		 			<!--banner-->	
				    <div class="banner">
				    	<h2>
						<a href="<?php echo site_url("admin") ?>">Home</a>
						<i class="fa fa-angle-right"></i>
						<span>Forms</span>
						</h2>
				    </div>
					<!--//banner-->
				 	
				 	<!--grid-->
				 	<?php                    
	                if(isset($_view) && $_view)
	                    $this->load->view($_view);
	                ?>
				 	<!--//grid-->
		
					<div class="copy">
			            <p> Sipedas @ <?php echo date('Y') ?> </p>	    
		            </div>
				</div>
			</div>
			<div class="clearfix"> </div>
       	</div>

     	<!--scrolling js-->
		<script src="<?php echo site_url('resources/js/jquery.nicescroll.js');?>"></script>
		<script src="<?php echo site_url('resources/js/scripts.js');?>"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(66, 79, 99); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 111px; background-color: rgb(26, 188, 156); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(66, 79, 99); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 1366px; background-color: rgb(26, 188, 156); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div>
		<!--//scrolling js-->

	</body>
</html>

