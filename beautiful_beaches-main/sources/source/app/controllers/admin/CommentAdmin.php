<?php
class CommentAdmin extends BaseController
{
    public $model_comment_admin;
    public $model_comment;
    public $model_blog;
    public $model_user;
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
        $this->model_comment_admin = $this->model('CommentAdminModel');
        $this->model_comment = $this->model('CommentModel');
        $this->model_blog = $this->model('BlogAdminModel');
        $this->model_user = $this->model('UserModel');
    }

    public function index()
    {
        $sortBy = !empty($_GET['sort-by']) ? $_GET['sort-by'] : 'updated_at';
        $sortType = !empty($_GET['sort-type']) ? $_GET['sort-type'] : 'asc';
        $allowSort = ['asc', 'desc'];
        if (!empty($sortType) && in_array($sortType, $allowSort)) {
            if ($sortType == 'asc') {
                $sortType = 'desc';
            } else {
                $sortType = 'asc';
            }
        } else {
            $sortType = 'asc';
        }
        $sortArr = [
            'sortBy' => $sortBy,
            'sortType' => $sortType
        ];

        $this->data['sub_content']['sortType'] = $sortType;
        $this->data['sub_content']['dataList'] = $this->model_comment_admin->getList($sortArr);
        $title = "Comments Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Comments Page';
        $this->data['content'] = 'admin/comments/index';
        $this->view('layouts/server_layout', $this->data);
    }

    public function del()
    {
        $id = $_GET['id'];
        $blog_id = $_GET['blog_id'];
        $this->data['sub_content']['dataList'] = $this->model_comment_admin->del($id);
        $this->data['sub_content']['blogList'] = $this->model_blog->del($blog_id);
        $title = "Delete Blog Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = "Delete Blog Page";
        $this->data['content'] = 'admin/comments/delete';
        $this->view('layouts/server_layout', $this->data);
    }

    public function delPost()
    {
        $sortBy = !empty($_GET['sort-by']) ? $_GET['sort-by'] : 'updated_at';
        $sortType = !empty($_GET['sort-type']) ? $_GET['sort-type'] : 'asc';
        $allowSort = ['asc', 'desc'];
        if (!empty($sortType) && in_array($sortType, $allowSort)) {
            if ($sortType == 'asc') {
                $sortType = 'desc';
            } else {
                $sortType = 'asc';
            }
        } else {
            $sortType = 'asc';
        }
        $sortArr = [
            'sortBy' => $sortBy,
            'sortType' => $sortType
        ];

        $this->data['sub_content']['sortType'] = $sortType;
        $id = $_GET['id'];
        $this->model_comment_admin->delPost($id);
        $this->data['sub_content']['dataList'] = $this->model_comment_admin->getList($sortArr);
        $title = "Comment Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Comment Page';
        $this->data['content'] = 'admin/comments/index';
        $this->view('layouts/server_layout', $this->data);
    }


    public function addPostComment()
    {
        $this->blog_comment->addPostComment();
        $title = "Blog";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Blog Page';
        $this->data['content'] = 'blogs/food_detail';
        $this->view('layouts/server_layout', $this->data);
    }



    // public function search()
    // {
    //     $keyword = $_GET['keyword'];
    //     echo 'Tu khoa can tim: ' . $keyword;
    // }
}
