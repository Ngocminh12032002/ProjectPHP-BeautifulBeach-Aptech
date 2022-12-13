<?php

class BeachAdminModel extends Model
{
    public $id, $fullname, $email, $phone_number, $address, $password, $gender, $about_content,
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
        $this->about_content = getPost('about_content');
        $this->contact_facebook = getPost('contact_facebook');
        $this->forget_token = getPost('forget_token');
        $this->group_id = getPost('group_id');
        $this->last_activity = getPost('last_activity');
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
    }

    // $u = new Users()
    // $u->insert()
    public function add()
    {

        $sql = "insert into users (fullname, email, phone_number, address, password, gender,
		about_content,about_content, contact_facebook, forget_token, group_id, last_activity
		created_at, updated_at) 
		values 
		('$this->fullname', '$this->email', '$this->phone_number', '$this->address', '$this->password', '$this->gender',
		'$this->about_content', '$this->contact_facebook', '$this->forget_token', '$this->group_id', '$this->last_activity'
		'$this->created_at', '$this->updated_at')";
        execute($sql);
    }

    // $u = new Users()
    // $u->update()
    public function edit()
    {
        $sql = "UPDATE users SET fullname = '$this->fullname', email = '$this->email', 
        address = '$this->address', gender = '$this->gender',
		about_content = '$this->about_content', contact_facebook = '$this->contact_facebook', forget_token = '$this->forget_token',group_id = '$this->group_id', ,last_activity = '$this->last_activity',
		 updated_at = '$this->updated_at' where id= '$this->id'";
        execute($sql);
    }

    // $u = new Users()
    // $u->delete()
    public function del()
    {
        $sql = "DELETE FROM users WHERE id ='$this->id'";
        execute($sql);
    }

    public static function list()
    {
        $sql = "select * from users";
        $list = executeResult($sql);
        $dataList = [];

        foreach ($list as $item) {
            $u = new Users();
            $u->id = $item['id'];
            $u->fullname = $item['fullname'];
            $u->email = $item['email'];
            $u->password = $item['password'];
            $u->phone_number = $item['phone_number'];
            $u->address = $item['address'];
            $u->gender = $item['gender'];
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

    // Users::find()
    public static function find($id)
    {
        $sql = "SELECT * FROM users WHERE id = $id";
        $item = executeResult($sql, true);
        if ($item == null) {
            return null;
        }
        //chuyen mang key value ve mang object
        $u = new Users();
        $u->id = $item['id'];
        $u->fullname = $item['fullname'];
        $u->email = $item['email'];
        $u->password = $item['password'];
        $u->phone_number = $item['phone_number'];
        $u->address = $item['address'];
        $u->gender = $item['gender'];
        $u->about_content = $item['about_content'];
        $u->contact_facebook = $item['contact_facebook'];
        $u->forget_token = $item['forget_token'];
        $u->group_id = $item['group_id'];
        $u->status = $item['status'];
        $u->last_activity = $item['last_activity'];
        $u->created_at = $item['created_at'];
        $u->updated_at = $item['updated_at'];

        return $u;
    }
}