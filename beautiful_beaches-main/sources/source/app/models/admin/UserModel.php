<?php
class UserModel extends Model
{
    protected $_table = 'users';
    public $id, $fullname, $email, $phone_number, $address, $password, $gender, $avata, $about_content,
        $contact_facebook, $forget_token, $group_id, $status, $last_activity, $created_at, $updated_at;


    public function __construct()
    {
        parent::__construct();
    }

    public function login($data)
    {
        $this->email = $data['email'];
        $this->password = $data['password'];
        $sql = "SELECT * FROM $this->_table WHERE email = '$this->email' and password = '$this->password'";
        $data = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function registerPost($data)
    {

        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
        $data = (object)$data;
        $sql = "insert into $this->_table (fullname, email,password, created_at, updated_at) 
		values 
		('$data->fullname', '$data->email', '$data->password','$this->created_at', '$this->updated_at')";
        $this->db->query($sql);
    }

    public function getList($sortArr = "")
    {

        $sql = "SELECT * FROM $this->_table";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['search']) && !empty($_POST['option'])) {
                $keyword = $_POST['search'];
                $option = $_POST['option'];
                $sql = "SELECT * FROM $this->_table WHERE status = $option and fullname like '%$keyword%' or email  like '%$keyword%' ";
            } else if (!empty($_POST['search']) && empty($_POST['option'])) {
                $keyword = $_POST['search'];
                $sql = "SELECT * FROM $this->_table WHERE  fullname like '%$keyword%' or email  like '%$keyword%' ";
            } else if (empty($_POST['search']) && !empty($_POST['option'])) {
                $option = $_POST['option'];
                $sql = "SELECT * FROM $this->_table WHERE  status = $option";
            }
        } else {
            $sql = "SELECT * FROM $this->_table";
        }
        // sort column
        if (!empty($sortArr) && is_array($sortArr)) {
            if (!empty($sortArr['sortBy']) && !empty($sortArr['sortType'])) {
                $sortBy = trim($sortArr['sortBy']);
                $sortType = trim($sortArr['sortType']);
                $sql = $sql . " ORDER BY" . " $sortBy" . " $sortType";
            }
        } else {
            $sql = $sql . " ORDER BY created_at desc";
        }

        $dataList = [];
        $list = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach ($list as $item) {
            $u = new UserModel();
            $u->id = $item['id'];
            $u->fullname = $item['fullname'];
            $u->email = $item['email'];
            $u->password = $item['password'];
            $u->phone_number = $item['phone_number'];
            $u->address = $item['address'];
            $u->gender = $item['gender'];
            $u->avata = $item['avata'];
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


    public function addPost($dataForm)
    {
        $dataForm = (object)$dataForm;
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
        $sql = "insert into $this->_table (fullname, email, phone_number, address, password, gender,avata,
    	about_content, contact_facebook, created_at, updated_at) 
    	values 
    	('$dataForm->fullname', '$dataForm->email', '$dataForm->phone_number', '$dataForm->address', '$dataForm->password', '$dataForm->gender',
    	'$dataForm->avata','$dataForm->about_content', '$dataForm->contact_facebook', '$this->created_at', '$this->updated_at')";
        $this->db->query($sql);
    }


    public function checkEmail($dataForm)
    {
        var_dump($dataForm);
        $email = $dataForm['email'];
        echo "<hr/>";
        echo $email;
        $sql = "SELECT * FROM $this->_table WHERE email = '$email'";
        $list = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    public function first($id)
    {
        $sql = "SELECT * FROM $this->_table WHERE id = $id";
        $list = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }


    public function editPost($dataForm)
    {
        $dataForm = (object)$dataForm;
        $this->updated_at =  date('Y-m-d H:i:s');
        $sql = "UPDATE $this->_table SET fullname = '$dataForm->fullname', email = '$dataForm->email', phone_number = '$dataForm->phone_number',
            address = '$dataForm->address', gender = '$dataForm->gender', avata = '$dataForm->avata', about_content = '$dataForm->about_content',
        	contact_facebook = '$dataForm->contact_facebook', updated_at = '$this->updated_at' WHERE id= '$dataForm->id'";
        $this->db->query($sql);
    }


    public function delPost($id)
    {
        $sql = "DELETE FROM $this->_table WHERE id = $id";
        $this->db->query($sql);
    }
}