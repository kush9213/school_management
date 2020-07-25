<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="<?php  echo  base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light') ?>" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo   base_url('assets/vendor/bootstrap/css/bootstrap.css') ?>" />

		<link rel="stylesheet" href="<?php echo   base_url('assets/vendor/font-awesome/css/font-awesome.css') ?>" />
		<link rel="stylesheet" href="<?php echo  base_url('assets/vendor/magnific-popup/magnific-popup.css') ?>" />
		<link rel="stylesheet" href="<?php echo  base_url('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') ?>" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo  base_url('assets/stylesheets/theme.css') ?>" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo  base_url('assets/stylesheets/skins/default.css') ?>" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo  base_url('assets/stylesheets/theme-custom.css') ?>">

		<!-- Head Libs -->
		<script src="<?php echo  base_url('assets/vendor/modernizr/modernizr.js') ?>"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="#" class="logo pull-left">
					<img src="<?php echo base_url('assets/images/logo.png') ?>" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i>Admin Sign In</h2>
					</div>
					<div class="panel-body">
						 <form action="<?php echo base_url('login')?> " method="post" autocomplete="off">  

							 
							 <?php if($error=$this->session->flashdata('message')) {?>
								<?php if($msg=$this->session->flashdata('msg_class')) {?>
									<div class="alert <?= $msg ?>">
										<?= $error?>
									</div>

							<?php }} ?>



							<?php if($msg2=$this->session->flashdata('error')) {?>
								 
									<div class="alert bg-danger">
										<?= $msg2?>
									</div>

							<?php } ?>


							<div class="form-group mb-lg">
								<label>Email Id</label>
								<input name="email" type="email"  value="<?php echo set_value('email') ?>"   class="form-control input-lg" />
								<?php echo form_error('email') ?>
							</div>

						 
							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<input name="password" type="password"  value="<?php echo set_value('password') ?>" class="form-control input-lg" />
									<?php echo form_error('password') ?>
									<a href="#" class="pull-right">Lost Password?</a>
								</div>
								 
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-whatsapp"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-instagram"></i></a>
							</div>

							<p class="text-center">Don't have an account yet? <a href="<?php echo base_url('Admin/signup') ?>">Sign Up!</a></p>

			     	</form>   
					</div>
				</div>


				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2020. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url('assets/vendor/jquery/jquery.js') ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') ?>"></script>
		<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.js') ?>"></script>
		<script src="<?php echo base_url('assets/vendor/nanoscroller/nanoscroller.js') ?>"></script>
		<script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>
		<script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.js') ?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery-placeholder/jquery-placeholder.js') ?>"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url('assets/javascripts/theme.js') ?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url('assets/javascripts/theme.custom.js') ?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url('assets/javascripts/theme.init.js') ?>"></script>

	</body>
</html>

