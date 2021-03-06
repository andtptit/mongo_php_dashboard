<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

$user = new App\User();
$user_role = App\Controller::session('user_role');
$net_id = App\Controller::session('net_id');

?>

<h2>Setup SKAD Info</h2>

<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">Signup</div>

			<div class="card-body">
				<form method="POST" action="<?php echo URL . "/screens/" . $user_role; ?>/accounts/acc_proses.php">
					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">Net ID</label>

						<div class="col-md-6">
							<input type="text" class="form-control" name="net_id" required autocomplete="off" autofocus>
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">Net Name</label>

						<div class="col-md-6">
							<input type="text" class="form-control" name="net_name" required autocomplete="off" autofocus>
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">Username</label>

						<div class="col-md-6">
							<input type="text" class="form-control" name="user_name" required autocomplete="off" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

						<div class="col-md-6">
							<input type="password" class="form-control" name="user_password" required autocomplete="off">
						</div>
					</div>
					<div class="form-group row">
						<label for="role" class="col-md-4 col-form-label text-md-right">Role</label>

						<div class="col-md-6">
							<select class="form-control" name="user_role" required autocomplete="off">
								<option value='admin'>Admin</option>
								<option value='network'>Network</option>
							</select>
						</div>
					</div>

					<div class="form-group row mb-0">
						<div class="col-md-8 offset-md-4">
							<button type="submit" class="btn btn-primary" name="input">Create account</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
