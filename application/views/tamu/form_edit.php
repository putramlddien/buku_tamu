<h3 class="text-warning">Edit Data Tamu</h3>
<title>Edit Data Tamu</title>
<hr>
<?php
 echo form_open('tamu/edit');

?>
<input type="hidden" value="<?php echo $record['id'] ?>" name="id">
<table class="table table-border">

  <tr>
  <td>Nama</td>
  <td><div>
    <input type="text" name="nama_tamu" class="form-control" placeholder="Nama Lengkap" value="<?php echo $record['nama_tamu']; ?>">
  </td></div>
  </tr>

  <tr><td>Nama Siswa</td><td>
            <select name="kategori_id" class="form-control" >
                <?php
                foreach ($nama_siswa as $k)
                {
                    echo "<option value='$k->kategori_id'";
                    echo $record['kategori_id']==$k->kategori_id?'selected':'';
                    echo">$k->nama_siswa</option>";
                }
                ?>

  <tr>
  <td>Alamat</td>
  <td><div>
    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $record['alamat']; ?>">
  </td></div>

  </tr>
  <td>No Handphone</td>
  <td><div>
    <input type="text" name="no_hp" class="form-control" placeholder="No Handphone" value="<?php echo $record['no_hp']; ?>">
  </td></div>
  </tr>
  
  <tr>
  <td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
  <?php echo anchor('tamu', 'Kembali',array('class'=>'btn btn-danger btn-sm')) ?>
  </td>
  </tr>
</table>
<hr>
</form>
