<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo doctype();
?>
<html>
<head>
	<title><?=$title; ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="http://localhost/hack/assets/css/owl.carousel.css">
	<!-- Default Theme -->
	<link rel="stylesheet" href="http://localhost/hack/assets/css/owl.theme.css">
	<link href="http://localhost/hack/assets/css/default.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/rateit.css'); ?>">
	<style type="text/css">
	.heading_bar {
		border-right: 2px solid grey;
		min-height: 140px;
		background: #f8f8f8;
		border-radius: 5px;
		padding: 15px 9px 9px 9px;
	}
	.heading {
		padding: 0px 0px 0px 0px;
		text-align: center;
		font-weight: bold;
		font-size: 16px;
		color: #000;
	}
	.heading:before {
		content: '# '
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="#" style="padding-left:100px">WebSiteName</a>
    			</div>
    			<ul class="nav navbar-nav" style="padding-left: 100px">
      				<li class="active"><a href="#">Home</a></li>
     				<li><a href="#">Page 1</a></li>
      				<li><a href="#">Page 2</a></li> 
      				<li><a href="#">Page 3</a></li> 
    			</ul>
  			</div>
		</nav>

		<div class="container" style="margin-top: 60px;">
			<div class="row">
				<div class="col-md-8">
					<div class="heading_bar">
						<div class="heading">Greentara Overseas company Pvt Ltd</div>
						<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<br>
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-responsive table-striped">
									<thead>
										<tr>
											<td>Phone :</td>
											<td>9860428885</td>
										</tr>
										<tr>
											<td>Email :</td>
											<td>prazeev@gmail.com</td>
										</tr>
										<tr>
											<td>Website :</td>
											<td><a href="http://greentara.com.np">http://greentara.com.np</a></td>
										</tr>
										<tr>
											<td>Address :</td>
											<td>Kathmandu, bhaktapur- 15</td>
										</tr>
									</thead>
								</table>
							</div>
						</div>


						
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<img class="img img-responsive img-thumbnail img-circle" src="<?=base_url('img/owl1.jpg'); ?>">
							<center><div style="padding-top: 7px;" class="rateit" data-rateit-value="3" data-rateit-ispreset="true" data-rateit-readonly="true"></div></center>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>

<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
<script src="<?=base_url('assets/js/jquery.rateit.min.js'); ?>"></script>
<script src="<?=base_url('assets/js/custom.js'); ?>"></script>
</html>