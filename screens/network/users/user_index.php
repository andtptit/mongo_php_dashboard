<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$user = new App\User();
$rows = $user->init();
$count = $user->count();

$user_role = App\Controller::session('user_role');
$net_id = App\Controller::session('net_id');

$list = $user->getListInfo($net_id);
?>

<h2>
	Setup SKAD Info
	<?php if($count == 0) {
	?>
		<a class="btn btn-primary float-right" href="<?php echo URL . "/" . $user_role .  "/user"; ?>/create">
			<i class="fa fa-plus mr-2"></i> Add SKAD Info
		</a>
	<?php } ?>
</h2>
<table class="table table-bordered table-sm" id="dtb" data-form="dataForm">
	<thead>
		<tr>
			<th>Net ID</th>
			<th>SK Net ID</th>
			<th>Private Key</th>
			<th>Public Key</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=0; foreach ($list as $row) { $no++;?>
			<tr>
				<td><?php echo $row['net_id']; ?></td>
				<td><?php echo $row['sk_net_id']; ?></td>
				<td><?php echo $row['private_key']; ?></td>
				<td><?php echo $row['public_key']; ?></td>
				<td>
					<div class="d-flex">
						<a href="<?php echo URL . "/" . $user_role; ?>/user/edit/<?php echo $row['_id']; ?>" class="btn btn-sm btn-warning">
							<i class="fa fa-edit"></i> EDIT
						</a>
						<a href="<?php echo URL . "/" . $user_role; ?>/user/show/<?php echo $row['_id']; ?>" class="btn btn-sm btn-info ml-2">
							<i class="fa fa-info-circle"></i> DETAIL
						</a>
						<form method="POST" action="<?php echo URL . "/screens/" . $user_role; ?>/users/user_proses.php" id="deleteForm">
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