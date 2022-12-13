<?php
class BlogGroupModel extends Model
{
    private $_table = 'blog_categories';
    public $id, $name, $slug, $user_id, $created_at, $updated_at;

    public function __construct()
    {
        parent::__construct();
    }

    public function getList()
    {
        $list = $this->db->query("SELECT * FROM $this->_table")->fetchAll(PDO::FETCH_ASSOC);
        $dataList = [];
        foreach ($list as $item) {
            $u = new BlogGroupModel();
            $u->id = $item['id'];
            $u->name = $item['name'];
            $u->slug = $item['slug'];
            $u->user_id = $item['user_id'];
            $u->created_at = $item['created_at'];
            $u->updated_at = $item['updated_at'];
            $dataList[] = $u;
        }
        return $dataList;
    }
}