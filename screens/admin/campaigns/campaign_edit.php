<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

$campaign = new App\Campaign();
$row = $campaign->edit($id);

$user_role = App\Controller::session('user_role');
?>

<h2>Edit Campaign</h2>
<form method="POST" action="<?php echo URL . "/screens/" . $user_role; ?>/campaigns/campaign_proses.php">
	<input type="hidden" name="_id" value="<?php echo $id; ?>">
	<div class="form-group row">
		<label class="col-sm-2">Cam ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="cam_id" value="<?php echo $row['cam_id']; ?>" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Publisher ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="publisher_id" value="<?php echo $row['publisher_id']; ?>" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">State</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="cam_state" value="<?php echo $row['cam_state']; ?>" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Conversion Day</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="cap_day" value="<?php echo $row['cap_day']; ?>" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">MMP</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="mmp_id" value="<?php echo $row['mmp_id']; ?>" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">SK Network ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="sk_net_id" value="<?php echo $row['sk_net_id']; ?>" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">MMP Detail</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="mmp_detail"><?php echo $row['mmp_detail']; ?></textarea>
		</div>
	</div>
	<div class="form-group float-right">
		<a href="<?php echo URL . "/" . $user_role; ?>/campaign" class="btn btn-primary">
			<i class="fa fa-arrow-left mr-2"></i> Back
		</a>
		<button class="btn btn-success" type="submit" name="update">
			<i class="fa fa-pencil mr-2"></i> Update
		</button>
	</div>	
</form>