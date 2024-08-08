<h3 class="text-warning">Edit Data Siswa</h3>
<title>Edit Data Siswa</title>
<hr>
<?php
echo form_open('siswa/edit');
?>
<input type="hidden" value="<?php echo $record['kategori_id'] ?>" name="id">
<table class="table table-border">
  <tr>
    <td>Nama Siswa</td>
    <td width="930">
      <div class="col-sm-8"><input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" value="<?php echo $record['nama_siswa']; ?>">
    </td>
    </div>
  </tr>
  <tr>
    <td>Kelas</td>
    <td width="930">
      <div class="col-sm-8"><input type="text" name="kelas" class="form-control" placeholder="Kelas" value="<?php echo $record['kelas']; ?>">
    </td>
    </div>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td width="930">
      <div class="col-sm-8"><input type="text" name="gender" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $record['gender']; ?>">
    </td>
    </div>
  </tr>

  <tr>
    <td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
      <?php echo anchor('siswa', 'Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
    </td>
  </tr>
</table>
<hr>
</form>