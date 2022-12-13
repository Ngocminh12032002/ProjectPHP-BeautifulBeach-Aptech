<?php

class Comment extends BaseController
{
    public $model_comment;
    public $model_admin_blog;
    public $data = [];

    public function __construct()
    {
        $this->model_comment = $this->model('CommentModel');
        $this->model_admin_blog = $this->model('BlogAdminModel');
    }

    // Comment
    public function addPost()
    {
        $this->model_comment->form();
        $this->model_comment->addPost();
        $id = $_POST['blog_id'];
        $title = "Blog";
        $this->data['sub_content']['dataList'] = $this->model_admin_blog->foodDetail($id);
        $this->data['sub_content']['commentList'] = $this->model_admin_blog->commentDetail($id);
        $this->data['sub_content']['title_page'] = $title;
        $this->data['content'] = 'blogs/food_detail';
        $this->view('layouts/client_layout', $this->data);
    }
    public function replayComment()
    {
        $parent_id = $_GET['id'];
        $blog_id = $_GET['blog_id'];
        $title = "Commnent";
        $this->data['sub_content']['parent_id'] = $parent_id;
        $this->data['sub_content']['blog_id'] = $blog_id;
        $this->data['title_page'] = $title;
        $this->data['content'] = 'blogs/replay_comment';
        $this->view('layouts/client_layout', $this->data);
    }
    // public function addReplayComment()
    // {
    //     $this->model_comment->form();
    //     $this->model_comment->addPost();
    //     $parent_id = $_GET['id'];
    //     $id = $_POST['blog_id'];
    //     var_dump($id);
    //     var_dump($_POST);
    //     $title = "Blog";
    //     $this->data['sub_content']['dataList'] = $this->model_admin_blog->foodDetail($id);
    //     $this->data['sub_content']['title_page'] = $title;
    //     $this->data['content'] = 'blogs/food_detail';
    //     $this->view('layouts/client_layout', $this->data);
    // }





    public function search()
    {
        $keyword = $_GET['keyword'];
        echo 'Tu khoa can tim: ' . $keyword;
    }
}