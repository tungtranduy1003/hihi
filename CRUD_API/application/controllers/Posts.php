<?php
    class Posts extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Latest Posts';

            $data['posts'] = $this->posts->get_posts();
//            var_dump($data);
//            die();
            $this->load->view('templates/header', $data);
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
            $data['post'] = $this->posts->get_posts($slug);

            if(empty($data['post']))
            {
                show_404();
            }
            $data['title'] = $data['post']['title'];

//            var_dump($data);

            $this->load->view('templates/header');
            $this->load->view('posts/view' , $data);
            $this->load->view('templates/footer');
        }

        public function create()
        {
            $data['title'] = 'Create New Post';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('body', 'Body', 'required');

            if($this->form_validation->run() === FALSE){

                $this->load->view('templates/header');
                $this->load->view('posts/create' , $data);
                $this->load->view('templates/footer');
            }
            else{
                $this->posts->create_post();
//                $this->load->view('posts/success');
                redirect('/index.php/posts');
            }

        }

        public function delete($id){
            $this->posts->delete_post($id);
            redirect('/index.php/posts');
        }

        public function edit($slug){
            $data['post'] = $this->posts->get_posts($slug);
//            var_dump($data);
//            die;

            if(empty($data['post']))
            {
                show_404();
            }
            $data['title'] = 'Edit Post';

//            var_dump($data);

            $this->load->view('templates/header');
            $this->load->view('posts/edit' , $data);
            $this->load->view('templates/footer');
        }
    }