<?php
class Gallery extends BaseController
{
    public $model_gallery;
    public $data = [];
    public function __construct()
    {
        $this->model_gallery = $this->model('GalleryModel');
    }
    public function index()
    {
        $title = "About US";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'gallery/index';
        $this->view('layouts/client_layout', $this->data);
    }
    public function thankful()
    {
        $title = "Thankful";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'pages/thankful';
        $this->view('layouts/client_layout', $this->data);
    }
    public function home()
    {
        $dataList = Gallery::list();

        $this->view('gallery.index', [
            'dataList' => $dataList
        ]);
    }
    public function postAdd()
    {
        $model = new Gallery();
        $model->form();

        $model->insert();

        $this->redirect('gallery');
    }

    public function other($action)
    {
        switch ($action) {
            case 'api-list':
                $this->apiList();
                break;
            case 'api-add':
                $this->postAdd();
                echo json_encode(["status" => 1, "msg" => "OK"]);
                break;
            case 'api-edit':
                // $this->postEdit();
                // echo json_encode(["status" => 1, "msg" => "OK"]);
                break;
            case 'api-get':
                $this->apiGet();
                break;
            case 'api-delete':
                // $this->postDelete();
                // echo json_encode(["status" => 1, "msg" => "OK"]);
                break;
        }
    }

    public function apiList()
    {
        $dataList = Product::list2();

        echo json_encode($dataList);
    }

    public function apiGet()
    {
        // $category = Category::find($_GET['id']);
        // echo json_encode($category);
    }
}
