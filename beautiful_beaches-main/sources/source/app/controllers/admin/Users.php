<?php
class Users extends BaseController
{
    public $model_user, $model_blog, $model_comment, $model_subscribe;
    public $data = [];
    public function __construct()
    {

        $this->model_user = $this->model('UserModel');
        $this->model_blog = $this->model('BlogAdminModel');
        $this->model_comment = $this->model('commentAdminModel');
        $this->model_contact = $this->model('contactAdminModel');
    }

    public function login()
    {
        $this->data['errors'] = Session::flash('errors');
        $this->data['msg'] = Session::flash('msg');
        $this->data['old'] = Session::flash('old');
        $this->data['user'] = Session::data('user');
        if (!empty($this->data['user'])) {
            $response = new Response();
            $response->redirect('admin/dashboard/index');
        }
        $title = "Login";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Login Page';
        $this->view('admin/users/login', $this->data);
    }


    public function loginPost()
    {
        $request = new Request();
        if ($request->isPost()) {
            // set rules
            $request->rules([
                'email' => 'required|min:6|email|unique:users:email',
                'password' => 'required|min:6',
            ]);

            // set message_error
            $request->messages([
                'email.required' => 'Email không được để trống',
                'email.min' => 'Email yêu cầu lớn hơn 5 ký tự',
                'email.email' => 'Email chưa đúng định dạng',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min' => 'Mật khẩu yêu cầu lớn hơn 6 ký tự',
            ]);
            $validate = $request->validate();

            if (!$validate) {
                Session::flash('errors', $request->errors());
                Session::flash('msg', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại!');
                Session::flash('old', $request->getFields());
            } else {
                $data = $request->getFields();

                $check = $this->model_user->login($data);
                if ($check != null) {
                    Session::data('user', $check);
                    $title = "Dashboard Manager";
                    $this->data['sub_content']['title_page'] = $title;
                    $this->data['sub_content']['countList'] = $this->model_blog->getList();
                    $this->data['sub_content']['commentList'] = $this->model_comment->getList();
                    $this->data['sub_content']['contactList'] = $this->model_contact->getList();
                    $this->data['sub_content']['blogList'] = $this->model_blog->getTop(6);
                    $this->data['content'] = 'admin/dashboard/index';
                    $this->view('layouts/server_layout', $this->data);
                }
            }
        }
        $response = new Response();
        $response->redirect('admin/users/login');
    }
    public function logout()
    {
        Session::delete('user');
        $response = new Response();
        $response->redirect('admin/users/login');
        session_destroy();
    }

    // Register
    public function register()
    {
        $this->data['errors'] = Session::flash('errors');
        $this->data['msg'] = Session::flash('msg');
        $this->data['old'] = Session::flash('old');
        $this->data['exist_email']  = Session::flash('exist_email');
        $this->data['user'] = Session::data('user');
        if (!empty($this->data['user'])) {
            $response = new Response();
            $response->redirect('admin/users/login');
        }
        $title = "Register";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Register Page';
        $this->view('admin/users/register', $this->data);
    }
    public function registerPost()
    {

        $response = new Response();
        $request = new Request();
        if ($request->isPost()) {
            // set rules
            $request->rules([
                'fullname' => 'required|min:5|max:30',
                'email' => 'required|min:6|email|unique:users:email',
                'password' => 'required|min:6',
                'confirm_password' => 'required|match:password',
            ]);

            // set message_error
            $request->messages([
                'fullname.required' => 'Họ tên không được dể trống',
                'fullname.min' => 'Họ tên yêu cầu lớn hơn 5 ký tự',
                'fullname.max' => 'Họ tên yêu cầu nhỏ hơn 30 ký tự',
                'email.required' => 'Email không được để trống',
                'email.min' => 'Email yêu cầu lớn hơn 5 ký tự',
                'email.email' => 'Email chưa đúng định dạng',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min' => 'Mật khẩu yêu cầu lớn hơn 6 ký tự',
                'confirm_password.required' => 'Nhập lại mật khẩu bắt buộc phải nhập',
                'confirm_password.match' => 'Nhập lại mật khẩu không khớp',
            ]);
            $validate = $request->validate();

            if (!$validate) {
                Session::flash('errors', $request->errors());
                Session::flash('msg', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại!');
                Session::flash('old', $request->getFields());
            } else {
                $dataForm = $request->getFields();
                if ($this->model_user->checkEmail($dataForm) == null) {
                    $this->model_user->registerPost($dataForm);
                    $response->redirect('admin/users/login');
                } else {
                    Session::flash('exist_email', 'Email đã được sử dụng.');
                }
            }
        }
        $response->redirect('admin/users/register');
    }
    // index
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
        $title = "User Manager";
        $this->data['sub_content']['dataList'] = $this->model_user->getList($sortArr);
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'User Page';
        $this->data['content'] = 'admin/users/index';
        $this->view('layouts/server_layout', $this->data);
    }
    public function detail()
    {
        $id = $_GET['id'];
        $title = "Detail User Manager";
        $this->data['sub_content']['dataList'] = $this->model_user->first($id);
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Detail User Page';
        $this->data['content'] = 'admin/users/detail';
        $this->view('layouts/server_layout', $this->data);
    }
    public function add()
    {
        $title = "New User";
        // $this->data['sub_content']['dataList'] = $this->model_user->getList();
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'New User Page';
        $this->data['content'] = 'admin/users/add';
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

        $this->data['sub_content']['sortType'] = $sortType;
        $request = new Request();
        $dataForm = $request->getFields();
        $this->model_user->addPost($dataForm);
        $this->data['sub_content']['dataList'] = $this->model_user->getList($sortArr);
        $title = "User Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'User Page';
        $this->data['content'] = 'admin/users/index';
        $this->view('layouts/server_layout', $this->data);
    }

    public function edit()
    {
        $id = $_GET['id'];
        $this->data['sub_content']['dataList'] = $this->model_user->first($id);
        $title = "Edit User Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Edit User Page';
        $this->data['content'] = 'admin/users/edit';
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

        $this->data['sub_content']['sortType'] = $sortType;
        $request = new Request();
        $dataForm = $request->getFields();
        $this->model_user->editPost($dataForm);
        $this->data['sub_content']['dataList'] = $this->model_user->getList($sortArr);
        $title = "User Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'User Page';
        $this->data['content'] = 'admin/users/index';
        $this->view('layouts/server_layout', $this->data);
    }

    public function del()
    {
        $id = $_GET['id'];
        $this->data['sub_content']['dataList'] = $this->model_user->first($id);
        $this->data['sub_content']['userList'] = $this->model_user->getList();
        $title = "Delete User Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = "Delete User Page";
        $this->data['content'] = 'admin/users/delete';
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
        $this->model_user->delPost($id);
        $this->data['sub_content']['dataList'] = $this->model_user->getList($sortArr);
        $title = "User Manager";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'User Page';
        $this->data['content'] = 'admin/users/index';
        $this->view('layouts/server_layout', $this->data);
    }
}
