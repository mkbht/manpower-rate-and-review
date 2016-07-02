<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admin.css')?>">
</head>
<body>
<div class="row">
	<div class="col-md-2">
		<div class="leftbar">
			<div class="logo">MRR</div>
			<div class="menu">
				<ul>
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Verify Users</a></li>
					<li><a href="#">Manpower</a></li>
					<li><a href="#">UserList</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-10">
		<b> Admin Panel</b>
		Successfully Logged In <?=$username?>
		
		<table class="table table-bordered table-striped">
			<tr>
				<th>SN</th>
				<th>Name</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Description</th>
				<th>Thumbnail</th>
			</tr>
			<?php for($i = 0; $i < count($manpower); $i++): ?>
				<tr>
				<?php foreach($manpower[$i] as $key => $value): ?>
					<td><?=$value?></td>
				<?php endforeach?>
				</tr>
			<?php endfor?>
		</table>
	</div>
</div>
</body>
