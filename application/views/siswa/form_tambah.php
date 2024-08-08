<h3 class="text-success">Tambah Data Siswa</h3>
<title>Tambah Data Siswa</title>
<hr>
<?php
echo form_open('siswa/post');
?>

<table class="table table-border">
  <tr>
    <td>Nama Siswa</td>
    <td>
      <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Lengkap">
    </td>
  <tr>
  <tr>
    <td>Kelas</td>
    <td>
      <input type="text" name="kelas" class="form-control" placeholder="Kelas">
    </td>
  <tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
      <input type="text" name="gender" class="form-control" placeholder="Jenis Kelamin">
    </td>
  <tr>
    <td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
      <?php echo anchor('siswa', 'Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
    </td>
  </tr>
</table>
<hr>
</form>