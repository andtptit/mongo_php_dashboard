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

	public function signup()
	{

		$net_id = $_POST['net_id'];
		$sk_net_id = $_POST['sk_net_id'];
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$user_role = $_POST['user_role'];

		$password_hash = password_hash($user_password, PASSWORD_DEFAULT);

		$collection = $this->db->col_users;

		$collection->insertOne([
			'net_id' => $net_id,
			'sk_net_id' => $sk_net_id,
			'user_name' => $user_name,
			'user_password' => $password_hash,
			'user_role' => $user_role
		]);

		return false;
	}

}
