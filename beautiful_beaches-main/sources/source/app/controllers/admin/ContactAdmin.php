<?php
class ContactAdmin  extends BaseController
{
    public $model_subscribe;
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
        $this->model_subscribe = $this->model('ContactAdminModel');
    }

    public function index()
    {
        $this->data['sub_content']['dataList'] = $this->model_subscribe->getList();
        $title = "Subscribe Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Subscribe Page';
        $this->data['content'] = 'admin/contacts/index';
        $this->view('layouts/server_layout', $this->data);
    }


    public function edit()
    {
        $id = $_GET['id'];
        $this->data['sub_content']['dataList'] = $this->model_subscribe->first($id);
        $title = "Edit Subscribe Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Edit Subscribe Page';
        $this->data['content'] = 'admin/contacts/edit';
        $this->view('layouts/server_layout', $this->data);
    }
    public function editPost()
    {
        $request = new Request();
        $dataForm = $request->getFields();
        $this->model_subscribe->editPost($dataForm);
        $this->data['sub_content']['dataList'] = $this->model_subscribe->getList();
        $title = "Subscribe Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Subscribe Page';
        $this->data['content'] = 'admin/contacts/index';
        $this->view('layouts/server_layout', $this->data);
    }

    public function del()
    {
        $id = $_GET['id'];
        $this->data['sub_content']['dataList'] = $this->model_subscribe->first($id);
        $title = "Delete Subcribe Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = "Delete Subcribe Page";
        $this->data['content'] = 'admin/contacts/delete';
        $this->view('layouts/server_layout', $this->data);
    }

    public function delPost()
    {
        $id = $_GET['id'];
        $this->model_subscribe->delPost($id);
        $this->data['sub_content']['dataList'] = $this->model_subscribe->getList();
        $title = "Subscribe Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Subscribe Page';
        $this->data['content'] = 'admin/contacts/index';
        $this->view('layouts/server_layout', $this->data);
    }
}