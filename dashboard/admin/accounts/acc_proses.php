<?php 

// Config
require_once "../../../inc/config.php";

$account = new App\Account();
$user_role = App\Controller::session('user_role');

if (isset($_POST['input'])) {
	$account->input();
	header("location:" . URL . "/account");

}

if (isset($_POST['update'])) {
	$account->update();
	header("location:" . URL . "/account");
}

if (isset($_POST['delete'])) {
	$account->delete();
	header("location:" . URL . "/account");
}