<?php 

// Config
require_once "../inc/config.php";

$user = new App\User();

if (isset($_POST['input'])) {

	$user->input();
	header("location:" . URL . "/user");
}

if (isset($_POST['update'])) {

	$user->update();
	header("location:" . URL . "/user");
}

if (isset($_POST['delete'])) {

	$user->delete();
	header("location:" . URL . "/user");
}