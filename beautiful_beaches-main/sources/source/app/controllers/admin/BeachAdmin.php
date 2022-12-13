<?php
class BeachAdmin extends BaseController
{
    public $model_beach_admin;
    public $data = [];
    public function __construct()
    {

        // Session
        $this->data['user'] = Session::data('user');
        if (empty($this->data['user'])) {
            $response = new Response();
            $response->redirect('admin/users/login');
            die();
        }
        $this->model_beach_admin = $this->model('BeachAdminModel');
    }

    public function index()
    {
        $title = "Beach Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Beach Page';
        $this->data['content'] = 'admin/beaches/index';
        $this->view('layouts/server_layout', $this->data);
    }
    public function mienbac()
    {
        $title = "North Beach Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'North Beach Page';
        $this->data['content'] = 'admin/beaches/list1';
        $this->view('layouts/server_layout', $this->data);
    }
    public function mientrung()
    {
        $title = "Central Beach Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Central Beach Page';
        $this->data['content'] = 'admin/beaches/list2';
        $this->view('layouts/server_layout', $this->data);
    }
    public function miennam()
    {
        $title = "South Beach Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'South Beach Page';
        $this->data['content'] = 'admin/beaches/list3';
        $this->view('layouts/server_layout', $this->data);
    }



    // public function search()
    // {
    //     $keyword = $_GET['keyword'];
    //     echo 'Tu khoa can tim: ' . $keyword;
    // }
}
