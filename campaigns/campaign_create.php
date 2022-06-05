<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$mhsw = new App\Campaign();

?>

<h2>Add Campaign</h2>
<form method="POST" action="<?php echo URL; ?>/campaign_proses.php">
	<div class="form-group row">
		<label class="col-sm-2">ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="cam_id" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Name Campaign</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="cam_name" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Note</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="cam_note"></textarea>
		</div>
	</div>
	<div class="form-group float-right">
		<a href="<?php echo URL; ?>/campaign" class="btn btn-primary">
			<i class="fa fa-arrow-left mr-2"></i> Back
		</a>
		<button class="btn btn-success" type="submit" name="input">
			<i class="fa fa-save mr-2"></i> Add
		</button>
	</div>	
</form>
