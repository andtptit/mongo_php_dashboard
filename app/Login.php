<?php 

namespace App;

class Login extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function login()
	{

		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];

		$collection = $this->db->col_users;
		$row = $collection->findOne(['user_name' => $user_name]);

		if (!empty($row) AND password_verify($user_password, $row['user_password'])) {

			$_SESSION['login']  = true;
			$_SESSION['user_id']  = $row['_id'];
			$_SESSION['user_name']  = $row['user_name'];
			$_SESSION['user_role'] = $row['user_role'];
			$_SESSION['net_id'] = $row['net_id'];
		} else {
			$_SESSION['login_error'] = "Login error!";
		}

		return false;
	}

}
