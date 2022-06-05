<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$mhsw = new App\Campaign();
$row = $mhsw->detail($id);
?>

<h2>
	DETAIL MAHASISWA
	<a href="<?php echo URL; ?>/campaign" class="btn btn-primary float-right">
		<i class="fa fa-arrow-left mr-2"></i> Back
	</a>
</h2>
<table class="table table-striped">
	<tr>
		<th style="width: 100px;">ID</th>
		<td><?php echo $row['_id']; ?></td>
	</tr>
	<tr>
		<th>ID</th>
		<td><?php echo $row['cam_id']; ?></td>
	</tr>
	<tr>
		<th>Campaign Name</th>
		<td><?php echo $row['cam_name']; ?></td>
	</tr>
	<tr>
		<th>Note</th>
		<td><?php echo $row['cam_note']; ?></td>
	</tr>
	<tr>
		<th>Update At</th>
		<td><?php echo $row['updated_at'] != "" ? \Carbon\Carbon::parse($row['updated_at'])->formatLocalized('%e %B %Y %H:%M:%S') : ""; ?></td>
	</tr>
</table>