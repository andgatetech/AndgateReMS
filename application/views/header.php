<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>AndgateReMS :: Restuarent Management System </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Restuarent Management System.">
	<meta name="author" content="Andgate Technologies">

	<!-- The styles -->
	<link id="bs-css" href="<?php echo base_url();?>asset/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url();?>asset/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url();?>asset/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url();?>asset/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/uploadify.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>asset/css/custom.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>asset/img/favicon.ico">
	
	
		
</head>

<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"> <img alt="Charisma Logo" src="<?php echo base_url();?>asset/img/logo.png" /></a>
				
				<!-- theme selector starts -->
				
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url();?>authentication/logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>dashboard/index"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>pos/index"><i class="icon-shopping-cart"></i><span class="hidden-tablet"> POS</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>menuitem/index"><i class="icon-th-list"></i><span class="hidden-tablet"> Item</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>pos/index"><i class="icon-list-alt"></i><span class="hidden-tablet"> Inventory</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>pos/index"><i class="icon-tasks"></i><span class="hidden-tablet"> Task</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>pos/index"><i class="icon-user"></i><span class="hidden-tablet"> User</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>pos/index"><i class="icon-print"></i><span class="hidden-tablet"> Report</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>pos/index"><i class=" icon-cog"></i><span class="hidden-tablet"> Settings</span></a></li>

					</ul>
					
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>
