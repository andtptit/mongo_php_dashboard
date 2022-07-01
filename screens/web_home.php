<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h2>HOME</h2>

<?php if (isset($_SESSION['login_error'])) { ?>
	
	<div class="alert alert-danger"><?php echo $_SESSION['login_error']; ?></div>

<?php } ?>

<div class="alert alert-info">
	Conversion Today
</div>

<table class="table table-bordered table-sm" id="dtb" data-form="dataForm">
	<thead>
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>Campaign Name</th>
			<th>Click</th>
			<th>Conversion</th>
		</tr>
	</thead>
	<tbody>
			<tr>
				<td>1</td>
				<td>camid_1</td>
				<td>Campaign 1</td>
				<td>100</td>
				<td>10</td>
			</tr>
	</tbody>
</table>

<?php unset($_SESSION['login_error']);