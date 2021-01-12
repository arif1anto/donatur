<?php
 
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    } 

    /*
     * Listing of admin
     */
    function index()
    {
        // $data['admin'] = $this->Admin_model->get_all_admin();
        // $data['_view'] = 'admin/index';
        // $this->load->view('layouts/main',$data);
        $this->load->model(array("Donasi_model","Galeri_model"));
        $data["lastdonasi"]  = $this->Donasi_model->get_lastdonasi(10);
        $data_g["galeri"]  = $this->Galeri_model->get_all_galeri();
        $this->load->view('frontend/header',$data);
        $this->load->view('frontend/home');
        $this->load->view('frontend/galeri',$data_g);
        if ($this->cek_session()) {
            $u = $this->session->userdata("loged_user");
            $this->load->model("Donatur_model");
            $this->load->model("Transaksi_pengeluaran_model");
            $this->load->model("Anak_asuh_model");
            $data["donatur"] = $this->Donatur_model->get_donatur_byuser($u);
            $data["donasi"]  = $this->Donasi_model->get_donasi_bydonatur($data["donatur"]["id_donatur"]);
            $data["trans"]   = $this->Transaksi_pengeluaran_model->get_all_transaksi_pengeluaran();
            $data["anak"] = $this->Anak_asuh_model->get_all_anak_asuh();
            $this->load->view('frontend/donatur',$data);
        } else {
            $this->load->view('frontend/about');
        }
        $this->load->view('frontend/contact');
        $this->load->view('frontend/footer');
        $this->session->unset_userdata("pesan");
    }


    private function upload_foto()
    {
        $this->load->library('upload');
        $config = array(
            'upload_path' => "./upload/resi/",
            'allowed_types' => "jpg|png|jpeg",
            'overwrite' => TRUE,
            );

        $this->upload->initialize($config);
        $src_file = null;
        if($this->upload->do_upload('bukti_resi')){
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $src_file = "upload/resi/".$file_name;
            return $src_file;
        }
        else{
            return "ERROR|".$this->upload->display_errors();
        }
    }

    private function upload_foto_don()
    {
        $this->load->library('upload');
        $config = array(
            'upload_path' => "./upload/resi/",
            'allowed_types' => "jpg|png|jpeg",
            'overwrite' => TRUE,
            );

        $this->upload->initialize($config);
        $src_file = null;
        if($this->upload->do_upload('foto')){
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $src_file = "upload/resi/".$file_name;
            return $src_file;
        }
        else{
            return "ERROR|".$this->upload->display_errors();
        }
    }



    private function cek_session()
    {
        return ($this->session->userdata("loged_in")=="Y");
    }

    function kirim_kontak()
    {
        $this->load->model('Kontak_model');
        $params = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'pesan' => $this->input->post('pesan'),
        );
        
        $kontak_id = $this->Kontak_model->add_kontak($params);

        $this->session->set_userdata("pesan","Pesan berhasil dikirim");
        redirect('home/#contact');
    }

    function add_donatur()
    {
        $this->load->model('Donatur_model');
        $tgl = $this->input->post('tanggal_daftar');
        $ex = explode('-', $tgl);
        $tgl = $ex[2].'/'.$ex[1].'/'.$ex[0];
         $params = array(
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'password' => $this->input->post('password'),
            'username' => $this->input->post('username'),
            'nama_donatur' => $this->input->post('nama_donatur'),
            'email' => $this->input->post('email'),
            'cp' => $this->input->post('cp'),
            'alamat' => $this->input->post('alamat'),
            //'foto_donatur' => $this->input->post('foto_donatur'),
            'tanggal_daftar' => $tgl,
        );

        $foto = $this->upload_foto_don();
        $ex = explode("|", $foto);
        if($ex[0]!="ERROR"){
            $params['foto_donatur'] = $foto;
        }

        $this->session->set_userdata("pesan","Login berhasil");
        $this->session->set_userdata("loged_in","Y");
        $this->session->set_userdata("loged_user",$this->input->post('username'));

        $donatur_id = $this->Donatur_model->add_donatur($params);
        redirect('home/#portfolio');
    }

    function login_donatur()
    {
        if ($_POST) {
            $this->load->model('Donatur_model');
            $u = $this->input->post("username");
            $p = $this->input->post("password");
            if ($this->Donatur_model->cek_login($u,$p)) {
                $this->session->set_userdata("pesan","Login berhasil");
                $this->session->set_userdata("loged_in","Y");
                $this->session->set_userdata("loged_user",$u);
            } else {
                $this->session->set_userdata("pesan","Login gagal. Username atau Password salah");
                $this->session->unset_userdata("loged_in");
                $this->session->unset_userdata("loged_user");
            }
        } 
        redirect("home/#portfolio");
    }

    function donasi()
    {
        $this->load->model('Donasi_model');
        $params = array(
            'id_donatur' => $this->input->post('id_donatur'),
            'jumlah_donasi' => $this->input->post('jumlah_donasi'),
            //'bukti_resi' => $this->input->post('bukti_resi'),
            'tanggal_donasi' => date("Y-m-d"),
            'keterangan_donasi' => $this->input->post('keterangan_donasi'),
        );
        $foto = $this->upload_foto();
        $ex = explode("|", $foto);
        if($ex[0]!="ERROR"){
            $params['bukti_resi'] = $foto;
        }
        
        $donasi_id = $this->Donasi_model->add_donasi($params);
        $this->session->set_userdata("pesan","Donasi anda berhasil dikirim");
        redirect("home/#portfolio");
    }

    function logout()
    {
        $this->session->unset_userdata("loged_in");
        $this->session->unset_userdata("loged_user");
        $this->session->sess_destroy();
        redirect("home");
    }
}
