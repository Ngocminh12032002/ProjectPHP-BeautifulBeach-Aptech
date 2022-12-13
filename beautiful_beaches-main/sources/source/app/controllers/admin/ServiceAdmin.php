<?php
class ServiceAdmin extends BaseController
{
    public $model_service_admin;
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
        $this->model_service_admin = $this->model('ServiceAdminModel');
    }

    public function index()
    {
        $title = "Service Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Blog Page';
        $this->data['content'] = 'admin/services/index';
        $this->view('layouts/server_layout', $this->data);
    }



    // public function search()
    // {
    //     $keyword = $_GET['keyword'];
    //     echo 'Tu khoa can tim: ' . $keyword;
    // }
}
