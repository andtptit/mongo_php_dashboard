<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$campaign = new App\Campaign();
$row = $campaign->detail($id);

$user_role = App\Controller::session('user_role');
?>

<h2>
	DETAIL MAHASISWA
	<a href="<?php echo URL . "/" . $user_role; ?>/campaign" class="btn btn-primary float-right">
		<i class="fa fa-arrow-left mr-2"></i> Back
	</a>
</h2>
<table class="table table-striped">
	<tr>
		<th style="width: 100px;">ID</th>
		<td><?php echo $row['_id']; ?></td>
	</tr>
	<tr>
		<th>Net ID</th>
		<td><?php echo $row['net_id']; ?></td>
	</tr>
	<tr>
		<th>Cam ID</th>
		<td><?php echo $row['cam_id']; ?></td>
	</tr>
	<tr>
		<th>Publisher ID</th>
		<td><?php echo $row['publisher_id']; ?></td>
	</tr>
	<tr>
		<th>State</th>
		<td><?php echo $row['cam_state']; ?></td>
	</tr>
	<tr>
		<th>Conversion Day</th>
		<td><?php echo $row['cap_day']; ?></td>
	</tr>
	<tr>
		<th>MMP</th>
		<td><?php echo $row['mmp_id']; ?></td>
	</tr>
	<tr>
		<th>SK Network ID</th>
		<td><?php echo $row['sk_net_id']; ?></td>
	</tr>
	<tr>
		<th>MMP Detail</th>
		<td><?php echo $row['mmp_detail']; ?></td>
	</tr>
</table>