<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$user = new App\User();
$user_role = App\Controller::session('user_role');
$net_id = App\Controller::session('net_id');

?>

<h2>Setup SKAD Info</h2>
<form method="POST" action="<?php echo URL . "/screens/" . $user_role; ?>/users/user_proses.php">
	<div class="form-group row">
		<label class="col-sm-2">Net ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="net_id" required=""  value="<?php echo $net_id ?>">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">SK Net ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="sk_net_id" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Private Key</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="private_key"></textarea>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Public Key</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="public_key"></textarea>
		</div>
	</div>
	<div class="form-group float-right">
		<a href="<?php echo URL . "/" . $user_role; ?>/user" class="btn btn-primary">
			<i class="fa fa-arrow-left mr-2"></i> Back
		</a>
		<button class="btn btn-success" type="submit" name="input">
			<i class="fa fa-save mr-2"></i> Save
		</button>
	</div>	
</form>
