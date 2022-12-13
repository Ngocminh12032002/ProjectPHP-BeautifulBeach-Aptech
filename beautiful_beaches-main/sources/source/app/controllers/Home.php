<?php
class Home extends BaseController
{
    public $model_home;
    public $data = [];
    public function __construct()
    {
        $this->model_home = $this->model('HomeModel');
    }

    public function index()
    {


        $title = "Beutiful Beaches";
        $this->data['title_page'] = $title;
        $this->data['sub_content']['title_page'] = 'Home';
        $this->data['content'] = 'home/index';
        $this->view('layouts/client_layout', $this->data);
    }



    public function search()
    {
        $request = new Request();
        $keyword = $request->getFields()['search'];
        if (!empty($keyword)) {
            $this->data['sub_content']['dataList'] = $this->model_home->getSearch($keyword);

            $title = "Search page";
            $this->data['title_page'] = $title;
            $this->data['sub_content']['title_page'] = 'Search page';
            $this->data['content'] = 'home/search';
            $this->view('layouts/client_layout', $this->data);
        }
    }
}