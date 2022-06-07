<?php 

// Config
require_once "../../../inc/config.php";

$user = new App\user();
$user_role = App\Controller::session('user_role');

if (isset($_POST['input'])) {
	$user->input();
	if($user_role == 'admin'){
		header("location:" . URL . "/admin/user");
	}elseif ($user_role == 'network') {
		header("location:" . URL . "/network/user");
	}
}

if (isset($_POST['update'])) {
	$user->update();
	if($user_role == 'admin'){
		header("location:" . URL . "/admin/user");
	}elseif ($user_role == 'network') {
		header("location:" . URL . "/network/user");
	}
}

if (isset($_POST['delete'])) {
	$user->delete();
	if($user_role == 'admin'){
		header("location:" . URL . "/admin/user");
	}elseif ($user_role == 'network') {
		header("location:" . URL . "/network/user");
	}
}