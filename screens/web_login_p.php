<?php 

// Config
require_once "../inc/config.php";

$user = new App\Login();

if (isset($_POST['login'])) {

	$user->login();
	header("location:" . URL . "/");
}
