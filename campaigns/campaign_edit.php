<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

$mhsw = new App\Campaign();
$row = $mhsw->edit($id);
?>

<h2>Edit Campaign</h2>
<form method="POST" action="<?php echo URL; ?>/campaigns/campaign_proses.php">
	<input type="hidden" name="_id" value="<?php echo $id; ?>">
	<div class="form-group row">
		<label class="col-sm-2">ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="cam_id" value="<?php echo $row['cam_id']; ?>" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Campaign Name</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="cam_name" value="<?php echo $row['cam_name']; ?>" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Note</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="cam_note"><?php echo $row['cam_note']; ?></textarea>
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