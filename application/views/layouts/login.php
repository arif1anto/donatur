
<!DOCTYPE HTML>
<html>
	<head>
		<title>Login Admin | Sistem Informasi Pengolaan Data Sumbangan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="<?php echo base_url() ?>resources/css/bootstrap.min.css" rel='stylesheet' type='text/css' />

		<!-- Custom Theme files -->
		<link href="<?php echo base_url() ?>resources/css/style.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo base_url() ?>resources/css/font-awesome.css" rel="stylesheet"> 

		<script src="<?php echo base_url() ?>resources/js/jquery.min.js"> </script>
		<script src="<?php echo base_url() ?>resources/js/bootstrap.min.js"> </script>
  
		<!-- Mainly scripts -->
		<script src="<?php echo base_url() ?>resources/js/jquery.metisMenu.js"></script>
		<script src="<?php echo base_url() ?>resources/js/jquery.slimscroll.min.js"></script>
		<!-- Custom and plugin javascript -->
		<link href="<?php echo base_url() ?>resources/css/custom.css" rel="stylesheet">
		<script src="<?php echo base_url() ?>resources/js/custom.js"></script>
		<script src="<?php echo base_url() ?>resources/js/screenfull.js"></script>

		<link href="<?php echo base_url() ?>assets/datetime_picker/bootstrap-datetimepicker.min.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo base_url() ?>assets/css/jasny-bootstrap.min.css" rel='stylesheet' type='text/css' />
		<script src="<?php echo base_url() ?>assets/js/jasny-bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/datetime_picker/moment.js"></script>
		<script src="<?php echo base_url() ?>assets/datetime_picker/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo base_url() ?>assets/datetime_picker/id.js"></script>
		
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
		<div id="wrapper" style="padding:150px 15px 15px; ">

			<div class="row" style="margin-bottom:150px;">
			<div class="col-sm-offset-4 col-sm-4">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">
							Login Sistem
						</h3>
					</div>
					<div class="panel-body">
						<?php if(strpos($this->session->userdata("pesan"),"Login")!== false): ?>
			            <div class="alert alert-danger alert-dismissible" role="alert">
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			              <strong><?php echo $this->session->userdata("pesan") ?></strong>
			            </div>
			            <?php endif ?>
						<form action="<?php echo site_url("admin/login/login") ?>" method="POST">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-block"><i class="fa fa-sign-in"></i> Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
	        
			<div class="copy">
	            <p> Sipedas @ 2017 </p>	    
            </div>

			<div class="clearfix"> </div>
       	</div>

     	<!--scrolling js-->
		<script src="<?php echo base_url() ?>resources/js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url() ?>resources/js/scripts.js"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(66, 79, 99); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 111px; background-color: rgb(26, 188, 156); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(66, 79, 99); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 1366px; background-color: rgb(26, 188, 156); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div>
		<!--//scrolling js-->

	</body>
</html>

