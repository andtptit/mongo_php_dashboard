<?php 

namespace App;
use MongoDB;
use Carbon\Carbon;

class Click extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function init()
	{

		$collection = $this->db->click;
		$rows = $collection->find([]);

		return $rows;
	}

	public function get_click($from, $to, $net_id)
	{
		$collection = $this->db->click;
		$list = $collection->find([
			'$and' =>
			[
				['$or' => [
					['time_sec' => ['$lte' => $to ]],
					['time_sec' => ['$gte' => $from ]]
				]],

				['net_id' => $net_id]]
			]
		);

		return $list;
	}


	public function count_click($net_id)
	{
		$collection = $this->db->click;
		$list = $collection->aggregate([
	[ '$match' => ['Assunto' => ['$nin' => [null]]] ],
	[ '$sortByCount'=> '$netid' ],
	[ '$sort' => ['Count' => -1] ]
]);

		return $list;
	}

	// db.mycol.aggregate([{$group : {_id : "$by_user", num_tutorial : {$sum : 1}}}])

	// db.click.aggregate([{$group : {_id : "$cam_id", num_tutorial : {$sum : 1}}}])

	public function getListCampaign($net_id)
	{

		$collection = $this->db->col_campaign;
		$list = $collection->find([ 'net_id' => $net_id]);

		return $list;
	}

	public function input()
	{

		$net_id = $_POST['net_id'];
		$cam_id = $_POST['cam_id'];
		$publisher_id = $_POST['publisher_id'];
		$cam_state = $_POST['cam_state'];
		$cap_day = $_POST['cap_day'];
		$mmp_id = $_POST['mmp_id'];
		$sk_net_id = $_POST['sk_net_id'];
		$mmp_detail = $_POST['mmp_detail'];
		$created_at = Carbon::now()->toDateTimeString();
		$updated_at = "";

		$collection = $this->db->col_campaign;
		$collection->insertOne([
			'net_id' => $net_id,
			'cam_id' => $cam_id,
			'publisher_id' => $publisher_id,
			'cam_state' => $cam_state,
			'cap_day' => $cap_day,
			'mmp_id' => $mmp_id,
			'sk_net_id' => $sk_net_id,
			'mmp_detail' => $mmp_detail,
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
		$publisher_id = $_POST['publisher_id'];
		$cam_state = $_POST['cam_state'];
		$cap_day = $_POST['cap_day'];
		$mmp_id = $_POST['mmp_id'];
		$sk_net_id = $_POST['sk_net_id'];
		$mmp_detail = $_POST['mmp_detail'];
		$updated_at = Carbon::now()->toDateTimeString();

		$collection = $this->db->col_campaign;
		$collection->updateOne(
			['_id' => new MongoDB\BSON\ObjectId($_id)],
			['$set' => [
				'cam_id' => $cam_id, 
				'publisher_id' => $publisher_id,
				'cam_state' => $cam_state,
				'cap_day' => $cap_day,
				'mmp_id' => $mmp_id,
				'sk_net_id' => $sk_net_id,
				'mmp_detail' => $mmp_detail,
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