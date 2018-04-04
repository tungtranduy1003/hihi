<?php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('New_model');
        $this->load->helper('url_helper');
    }

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);
        var_dump($data);
        die();

        if (empty($data['news_item']))
        {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];
//        var_dump($data);
//        die();

        $this->load->view('templates/header' , $data);
        $this->load->view('news/view' , $data);
        $this->load->view('templates/footer');
    }

    public function index()
    {
//        echo $_SERVER['HTTP_HOST']."</br>";
//        echo $_SERVER['SCRIPT_NAME']."</br>";
//        $root  = "http://".$_SERVER['HTTP_HOST'];
//        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
//        echo $root;
//        die();
        $data['news'] = $this->news_model->get_news();
//        var_dump($data);
//        die();
        $data['title'] = 'News archieve';

        $this->load->view('templates/header' , $data);
        $this->load->view('news/index' , $data);
        $this->load->view('templates/footer');
    }
}