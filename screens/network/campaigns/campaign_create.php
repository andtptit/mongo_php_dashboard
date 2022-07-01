<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$campaign = new App\Campaign();

$user_role = App\Controller::session('user_role');
$net_id = App\Controller::session('net_id');
?>

<h2>Add Campaign</h2>
<form method="POST" action="<?php echo URL . "/screens/" . $user_role; ?>/campaigns/campaign_proses.php">
	<div class="form-group row">
		<label class="col-sm-2">Net ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="net_id" value="<?php echo $net_id ?>">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Cam ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="cam_id" placeholder="" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Publisher ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="publisher_id" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">State</label>
		<div class="col-sm-10">
			<select class="form-control" type="text" name="cam_state">
				<option value="approved">Approved</option>
				<option value="pending">Pending</option>
				<option value="archived">Archived</option>
			</select>
			<!-- <input class="form-control" type="text" name="cam_state" placeholder="" required=""> -->
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">Conversion Day</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="cap_day" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">MMP</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="mmp_id" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">SK Network ID</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="sk_net_id" placeholder="" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">MMP Detail</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="mmp_detail"></textarea>
		</div>
	</div>
	<div class="form-group float-right">
		<a href="<?php echo URL . "/" . $user_role; ?>/campaign" class="btn btn-primary">
			<i class="fa fa-arrow-left mr-2"></i> Back
		</a>
		<button class="btn btn-success" type="submit" name="input">
			<i class="fa fa-save mr-2"></i> Add
		</button>
	</div>	
</form>