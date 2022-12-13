<?php

class Service extends BaseController
{
    public $model_service;
    public $data = [];
    public function __construct()
    {
        $this->model_service = $this->model('ServiceModel');
    }
    public function food()
    {
        $title = "Foods";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/food/food';
        $this->view('layouts/client_layout', $this->data);
    }
    public function travel()
    {
        $title = "Travel";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/travel/index';
        $this->view('layouts/client_layout', $this->data);
    }
    public function condao()
    {
        $title = "Travel";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/travel/condao';
        $this->view('layouts/client_layout', $this->data);
    }
    public function people()
    {
        $title = "Peoples";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/people/index';
        $this->view('layouts/client_layout', $this->data);
    }
    public function place()
    {
        $title = "Places";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/food/places';
        $this->view('layouts/client_layout', $this->data);
    }
    public function local()
    {
        $title = "Local";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/locals/locals';
        $this->view('layouts/client_layout', $this->data);
    }
    public function hotel_coto()
    {
        $title = "Co to Hotels";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/hotels/coto';
        $this->view('layouts/client_layout', $this->data);
    }
    public function halong()
    {
        $title = "Ha long Hotels";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/hotels/halong';
        $this->view('layouts/client_layout', $this->data);
    }
    public function nhatrang()
    {
        $title = "Nha Trang Hotels";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/hotels/nhatrang';
        $this->view('layouts/client_layout', $this->data);
    }
    public function phuquoc()
    {
        $title = "Phu Quoc Hotels";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/hotels/phuquoc';
        $this->view('layouts/client_layout', $this->data);
    }
    public function vungtau()
    {
        $title = "Vung Tau Hotel";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/hotels/vungtau';
        $this->view('layouts/client_layout', $this->data);
    }
    public function hotels()
    {
        $title = "HotelsHotel";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'services/hotels/hotels';
        $this->view('layouts/client_layout', $this->data);
    }
    public function home()
    {
        $dataList = Services::list();

        $this->view('services.index', [
            'dataList' => $dataList
        ]);
    }
    public function postAdd()
    {
        $model = new Services();
        $model->form();

        $model->insert();

        $this->redirect('services');
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
        $dataList = Services::list2();

        echo json_encode($dataList);
    }

    public function apiGet()
    {
        // $category = Category::find($_GET['id']);
        // echo json_encode($category);
    }
}
