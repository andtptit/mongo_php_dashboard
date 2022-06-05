<?php 

// Config
require_once "../inc/config.php";

$campaign = new App\campaign();

if (isset($_POST['input'])) {

	$campaign->input();
	header("location:" . URL . "/campaign");
}

if (isset($_POST['update'])) {

	$campaign->update();
	header("location:" . URL . "/campaign");
}

if (isset($_POST['delete'])) {

	$campaign->delete();
	header("location:" . URL . "/campaign");
}