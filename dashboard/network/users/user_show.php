<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$user = new App\User();
$row = $user->detail($id);
?>

<h2>
	SKAD Info
	<a href="<?php echo URL; ?>/user" class="btn btn-primary float-right">
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
		<th>Private Key</th>
		<td><?php echo $row['private_key']; ?></td>
	</tr>
	<tr>
		<th>Public Key</th>
		<td><?php echo $row['public_key']; ?></td>
	</tr>
	<tr>
		<th>Update At</th>
		<td><?php echo $row['updated_at'] != "" ? \Carbon\Carbon::parse($row['updated_at'])->formatLocalized('%e %B %Y %H:%M:%S') : ""; ?></td>
	</tr>
</table>