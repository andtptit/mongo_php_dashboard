<?php 

// Config
require_once "../../../inc/config.php";

$campaign = new App\campaign();
$user_role = App\Controller::session('user_role');

if (isset($_POST['input'])) {
	$campaign->input();
	if($user_role == 'admin'){
		header("location:" . URL . "/admin/campaign");
	}elseif ($user_role == 'network') {
		header("location:" . URL . "/network/campaign");
	}
}

if (isset($_POST['update'])) {
	$campaign->update();
	if($user_role == 'admin'){
		header("location:" . URL . "/admin/campaign");
	}elseif ($user_role == 'network') {
		header("location:" . URL . "/network/campaign");
	}
}

if (isset($_POST['delete'])) {
	$campaign->delete();
	if($user_role == 'admin'){
		header("location:" . URL . "/admin/campaign");
	}elseif ($user_role == 'network') {
		header("location:" . URL . "/network/campaign");
	}
}