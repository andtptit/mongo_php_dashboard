<?php 

namespace App;
use MongoDB;
use Carbon\Carbon;

class Campaign extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function init()
	{

		$collection = $this->db->col_campaign;
		$rows = $collection->find([]);

		return $rows;
	}

	public function input()
	{

		$cam_id = $_POST['cam_id'];
		$cam_name = $_POST['cam_name'];
		$cam_note = $_POST['cam_note'];
		$created_at = Carbon::now()->toDateTimeString();
		$updated_at = "";

		$collection = $this->db->col_campaign;
		$collection->insertOne([
			'cam_id' => $cam_id,
			'cam_name' => $cam_name,
			'cam_note' => $cam_note,
			'created_at' => $created_at,
			'updated_at' => $updated_at
		]);

		return false;
	}

	public function edit($id)
	{

		$collection = $this->db->col_campaign;
		$row = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

		return $row;
	}

	public function update()
	{
		$_id = $_POST['_id'];
		$cam_id = $_POST['cam_id'];
		$cam_name = $_POST['cam_name'];
		$cam_note = $_POST['cam_note'];
		$updated_at = Carbon::now()->toDateTimeString();

		$collection = $this->db->col_campaign;
		$collection->updateOne(
			['_id' => new MongoDB\BSON\ObjectId($_id)],
			['$set' => [
				'cam_id' => $cam_id, 
				'cam_name' => $cam_name,
				'cam_note' => $cam_note,
				'updated_at' => $updated_at
			]]
		);

		return false;
	}

	public function detail($id)
	{

		$collection = $this->db->col_campaign;
		$row = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

		return $row;
	}

	public function delete()
	{

		$_id = $_POST['_id'];

		$collection = $this->db->col_campaign;
		$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($_id)]);

		return false;
	}
}