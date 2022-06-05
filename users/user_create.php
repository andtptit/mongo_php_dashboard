<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$user = new App\User();

?>

<h2>Setup SKAD Info</h2>
<form method="POST" action="<?php echo URL; ?>/users/user_proses.php">
	<div class="form-group row">
		<label class="col-sm-2">Net ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="net_id" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Private Key</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="private_key" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Public Key</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="public_key"></textarea>
		</div>
	</div>
	<div class="form-group float-right">
		<a href="<?php echo URL; ?>/campaign" class="btn btn-primary">
			<i class="fa fa-arrow-left mr-2"></i> Back
		</a>
		<button class="btn btn-success" type="submit" name="input">
			<i class="fa fa-save mr-2"></i> Save
		</button>
	</div>	
</form>