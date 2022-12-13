<?php

class commentAdminModel extends Model
{

    private $_table = 'comments';
    public $id, $comment_name, $email, $website, $content, $parent_id, $blog_id, $user_id, $created_at, $updated_at;

    public function getList($sortArr = "")
    {
        $sql = "SELECT * FROM $this->_table";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['search']) && !empty($_POST['option'])) {
                $keyword = $_POST['search'];
                $option = $_POST['option'];
                $sql = "SELECT * FROM $this->_table WHERE blog_id = $option and ((comment_name like '%$keyword%') OR (email  like '%$keyword%')) ";
            } else if (!empty($_POST['search']) && empty($_POST['option'])) {
                $keyword = $_POST['search'];
                $sql = "SELECT * FROM $this->_table WHERE  comment_name like '%$keyword%' or email  like '%$keyword%' ";
            } else if (empty($_POST['search']) && !empty($_POST['option'])) {
                $option = $_POST['option'];
                $sql = "SELECT * FROM $this->_table WHERE  blog_id = $option";
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


        $list = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $dataList = [];
        foreach ($list as $item) {
            $u = new CommentAdminModel();
            $u->id = $item['id'];
            $u->comment_name = $item['comment_name'];
            $u->email = $item['email'];
            $u->website = $item['website'];
            $u->content = $item['content'];
            $u->parent_id = $item['parent_id'];
            $u->blog_id = $item['blog_id'];
            $u->user_id = $item['user_id'];
            $u->created_at = $item['created_at'];
            $u->updated_at = $item['updated_at'];
            $dataList[] = $u;
        }
        return $dataList;
    }

    public function addPost($dataForm = "")
    {

        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at =  date('Y-m-d H:i:s');
        $dataForm = (object)$dataForm;
        $sql = "INSERT INTO $this->_table (comment_name, email, user_id,  content, blog_id, created_at, updated_at) VALUES
        ('$dataForm->comment_name','$dataForm->email', '$dataForm->user_id', '$dataForm->content','$dataForm->blog_id', '$this->created_at', '$this->updated_at')";
        execute($sql);
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
}