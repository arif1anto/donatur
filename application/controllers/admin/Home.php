<?php
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->cek_session();
    } 

    private function cek_session()
    {
        if(!($this->session->userdata("admin_in")=="Y")){
            redirect("admin/login");
        }
    }

    public function index()
    {
        $data['_view'] = 'layouts/home';
        $this->load->view('layouts/main',$data);
    }
}