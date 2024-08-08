<?php
class siswa extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_siswa');
        chek_session();
    }
    
    function index()
    {
        $data['record']= $this->model_siswa->tampilkan_data();
        $this->template->load('template', 'siswa/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            $this->model_siswa->post();
            redirect('siswa');
        }
        else{
            $this->template->load('template','siswa/form_tambah');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $this->model_siswa->edit();
            redirect('siswa');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_siswa->get_one($id)->row_array();
            $this->template->load('template','siswa/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_siswa->delete($id);
        redirect('siswa');
    }
}