<?php

class Blogs extends Model
{
    private $_table = 'blog';
    public $id, $title, $content, $user_id, $slug, $category_id, $view_count, $thumbnail, $description, $created_at, $updated_at;

    public function form()
    {
        $this->id = $this->db->getPost('id');
        $this->title = $this->db->getPost('title');
        $this->content = $this->db->getPost('content');
        $this->slug = $this->db->getPost('slug');
        $this->user_id = $this->db->getPost('user_id');
        $this->category_id = $this->db->getPost('category_id');
        $this->view_count = $this->db->getPost('view_count');
        $this->thumbnail = $this->db->getPost('thumbnail');
        $this->description = $this->db->getPost('description');

        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
    }

    public function add()
    {

        $sql = "INSERT INTO blog (title, slug, user_id,category_id, view_count, thumbnail, description, content, created_at, updated_at) VALUES
        ('$this->title','$this->slug', '$this->user_id', '$this->category_id', '$this->view_count', '$this->thumbnail','$this->description', '$this->content', '$this->created_at', '$this->updated_at')";
        execute($sql);
    }

    public function edit()
    {
        $sql = "UPDATE blog SET title = '$this->title', slug ='$this->slug', content = '$this->content', 
        user_id = '$this->user_id',category_id = '$this->category_id', view_count = '$this->view_count',thumbnail = '$this->thumbnail', updated_at = '$this->updated_at' where id= '$this->id'";
        execute($sql);
    }

    public function del()
    {
        $sql = "DELETE FROM blog WHERE id ='$this->id'";
        execute($sql);
    }

    public static function list()
    {
        $sql = "SELECT * FROM blog";
        $list = executeResult($sql);
        $dataList = [];
        foreach ($list as $item) {
            $u = new Blogs();
            $u->id = $item['id'];
            $u->title = $item['title'];
            $u->slug = $item['slug'];
            $u->content = $item['content'];
            $u->user_id = $item['user_id'];
            $u->category_id = $item['category_id'];
            $u->view_count = $item['view_count'];
            $u->thumbnail = $item['thumbnail'];
            $u->description = $item['description'];
            $u->created_at = $item['created_at'];
            $u->updated_at = $item['updated_at'];
            //Hay nham ko có dấu [] vao sau biến
            $dataList[] = $u;
        }
        return $dataList;
    }






    public static function find($id)
    {
        $sql = "SELECT * FROM blog WHERE id = $id";
        $item = executeResult($sql, true);
        if ($item == null) {
            return null;
        }
        $u = new Blogs();
        $u->id = $item['id'];
        $u->title = $item['title'];
        $u->slug = $item['slug'];
        $u->content = $item['content'];
        $u->user_id = $item['user_id'];
        $u->category_id = $item['category_id'];
        $u->view_count = $item['view_count'];
        $u->thumbnail = $item['thumbnail'];
        $u->description = $item['description'];
        $u->created_at = $item['created_at'];
        $u->updated_at = $item['updated_at'];
        return $u;
    }
}
