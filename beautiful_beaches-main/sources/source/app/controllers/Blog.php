<?php

class Blog extends BaseController
{
    public $model_blog;
    public $model_admin_blog;
    public $data = [];

    public function __construct()
    {
        $this->model_blog = $this->model('BlogModel');
        $this->model_admin_blog = $this->model('BlogAdminModel');
    }
    public function food()
    {
        $title = "Foods";
        $this->data['sub_content']['dataList'] = $this->model_admin_blog->foodList();
        $this->data['title_page'] = $title;
        $this->data['content'] = 'blogs/food';
        $this->view('layouts/client_layout', $this->data);
    }
    public function travel()
    {
        $title = "Travel";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'blogs/travel';
        $this->view('layouts/client_layout', $this->data);
    }
    public function people()
    {
        $title = "Peoples";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'blogs/peoples';
        $this->view('layouts/client_layout', $this->data);
    }
    public function place()
    {
        $title = "Places";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'blogs/places';
        $this->view('layouts/client_layout', $this->data);
    }
    public function bcplace()
    {
        $title = "Bai chay Place";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'blogs/bcplace';
        $this->view('layouts/client_layout', $this->data);
    }
    public function blog1()
    {
        $title = "Blog";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'blogs/blog1';
        $this->view('layouts/client_layout', $this->data);
    }

    public function detail($id = 0)
    {
        $title = "Food Blog";
        $id = $_GET['id'];
        $this->data['sub_content']['dataList'] = $this->model_admin_blog->foodDetail($id);
        $this->data['sub_content']['commentList'] = $this->model_admin_blog->commentDetail($id);
        $this->data['sub_content']['title_page'] = $title;
        $this->data['content'] = 'blogs/food_detail';
        $this->view('layouts/client_layout', $this->data);
    }

    // Comment
    public function addPostComment()
    {
        $this->model_blog->addPostComment();

        $id = $_GET['id'];
        $this->data['sub_content']['dataList'] = $this->model_admin_blog->foodDetail($id);
        $this->data['sub_content']['commentList'] = $this->model_admin_blog->commentDetail($id);
        $title = "Blog Page";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Blog Page';
        $this->data['content'] = 'blogs/food_detail';
        $this->view('layouts/client_layout', $this->data);
    }

    public function search()
    {
        $keyword = $_GET['keyword'];
        echo 'Tu khoa can tim: ' . $keyword;
    }
}
