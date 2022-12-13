<?php

/**
 * Ke thua tu clas Model
 */
class HomeModel extends Model
{
    private $_table = 'blog';
    /**
     * Nếu Model con có function contruct thì cần phải gọi contruct parent như sau
     */
    function __construct()
    {
        parent::__construct();
    }
    public function getSearch($keyword)
    {
        $data = $this->db->query("SELECT * FROM $this->_table WHERE title like '%$keyword%' ORDER BY updated_at desc")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}