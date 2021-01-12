<?php

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    } 

    function index()
    {
    	if(($this->session->userdata("admin_in")=="Y")){
            redirect("admin");
        }
    	$this->load->view("layouts/login");
         $this->session->unset_userdata("pesan");
    }

    function login()
    {
    	if ($_POST) {
        	$this->load->model('Admin_model');
            $u = $this->input->post("username");
            $p = $this->input->post("password");
            if ($this->Admin_model->login($u,$p)) {
                $data = $this->Admin_model->get_admin_byuname($u);
                $this->session->set_userdata("pesan","Login berhasil");
                $this->session->set_userdata("admin_in","Y");
                $this->session->set_userdata("admin_user",$u);
                $this->session->set_userdata("admin_nama",$data['nama']);
                $this->session->set_userdata("admin_foto",$data['foto_admin']);
                $this->session->unset_userdata("pesan");
                redirect("admin");
            } else {
                $this->session->set_userdata("pesan","Login gagal. Username atau Password salah");
                $this->session->unset_userdata("admin_in");
                $this->session->unset_userdata("admin_user");
            }
        } 
        redirect("admin/login");
    }

    function logout()
    {
    	$this->session->sess_destroy();
        redirect("admin/login");
    }

}