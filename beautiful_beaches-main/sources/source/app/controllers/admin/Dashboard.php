<?php
class Dashboard extends BaseController
{
    public $model_dashboard, $model_blog, $model_comment, $model_contact;
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

        $this->model_dashboard = $this->model('DashboardModel');
        $this->model_blog = $this->model('BlogAdminModel');
        $this->model_comment = $this->model('commentAdminModel');
        $this->model_contact = $this->model('contactAdminModel');
    }

    public function index()
    {
        $title = "Dashboard Manager";
        $this->data['sub_content']['countList'] = $this->model_blog->getList();
        $this->data['sub_content']['commentList'] = $this->model_comment->getList();
        $this->data['sub_content']['contactList'] = $this->model_contact->getList();
        $this->data['sub_content']['blogList'] = $this->model_blog->getTop(6);
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Dashboard Page';
        $this->data['content'] = 'admin/dashboard/index';
        $this->view('layouts/server_layout', $this->data);
    }



    // public function search()
    // {
    // $keyword = $_GET['keyword'];
    // echo 'Tu khoa can tim: ' . $keyword;
    // }
}