<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$account = new App\Account();
$row = $account->detail($id);
?>

<h2>
	Account Detail
	<a href="<?php echo URL; ?>/account" class="btn btn-primary float-right">
		<i class="fa fa-arrow-left mr-2"></i> Back
	</a>
</h2>
<table class="table table-striped">
	<tr>
		<th>Net ID</th>
		<td><?php echo $row['net_id']; ?></td>
	</tr>
	<tr>
		<th>Net Name</th>
		<td><?php echo $row['net_name']; ?></td>
	</tr>
	<tr>
		<th>User Name</th>
		<td><?php echo $row['user_name']; ?></td>
	</tr>
	<tr>
		<th>Role</th>
		<td><?php echo $row['user_role']; ?></td>
	</tr>


</table>