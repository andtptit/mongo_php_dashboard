<?php 

namespace App;
use MongoDB;
use Carbon\Carbon;

class User extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function init()
	{
		$collection = $this->db->col_user_info;
		$rows = $collection->find([]);

		return $rows;
	}

	public function input()
	{

		$net_id = $_POST['net_id'];
		$private_key = $_POST['private_key'];
		$public_key = $_POST['public_key'];
		$created_at = Carbon::now()->toDateTimeString();
		$updated_at = "";

		$collection = $this->db->col_user_info;
		$collection->insertOne([
			'net_id' => $net_id,
			'private_key' => $private_key,
			'public_key' => $public_key,
			'created_at' => $created_at,
			'updated_at' => $updated_at
		]);

		return false;
	}

	public function edit($id)
	{

		$collection = $this->db->col_user_info;
		$row = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

		return $row;
	}

	public function update()
	{
		$_id = $_POST['_id'];
		$net_id = $_POST['net_id'];
		$private_key = $_POST['private_key'];
		$public_key = $_POST['public_key'];
		$updated_at = Carbon::now()->toDateTimeString();

		$collection = $this->db->col_user_info;
		$collection->updateOne(
			['_id' => new MongoDB\BSON\ObjectId($_id)],
			['$set' => [
				'net_id' => $net_id, 
				'private_key' => $private_key,
				'public_key' => $public_key,
				'updated_at' => $updated_at
			]]
		);
		return false;
	}

	public function detail($id)
	{

		$collection = $this->db->col_user_info;
		$row = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

		return $row;
	}

	public function delete()
	{

		$_id = $_POST['_id'];

		$collection = $this->db->col_user_info;
		$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($_id)]);

		return false;
	}
}