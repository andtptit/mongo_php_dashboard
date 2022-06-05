<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

$user = new App\User();
$row = $user->edit($id);
?>

<h2>Edit SKAD Info</h2>
<form method="POST" action="<?php echo URL; ?>/users/user_proses.php">
	<input type="hidden" name="_id" value="<?php echo $id; ?>">
	<div class="form-group row">
		<label class="col-sm-2">Net ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="net_id" value="<?php echo $row['net_id']; ?>" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Private Key</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="private_key" value="<?php echo $row['private_key']; ?>" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Public Key</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="public_key"><?php echo $row['public_key']; ?></textarea>
		</div>
	</div>
	<div class="form-group float-right">
		<a href="<?php echo URL; ?>/campaign" class="btn btn-primary">
			<i class="fa fa-arrow-left mr-2"></i> Back
		</a>
		<button class="btn btn-success" type="submit" name="update">
			<i class="fa fa-pencil mr-2"></i> Update
		</button>
	</div>	
</form>