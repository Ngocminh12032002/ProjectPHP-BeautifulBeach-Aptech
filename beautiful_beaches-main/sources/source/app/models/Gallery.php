<?php
require_once('Model.php');

class Gallery extends Model
{
    public $id, $title, $content, $category_id, $price, $num, $created_at, $updated_at;

    public function form()
    {
        $this->id = getPost('id');
        $this->title = getPost('title');
        $this->content = getPost('content');
        $this->category_id = getPost('category_id');
        $this->price = getPost('price');
        $this->num = getPost('num');
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
    }

    public function insert()
    {

        $sql = "INSERT INTO beach_image (title, category_id, price, num, content, created_at, updated_at) VALUES
        ('$this->title', '$this->category_id', '$this->price', '$this->num', '$this->content', '$this->created_at', '$this->updated_at')";
        execute($sql);
        echo "HEHE";
    }

    public function update()
    {
        $sql = "UPDATE beach_image SET title = '$this->title', content = '$this->content', 
        category_id = '$this->category_id', price = '$this->price',num = '$this->num', updated_at = '$this->updated_at' where id= '$this->id'";
        execute($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM beach_image WHERE id ='$this->id'";
        execute($sql);
    }

    public static function list()
    {
        $sql = "SELECT * FROM beach_image";
        $list = executeResult($sql);
        $dataList = [];
        foreach ($list as $item) {
            $u = new Gallery();
            $u->id = $item['id'];
            $u->title = $item['title'];
            $u->content = $item['content'];
            $u->category_id = $item['category_id'];
            $u->price = $item['price'];
            $u->num = $item['num'];
            $u->created_at = $item['created_at'];
            $u->updated_at = $item['updated_at'];
            //Hay nham ko dau [] vao sau bien
            $dataList[] = $u;
        }
        // var_dump($list);
        return $dataList;
    }


    public static function find($id)
    {
        $sql = "SELECT * FROM beach_image WHERE id = $id";
        $item = executeResult($sql, true);
        if ($item == null) {
            return null;
        }

        $u = new Gallery();
        $u->id = $item['id'];
        $u->title = $item['title'];
        $u->content = $item['content'];
        $u->category_id = $item['category_id'];
        $u->price = $item['price'];
        $u->num = $item['num'];
        $u->created_at = $item['created_at'];
        $u->updated_at = $item['updated_at'];
        return $u;
    }
}