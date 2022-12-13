<?php
class OptionAdmin extends BaseController
{
    public $model_option_admin;
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
        $this->model_option_admin = $this->model('OptionAdminModel');
    }

    public function index()
    {
        $title = "Option Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Option Page';
        $this->data['content'] = 'admin/options/index';
        $this->view('layouts/server_layout', $this->data);
    }



    // public function search()
    // {
    //     $keyword = $_GET['keyword'];
    //     echo 'Tu khoa can tim: ' . $keyword;
    // }
}
