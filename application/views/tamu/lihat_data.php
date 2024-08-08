<h3 class="text-primary">Data Tamu</h3>
<title>Data Tamu</title>
<br>
<?php
  echo anchor('tamu/post', 'Tambah Data',array('class'=>'btn btn-outline-success'))
?>
<hr>
  <table class="table table-bordered">
    <tr><th>No</th><th>Nama Tamu</th><th>Nama Siswa</th><th>Alamat</th><th>No Telpon</th>
    <th colspan="2">Action</th></tr>
  <?php
  $no=1;
  foreach ($record->result() as $r)
  {
        echo "<tr>
              <td width='10'>$no</td>
              <td>$r->nama_tamu</td>
              <td>$r->nama_siswa</td>
              <td>$r->alamat</td>
              <td>$r->no_hp</td>
              <td width='10'><a href='tamu/edit/$r->id' class='btn btn-warning btn-sm'>Edit</a></td>
              <td width='10'><a href='tamu/delete/$r->id' class='btn btn-danger btn-sm'>Hapus</a></td>
              </tr>";
    $no++;
  }
  ?>
  </table>
  <center><p class="mt-5 mb-3 text-muted">&copy; Smk Negeri 1 Depok - 2019</p></center>
  <br>

