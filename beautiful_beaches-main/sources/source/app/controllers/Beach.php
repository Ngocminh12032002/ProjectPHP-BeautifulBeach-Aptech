<?php

class Beach extends BaseController
{
    public $model_beach;
    public $data = [];
    public function __construct()
    {
        $this->model_beach = $this->model('BeachModel');
    }
    public function mienbac()
    {
        $title = "North Beaches";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/mienbac';
        $this->view('layouts/client_layout', $this->data);
    }
    public function miennam()
    {
        $title = "South Beaches";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/miennam';
        $this->view('layouts/client_layout', $this->data);
    }
    public function mientrung()
    {
        $title = "Central Beaches";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/mientrung';
        $this->view('layouts/client_layout', $this->data);
    }

    public function baichay()
    {
        $title = "Bai chay Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/baichay';
        $this->view('layouts/client_layout', $this->data);
    }
    public function cualo()
    {
        $title = "Cua Lo Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/cualo';
        $this->view('layouts/client_layout', $this->data);
    }
    public function doson()
    {
        $title = "Do Son Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/doson';
        $this->view('layouts/client_layout', $this->data);
    }
    public function halong()
    {
        $title = "Ha Long Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/halong';
        $this->view('layouts/client_layout', $this->data);
    }
    public function hoian()
    {
        $title = "Hoi An Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/hoian';
        $this->view('layouts/client_layout', $this->data);
    }
    public function muine()
    {
        $title = "Mui Ne Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/muine';
        $this->view('layouts/client_layout', $this->data);
    }
    public function nhatrang()
    {
        $title = "Nha Trang Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/nhatrang';
        $this->view('layouts/client_layout', $this->data);
    }
    public function phuquoc()
    {
        $title = "Phu Quoc Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/phuquoc';
        $this->view('layouts/client_layout', $this->data);
    }
    public function phuyen()
    {
        $title = "Phu Yen Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/phuyen';
        $this->view('layouts/client_layout', $this->data);
    }
    public function samson()
    {
        $title = "Sam Son Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/samson';
        $this->view('layouts/client_layout', $this->data);
    }
    public function thaibinh()
    {
        $title = "Thai Binh Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/baichay';
        $this->view('layouts/client_layout', $this->data);
    }
    public function travinh()
    {
        $title = "TRa Vinh Beach";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'beaches/travinh';
        $this->view('layouts/client_layout', $this->data);
    }




    public function detail($id = 0)
    {
        $title = "Beach";
        $this->data['sub_content']['dataList'] = $this->model_beach->getDetail($id);
        $this->data['sub_content']['info'] = 'Thong tin 1';
        $this->data['sub_content']['title_page'] = $title;
        $this->data['content'] = 'beaches/detail';
        $this->view('layouts/client_layout', $this->data);
    }

    // public function detail($id = '', $slug = '')
    // {
    //     echo "id sp:" . $id . '<br/>';
    //     echo "slug sp:" . $slug;
    //     $this->view('beach.mienbac');
    // }

    public function search()
    {
        $keyword = $_GET['keyword'];
        echo 'Tu khoa can tim: ' . $keyword;
    }
}