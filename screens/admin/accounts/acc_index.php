<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$account = new App\Account();
$rows = $account->init();
$count = $account->count();

$user_role = App\Controller::session('user_role');

if($user_role != 'admin')exit
?>

<h2>
	List Account Network
	<a class="btn btn-primary float-right" href="<?php echo URL . "/account"; ?>/create">
		<i class="fa fa-plus mr-2"></i> Add Account
	</a>
</h2>
<table class="table table-bordered table-sm" id="dtb" data-form="dataForm">
	<thead>
		<tr>
			<th>NO</th>
			<th>Net ID</th>
			<th>Net Name</th>
			<th>User Name</th>
			<th>Role</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=0; foreach ($rows as $row) { $no++;?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row['net_id']; ?></td>
				<td><?php echo $row['net_name']; ?></td>
				<td><?php echo $row['user_name']; ?></td>
				<td><?php echo $row['user_role']; ?></td>
				<td>
					<div class="d-flex">
						<a href="<?php echo URL; ?>/account/edit/<?php echo $row['_id']; ?>" class="btn btn-sm btn-warning">
							<i class="fa fa-edit"></i> EDIT
						</a>
						<a href="<?php echo URL; ?>/account/show/<?php echo $row['_id']; ?>" class="btn btn-sm btn-info ml-2">
							<i class="fa fa-info-circle"></i> DETAIL
						</a>
						<form method="POST" action="<?php echo URL . "/screens/" . $user_role; ?>/accounts/acc_proses.php" id="deleteForm">
							<input type="hidden" name="_id" value="<?php echo $row['_id']; ?>">
							<input type="hidden" name="delete">
							<button class="btn btn-danger btn-sm ml-2">
								<i class="fa fa-trash"></i> Delete
							</button>
						</form>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<!-- Modal hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteModalTitle"><i class="fe fe-trash"></i> Confirm Delete</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Are you sure you delete this data?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">
					<i class="fa fa-arrow-left"></i> Cancel
				</button>
				<button type="button" class="btn btn-danger" id="btn-delete-confirm">
					<i class="fa fa-trash"></i> Delete
				</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal hapus -->

<script>	
	$(document).ready(function(){
		$('table[data-form="dataForm"]').on('click', '#deleteForm', function(e){
			e.preventDefault();
			var $form = $(this);
			$('#deleteModal').modal({ backdrop: 'static', keyboard: false }).on('click', '#btn-delete-confirm', function(){
				$form.submit();
			});
		});
	});
</script>