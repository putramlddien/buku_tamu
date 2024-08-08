<?php
class tamu extends CI_Controller{

      function __construct(){
        parent::__construct();
        $this->load->model('Model_tamu');
        chek_session();

      }

      function index()
      { 
        $data['record']= $this->Model_tamu->tampilkan_data();
        $this->template->load('template', 'tamu/lihat_data',$data);

      }

      function post()
    {
        if(isset($_POST['submit']))
        {
            $nama       =   $this->input->post('nama_tamu');
            $kategori   =   $this->input->post('kategori_id');
            $alamat     =   $this->input->post('alamat');
            $no_hp      =   $this->input->post('no_hp');
            $data       =   array('nama_tamu'=>$nama,
                                  'kategori_id'=>$kategori,
                                  'alamat'=>$alamat,
                                  'no_hp'=>$no_hp);
            $this->Model_tamu->post($data);
            redirect('tamu');
        }
        else{
            $this->load->model('model_siswa');
            $data['nama_siswa']=  $this->model_siswa->tampilkan_data()->result();
            $this->template->load('template','tamu/form_tambah',$data);
        }
    }
      function edit()
      {
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('id');
            $nama       =   $this->input->post('nama_tamu');
            $kategori   =   $this->input->post('kategori_id');
            $alamat     =   $this->input->post('alamat');
            $no_hp      =   $this->input->post('no_hp');
            $data       = array('nama_tamu'=>$nama,
                                'kategori_id'=>$kategori,
                                'alamat'=>$alamat,
                                'no_hp'=>$no_hp);
            $this->Model_tamu->edit($data,$id);
            redirect('tamu');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_siswa');
            $data['nama_siswa']   =  $this->model_siswa->tampilkan_data()->result();
            $data['record']     =  $this->Model_tamu->get_one($id)->row_array();
            $this->template->load('template','tamu/form_edit',$data);
        }
    }

      function delete()
      {
        $id= $this->uri->segment(3);
        $this->Model_tamu->delete($id);
        redirect('tamu');
      }
  }
  
?>