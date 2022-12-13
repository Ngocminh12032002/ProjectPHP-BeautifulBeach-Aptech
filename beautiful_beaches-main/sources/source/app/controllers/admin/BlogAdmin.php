<?php
class BlogAdmin extends BaseController
{
    public $blogs;
    public $blog_comment;
    public $users;
    public $group_blog;
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

        $this->blogs = $this->model('BlogAdminModel');
        $this->blog_comment = $this->model('BlogModel');
        $this->users = $this->model('UserModel');
        $this->group_blog = $this->model('BlogGroupModel');
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
        $this->data['sub_content']['dataList'] = $this->blogs->getList($sortArr);
        $title = "Blog Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Blog Page';
        $this->data['sub_content']['session'] = $this->data['user'];
        $this->data['content'] = 'admin/blogs/index';
        $this->view('layouts/server_layout', $this->data);
    }
    public function detail()
    {
        $id = $_GET['id'];
        $this->data['sub_content']['dataList'] = $this->blogs->first($id);
        $this->data['sub_content']['userList'] = $this->users->getList();
        $this->data['sub_content']['groupList'] = $this->group_blog->getList();

        $title = "Detail Blog Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Detail Blog Page';
        $this->data['content'] = 'admin/blogs/detail';
        $this->view('layouts/server_layout', $this->data);
    }
    public function add()
    {
        $this->data['sub_content']['dataList'] = $this->users->getList();
        $title = "Add Blog Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Add Blog Page';
        $this->data['content'] = 'admin/blogs/add';
        $this->view('layouts/server_layout', $this->data);
    }

    public function addPost()
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

        $request = new Request();
        $dataForm = $request->getFields();
        $this->blogs->addPost($dataForm);
        $this->data['sub_content']['sortType'] = $sortType;
        $this->data['sub_content']['dataList'] = $this->blogs->getList($sortArr);
        $title = "Blog Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Blog Page';
        $this->data['content'] = 'admin/blogs/index';
        $this->view('layouts/server_layout', $this->data);
    }

    public function edit()
    {
        $id = $_GET['id'];
        $this->data['sub_content']['dataList'] = $this->blogs->first($id);
        $this->data['sub_content']['userList'] = $this->users->getList();
        $title = "Edit Blog Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Edit Blog Page';
        $this->data['content'] = 'admin/blogs/edit';
        $this->view('layouts/server_layout', $this->data);
    }
    public function editPost()
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

        $request = new Request();
        $dataForm = $request->getFields();
        $this->blogs->editPost($dataForm);
        $this->data['sub_content']['sortType'] = $sortType;
        $this->data['sub_content']['dataList'] = $this->blogs->getList($sortArr);
        $title = "Blog Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Blog Page';
        $this->data['content'] = 'admin/blogs/index';
        $this->view('layouts/server_layout', $this->data);
    }

    public function del()
    {
        $id = $_GET['id'];
        $this->data['sub_content']['dataList'] = $this->blogs->del($id);
        $this->data['sub_content']['userList'] = $this->users->getList();
        $title = "Delete Blog Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = "Delete Blog Page";
        $this->data['content'] = 'admin/blogs/delete';
        $this->view('layouts/server_layout', $this->data);
    }

    public function delPost()
    {
        $id = $_GET['id'];
        $this->blogs->delPost($id);
        $this->data['sub_content']['dataList'] = $this->blogs->getList();
        $title = "Blog Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Blog Page';
        $this->data['content'] = 'admin/blogs/index';
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


    public function search()
    {
        // $keyword = $_GET['keyword'];
        // echo 'Tu khoa can tim: ' . $keyword;
    }
}