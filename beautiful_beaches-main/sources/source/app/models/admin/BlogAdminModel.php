<?php
class BlogAdminModel extends Model
{
    private $_table = 'blog';
    private $_table_comment = 'comments';
    public $id, $title, $slug, $user_id, $category_id, $content, $description, $view_count,
        $thumbnail, $created_at, $updated_at;

    public function __construct()
    {
        parent::__construct();
    }

    public function getList($sortArr = null)
    {
        $sql = "SELECT * FROM $this->_table";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['search']) && !empty($_POST['option'])) {
                $keyword = $_POST['search'];
                $option = $_POST['option'];
                $sql = "SELECT * FROM $this->_table WHERE category_id = $option and slug like '%$keyword%' or title  like '%$keyword%' ";
            } else if (!empty($_POST['search']) && empty($_POST['option'])) {
                $keyword = $_POST['search'];
                $sql = "SELECT * FROM $this->_table WHERE  slug like '%$keyword%' or title  like '%$keyword%' ";
            } else if (empty($_POST['search']) && !empty($_POST['option'])) {
                $option = $_POST['option'];
                $sql = "SELECT * FROM $this->_table WHERE  category_id = $option";
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
            $sql = $sql . " ORDER BY updated_at desc";
        }


        $list = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $dataList = [];
        foreach ($list as $item) {
            $u = new BlogAdminModel();
            $u->id = $item['id'];
            $u->title = $item['title'];
            $u->slug = $item['slug'];
            $u->user_id = $item['user_id'];
            $u->category_id = $item['category_id'];
            $u->content = $item['content'];
            $u->thumbnail = $item['thumbnail'];
            $u->description = $item['description'];
            $u->view_count = $item['view_count'];
            $u->created_at = $item['created_at'];
            $u->updated_at = $item['updated_at'];
            $dataList[] = $u;
        }
        return $dataList;
    }
    public function getTop($top)
    {
        $list = $this->db->query("SELECT *  FROM $this->_table ORDER BY created_at ASC  LIMIT $top")->fetchAll(PDO::FETCH_ASSOC);
        $dataList = [];
        foreach ($list as $item) {
            $u = new BlogAdminModel();
            $u->id = $item['id'];
            $u->title = $item['title'];
            $u->slug = $item['slug'];
            $u->user_id = $item['user_id'];
            $u->category_id = $item['category_id'];
            $u->content = $item['content'];
            $u->thumbnail = $item['thumbnail'];
            $u->description = $item['description'];
            $u->view_count = $item['view_count'];
            $u->created_at = $item['created_at'];
            $u->updated_at = $item['updated_at'];
            $dataList[] = $u;
        }
        return $dataList;
    }

    public function foodList()
    {
        $list = $this->db->query("SELECT * FROM $this->_table WHERE category_id = 1 ")->fetchAll(PDO::FETCH_ASSOC);
        $dataList = [];
        foreach ($list as $item) {
            $u = new BlogAdminModel();
            $u->id = $item['id'];
            $u->title = $item['title'];
            $u->slug = $item['slug'];
            $u->user_id = $item['user_id'];
            $u->category_id = $item['category_id'];
            $u->content = $item['content'];
            $u->thumbnail = $item['thumbnail'];
            $u->description = $item['description'];
            $u->view_count = $item['view_count'];
            $u->created_at = $item['created_at'];
            $u->updated_at = $item['updated_at'];
            $dataList[] = $u;
        }
        return $dataList;
    }

    public function foodDetail($id)
    {
        $dataList = $this->db->query("SELECT * FROM $this->_table WHERE id = $id ")->fetch(PDO::FETCH_ASSOC);

        return $dataList;
    }
    public function commentDetail($id)
    {
        $list = $this->db->query("SELECT * FROM $this->_table_comment WHERE blog_id = $id ")->fetchAll(PDO::FETCH_ASSOC);
        $dataList = [];
        foreach ($list as $item) {
            $u = new BlogAdminModel();
            $u->id = $item['id'];
            $u->user_id = $item['user_id'];
            $u->parent_id = $item['parent_id'];
            $u->comment_name = $item['comment_name'];
            $u->content = $item['content'];
            $u->blog_id = $item['blog_id'];
            $u->email = $item['email'];
            $u->created_at = $item['created_at'];
            $dataList[] = $u;
        }
        return $dataList;
    }


    public function addPost($dataForm)
    {
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at =  date('Y-m-d H:i:s');

        $dataForm = (object)$dataForm;
        $sql = "insert into blog (title, slug, user_id, category_id, content, thumbnail, description, view_count, created_at, updated_at) 
		values 
		('$dataForm->title', '$dataForm->slug', '$dataForm->user_id', '$dataForm->category_id','$dataForm->content','$dataForm->thumbnail',  '$dataForm->description', '$this->view_count',
		'$this->created_at', '$this->updated_at')";

        $this->db->query($sql);
    }

    public function first($id)
    {
        $sql = "SELECT * FROM $this->_table WHERE id = $id";
        $list = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }



    public function editPost($dataForm)
    {
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at =  date('Y-m-d H:i:s');
        $dataForm = (object)$dataForm;
        $this->updated_at =  date('Y-m-d H:i:s');
        $sql = "UPDATE $this->_table SET title = '$dataForm->title', slug = '$dataForm->slug', user_id = '$dataForm->user_id',
            category_id = '$dataForm->category_id', content = '$dataForm->content', thumbnail = '$dataForm->thumbnail', description = '$dataForm->description',
        	 updated_at = '$this->updated_at' WHERE id= '$dataForm->id'";
        $this->db->query($sql);
    }


    public function del($id)
    {
        $sql = "SELECT * FROM $this->_table WHERE id = $id";
        $list = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    public function delPost($id)
    {
        $sql = "DELETE FROM $this->_table WHERE id = $id";
        $this->db->query($sql);
    }

    // BlogAdmin::find()
    public  function find($id)
    {
        $sql = "SELECT * FROM $this->_table WHERE id = $id";
        $item = executeResult($sql, true);
        if ($item == null) {
            return null;
        }
        //chuyen mang key value ve mang object
        $u = new UsersAdmin();
        $u->id = $item['id'];
        $u->title = $item['title'];
        $u->slug = $item['slug'];
        $u->password = $item['password'];
        $u->user = $item['user'];
        $u->category = $item['category'];
        $u->description = $item['description'];
        $u->view_count = $item['view_count'];
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