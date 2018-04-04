<?php
class Pages extends CI_Controller {

    public function view($page = 'home')
    {
//        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
//        {
//            // Whoops, we don't have a page for that!
//            show_404();
//        }
//        echo $page;
//        die();

        if(!file_exists(APPPATH.'views/pages/'.$page. '.php')){
            show_404();
        }
        echo base_url();
        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
//        var_dump();
//        echo
//       print_r() ;
//        var_dump();
//        json_endcode();
//        json_decode();
    }
}