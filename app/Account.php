<?php 

namespace App;
use MongoDB;
use Carbon\Carbon;

class Account extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function init()
	{
		$collection = $this->db->col_users;
		$rows = $collection->find([]);

		return $rows;
	}

	public function count()
	{
		$collection = $this->db->col_users;
		$count = $collection->count([]);

		return $count;
	}

	public function getListInfo($net_id)
	{

		$collection = $this->db->col_users;
		$list = $collection->find([ 'net_id' => $net_id]);

		return $list;
	}

	public function input()
	{

		$net_id = $_POST['net_id'];
		$net_name = $_POST['net_name'];
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$user_role = $_POST['user_role'];
		$created_at = Carbon::now()->toDateTimeString();

		$collection = $this->db->col_users;
		$collection->insertOne([
			'net_id' => $net_id,
			'net_name' => $net_name,
			'user_name' => $user_name,
			'user_password' => $user_password,
			'user_role' => $user_role,
			'created_at' => $created_at
		]);

		return false;
	}

	public function edit($id)
	{

		$collection = $this->db->col_users;
		$row = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

		return $row;
	}

	public function update()
	{
		$_id = $_POST['_id'];
		$net_id = $_POST['net_id'];
		$net_name = $_POST['net_name'];
		$user_name = $_POST['user_name'];
		$user_role = $_POST['user_role'];

		$collection = $this->db->col_users;
		$collection->updateOne(
			['_id' => new MongoDB\BSON\ObjectId($_id)],
			['$set' => [
				'net_id' => $net_id, 
				'net_name' => $net_name,
				'user_name' => $user_name,
				'user_role' => $user_role,
			]]
		);

		return false;
	}

	public function detail($id)
	{

		$collection = $this->db->col_users;
		$row = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

		return $row;
	}

	public function delete()
	{

		$_id = $_POST['_id'];

		$collection = $this->db->col_users;
		$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($_id)]);

		return false;
	}
}