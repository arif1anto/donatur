<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->cek_session();
        $this->load->model('Admin_model');
    } 

    private function cek_session()
    {
        if(!($this->session->userdata("admin_in")=="Y")){
            redirect("admin/login");
        }
    }

    /*
     * Listing of admin
     */
    function index()
    {
        $data['admin'] = $this->Admin_model->get_all_admin();
        $data['_view'] = 'admin/index';
        $this->load->view('layouts/main',$data);
    }

    private function upload_foto()
    {
        $this->load->library('upload');
        $config = array(
            'upload_path' => "./upload/",
            'allowed_types' => "jpg|png|jpeg",
            'overwrite' => TRUE,
            );

        $this->upload->initialize($config);
        $src_file = null;
        if($this->upload->do_upload('foto')){
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $src_file = "upload/".$file_name;
            return $src_file;
        }
        else{
            return "ERROR|".$this->upload->display_errors();
        }
    }

    /*
     * Adding a new admin
     */
    function add()
    {   
        $this->load->library('form_validation');
		$this->form_validation->set_rules('password','Password','max_length[30]|min_length[6]|required');
		$this->form_validation->set_rules('nama','Nama','max_length[30]|required');
		$this->form_validation->set_rules('username','Username','max_length[30]|required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'nama' => $this->input->post('nama'),
				//'foto_admin' => $this->input->post('foto_admin'),
				'username' => $this->input->post('username'),
            );

            $foto = $this->upload_foto();
            $ex = explode("|", $foto);
            if($ex[0]!="ERROR"){
                $params['foto_admin'] = $foto;
            }
            
            $admin_id = $this->Admin_model->add_admin($params);
            redirect('admin/admin/index');
        }
        else
        {            
            $data['_view'] = 'admin/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a admin
     */
    function edit($id_admin)
    {   
        // check if the admin exists before trying to edit it
        $data['admin'] = $this->Admin_model->get_admin($id_admin);
        
        if(isset($data['admin']['id_admin']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','max_length[30]|min_length[6]|required');
			$this->form_validation->set_rules('nama','Nama','max_length[30]|required');
			$this->form_validation->set_rules('username','Username','max_length[30]|required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'nama' => $this->input->post('nama'),
					//'foto_admin' => $this->input->post('foto_admin'),
					'username' => $this->input->post('username'),
                );


                $foto = $this->upload_foto();
                $ex = explode("|", $foto);
                if($ex[0]!="ERROR"){
                    $params['foto_admin'] = $foto;
                }

                $this->Admin_model->update_admin($id_admin,$params);            
                redirect('admin/admin/index');
            }
            else
            {
                $data['_view'] = 'admin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The admin you are trying to edit does not exist.');
    } 

    /*
     * Deleting admin
     */
    function remove($id_admin)
    {
        $admin = $this->Admin_model->get_admin($id_admin);

        // check if the admin exists before trying to delete it
        if(isset($admin['id_admin']))
        {
            $this->Admin_model->delete_admin($id_admin);
            redirect('admin/admin/index');
        }
        else
            show_error('The admin you are trying to delete does not exist.');
    }
    
}
