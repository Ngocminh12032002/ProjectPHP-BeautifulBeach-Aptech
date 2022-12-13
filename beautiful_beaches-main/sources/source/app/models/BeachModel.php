<?php

class BeacheModel extends Model
{
	public $id, $name, $slug, $thumbnail, $description, $video, $content, $user_id, $beach_categories_id, $created_at, $updated_at;

	public function form()
	{
		$this->id = getPost('id');
		$this->name = getPost('name');
		$this->slug = getPost('slug');
		$this->thumbnail = getPost('thumbnail');
		$this->description = getPost('description');
		$this->video = getPost('video');
		$this->content  = getPost('content');
		$this->user_id  = getPost('user_id ');
		$this->beach_categories_id  = getPost('beach_categories_id ');
	}

	// $u = new Users()
	// $u->insert()
	public function add()
	{
		$sql = "insert into beach (name, slug, thumbnail, description, video, content, user_id, beach_categories_id, beach_categories_id)
		 values
		  ('$this->name', '$this->slug', '$this->thumbnail', '$this->description', '$this->video','$this->content', '$this->user_id', '$this->beach_categories_id')";
		execute($sql);
	}

	// $u = new Users()
	// $u->update()
	public function edit()
	{
		$sql = "update beach set name = '$this->name' 
		where
		 id = $this->id, slug = $this->slug, thumbnail = $this->thumbnail, description = $this->description, video = $this->video, content = $this->content, user_id = $this->user_id, beach_categories_id = $this->beach_categories_id";
		execute($sql);
	}

	// $u = new Users()
	// $u->delete()
	public function del()
	{
		$sql = "delete from beach where id = $this->id";
		execute($sql);
	}

	// Users::list()
	public static function list()
	{
		$sql = "select * from beach";
		$list = executeResult($sql);
		$dataList = [];

		foreach ($list as $item) {
			$u = new Beaches();
			$u->id = $item['id'];
			$u->name = $item['name'];
			$u->slug = $item['slug'];
			$u->thumbnail = $item['thumbnail'];
			$u->description = $item['description'];
			$u->video = $item['video'];
			$u->content  = $item['content'];
			$u->user_id  = $item['user_id'];
			$u->beach_categories_id = $item['beach_categories_id'];
			$u->created_at = date('Y-m-d H:i:s');
			$u->updated_at = date('Y-m-d H:i:s');
			$dataList[] = $u;
		}
		return $dataList;
	}

	public static function list1()
	{
		$sql = "select * from beach where  beach_categories_id = 1";
		$list = executeResult($sql);
		$dataList = [];

		foreach ($list as $item) {
			$u = new Beaches();
			$u->id = $item['id'];
			$u->name = $item['name'];

			$dataList[] = $u;
		}

		return $dataList;
	}

	public static function list2()
	{
		$sql = "select * from beach where  beach_categories_id = 2";
		$list = executeResult($sql);
		$dataList = [];

		foreach ($list as $item) {
			$u = new Beaches();
			$u->id = $item['id'];
			$u->name = $item['name'];

			$dataList[] = $u;
		}

		return $dataList;
	}
	public static function list3()
	{
		$sql = "select * from beach where  beach_categories_id = 3";
		$list = executeResult($sql);
		$dataList = [];

		foreach ($list as $item) {
			$u = new Beaches();
			$u->id = $item['id'];
			$u->name = $item['name'];

			$dataList[] = $u;
		}

		return $dataList;
	}

	public static function find($id)
	{
		$sql = "select * from beach where id = $id";
		$item = executeResult($sql, true);
		if ($item == null) {
			return null;
		}

		$u = new Beaches();
		$u->id = $item['id'];
		$u->name = $item['name'];
		$u->slug = $item['slug'];
		$u->thumbnail = $item['thumbnail'];
		$u->description = $item['description'];
		$u->video = $item['video'];
		$u->content  = $item['content'];
		$u->user_id  = $item['user_id '];
		$u->beach_categories_id = $item['beach_categories_id'];
		$u->created_at = date('Y-m-d H:i:s');
		$u->updated_at = date('Y-m-d H:i:s');
		return $u;
	}
}