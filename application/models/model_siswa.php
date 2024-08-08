<?php
class model_siswa extends CI_Model
{
    function tampilkan_data()
    {
        $this->db->order_by('kategori_id', 'DESC');
        return $this->db->get('siswa_tb');
    }

    function post()
    {
        $data = array('nama_siswa'  => $this->input->post('nama_siswa'),
        'kelas'  => $this->input->post('kelas'),
        'gender'  => $this->input->post('gender')
    );
        $this->db->insert('siswa_tb', $data);
    }


    function edit()
    {
        $data = array(
            'nama_siswa' =>  $this->input->post('nama_siswa'),
            'kelas' =>  $this->input->post('kelas'),
            'gender' =>  $this->input->post('gender')
        );
        $this->db->where('kategori_id', $this->input->post('id'));
        $this->db->update('siswa_tb', $data);
    }

    function get_one($id)
    {
        $param  =   array('kategori_id' => $id);
        return $this->db->get_where('siswa_tb', $param);
    }


    function delete($id)
    {
        $this->db->where('kategori_id', $id);
        $this->db->delete('siswa_tb');
    }
}
