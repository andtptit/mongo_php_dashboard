<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

$account = new App\Account();
$row = $account->edit($id);

$user_role = App\Controller::session('user_role');
?>

<h2>Edit SKAD Info</h2>
<form method="POST" action="<?php echo URL . "/screens/" . $user_role; ?>/accounts/acc_proses.php">
	<input type="hidden" name="_id" value="<?php echo $id; ?>">
	<div class="form-group row">
		<label class="col-sm-2">Net ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="net_id" value="<?php echo $row['net_id']; ?>" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Net Name</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="net_name" value="<?php echo $row['net_name']; ?>" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">User Name</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="user_name" value="<?php echo $row['user_name']; ?>" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Role</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="user_role" value="<?php echo $row['user_role']; ?>" placeholder="" required="">
		</div>
	</div>
	<div class="form-group float-right">
		<a href="<?php echo URL; ?>/account" class="btn btn-primary">
			<i class="fa fa-arrow-left mr-2"></i> Back
		</a>
		<button class="btn btn-success" type="submit" name="update">
			<i class="fa fa-pencil mr-2"></i> Update
		</button>
	</div>	
</form>