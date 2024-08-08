<h3 class="text-primary">Data Siswa</h3>
<title>Data Siswa</title>
<br>
<?php
  echo anchor('siswa/post', 'Tambah Data',array('class'=>'btn btn-outline-success'))
?>
<hr>
  <table class="table table-bordered">
    <tr><th>No</th><th>Nama Siswa</th><th>Kelas</th><th>Jenis Kelamin</th>
    <th colspan="2">Action</th></tr>
  <?php
  $no=1;
  foreach ($record->result() as $r)
  {
        echo "<tr>
              <td width='10'>$no</td>
              <td>$r->nama_siswa</td>
              <td>$r->kelas</td>
              <td>$r->gender</td>
              <td width='10'><a href='siswa/edit/$r->kategori_id' class='btn btn-warning btn-sm'>Edit</a></td>
              <td width='10'><a href='siswa/delete/$r->kategori_id' class='btn btn-danger btn-sm'>Hapus</a></td>
              </tr>";
    $no++;
  }
  ?>
  </table>
  <center><p class="mt-5 mb-3 text-muted">&copy; Smk Negeri 1 Depok - 2019</p></center>
  <br>
