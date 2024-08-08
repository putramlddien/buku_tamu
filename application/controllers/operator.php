<?php
class operator extends CI_Controller{

  function __construct(){
  parent::__construct();
  $this->load->model('model_operator');
  }

  function index()
    {
        $data['record']=  $this->model_operator->tampildata();
        $this->template->load('template','operator/lihat_data',$data);
    }
    

  function login()
  {
  if(isset($_POST['submit'])){

    $username= $this->input->post('username');
    $password= $this->input->post('password');
    $hasil=    $this->model_operator->login($username,$password);
    if($hasil==1)
    {
    $this->session->set_userdata(array('status_login'=>'oke'));
    redirect('dashboard');
    }

    else {
    redirect('operator/login');
      }
    }
    else{
    chek_session_login();
    $this->template->load('template_login','form_login');
    }
    }

    function post()
    {
        if(isset($_POST['submit'])){
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $data       =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password));
            $this->db->insert('operator',$data);
            redirect('operator');
        }
        else{
            $this->template->load('template','operator/form_tambah');
        }
    }

    function edit()
    {
        if(isset($_POST['submit'])){
            $id         =  $this->input->post('id',true);
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){
                 $data  =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username);
            }
            else{
                  $data =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password));
            }
             $this->db->where('operator_id',$id);
             $this->db->update('operator',$data);
             redirect('operator');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_operator->get_one($id)->row_array();
            $this->template->load('template','operator/form_edit',$data);
        }
    }

    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('operator_id',$id);
        $this->db->delete('operator');
        redirect('operator');
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('operator/login');
    }
}
