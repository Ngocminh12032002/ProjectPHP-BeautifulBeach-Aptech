<?php
require_once('Model.php');

class SubscribeModel extends Model
{
	public $id, $fullname, $email, $phone_number, $address, $note, $password, $gender, $about_content,
		$contact_facebook, $forget_token, $group_id, $last_activity, $created_at, $updated_at;

	public function form()
	{
		$this->id = getPost('id');
		$this->fullname = getPost('fullname');
		$this->email = getPost('email');
		$this->phone_number = getPost('phone_number');
		$this->address = getPost('address');
		$this->password = getPost('password');
		$this->gender = getPost('gender');
		$this->note = getPost('note');
		$this->about_content = getPost('about_content');
		$this->contact_facebook = getPost('contact_facebook');
		$this->forget_token = getPost('forget_token');
		$this->group_id = getPost('group_id');
		$this->last_activity = getPost('last_activity');
		$this->created_at = date('Y-m-d H:i:s');
		$this->updated_at = date('Y-m-d H:i:s');
	}



	public static function list()
	{
		$sql = "select * from subscribe";
		$list = executeResult($sql);
		$dataList = [];

		foreach ($list as $item) {
			$u = new Subscribes();
			$u->id = $item['id'];
			$u->fullname = $item['fullname'];
			$u->email = $item['email'];
			$u->password = $item['password'];
			$u->phone_number = $item['phone_number'];
			$u->address = $item['address'];
			$u->gender = $item['gender'];
			$u->note = $item['note'];
			$u->about_content = $item['about_content'];
			$u->contact_facebook = $item['contact_facebook'];
			$u->forget_token = $item['forget_token'];
			$u->group_id = $item['group_id'];
			$u->status = $item['status'];
			$u->last_activity = $item['last_activity'];
			$u->created_at = $item['created_at'];
			$u->updated_at = $item['updated_at'];

			$dataList[] = $u;
		}

		return $dataList;
	}
}
