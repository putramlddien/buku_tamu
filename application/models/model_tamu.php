<?php
class model_tamu extends CI_model{

  function tampilkan_data()
  {
    $query= "SELECT b.id,b.nama_tamu,b.alamat,b.no_hp,b.hadir,kb.nama_siswa
            FROM tamu_tb as b,siswa_tb as kb
            WHERE b.kategori_id=kb.kategori_id 
            ORDER BY `id` DESC";
    return $this->db->query($query);
  }

  function post($data)
    {
      $data = array('nama_tamu' =>$this->input->post('nama_tamu'),
      'kategori_id'  => $this->input->post('kategori_id'),
      'alamat'  => $this->input->post('alamat'),
      'no_hp' =>$this->input->post('no_hp'));
      $this->db->insert('tamu_tb', $data);
    }

  function get_one($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('tamu_tb',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('tamu_tb',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tamu_tb');
    }
}