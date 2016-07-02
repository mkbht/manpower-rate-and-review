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
	<div class="col-md-9">
		<?=validation_errors('<div class="alert alert-danger">', '</div>');?>
		<?=form_open(base_url('admin/addmanpower'))?>
		<label>Manpower Name</label>
		<input class="form-control" name="name" type="text">
		<label>Address</label>
		<input type="text" name="address" class="form-control">
		<label>Phone No.</label>
		<input type="tel" name="phone" class="form-control">
		<label>Description</label>
		<textarea name="description" class="form-control" rows=10></textarea>
		<label>Thumbnail Url</label>
		<input type="text" name="thumb" class="form-control">
		<br>
		<button name="submit" type="submit" class="btn btn-primary">Add Manpower</button>
	</div>
</div>
</body>
