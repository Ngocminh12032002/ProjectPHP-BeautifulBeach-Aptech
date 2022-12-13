<?php

class Pages extends BaseController
{
    public $model_pages;
    public $data = [];
    public function __construct()
    {
        $this->model_pages = $this->model('PagesModel');
    }
    public function about_us()
    {
        $title = "About US";
        $this->data['sub_content']['dataList'] = '';
        $this->data['title_page'] = $title;
        // render view
        $this->data['content'] = 'pages/about_us';
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
}
