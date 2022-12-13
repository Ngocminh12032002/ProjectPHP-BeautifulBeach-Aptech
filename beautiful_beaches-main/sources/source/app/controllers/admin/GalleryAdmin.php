<?php
class GalleryAdmin extends BaseController
{
    public $model_gallery_admin;
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
        $this->model_gallery_admin = $this->model('GalleryAdminModel');
    }

    public function index()
    {
        $title = "Gallery Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Gallery Page';
        $this->data['content'] = 'admin/gallery/index';
        $this->view('layouts/server_layout', $this->data);
    }



    // public function search()
    // {
    //     $keyword = $_GET['keyword'];
    //     echo 'Tu khoa can tim: ' . $keyword;
    // }
}
