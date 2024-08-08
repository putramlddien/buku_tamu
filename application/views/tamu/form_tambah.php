<h3 class="text-success">Tambah Data Tamu</h3>
<title>Tambah Data Tamu</title>
<hr>
<?php
echo form_open('tamu/post');
?>

<table class="table table-border">

  <tr>
    <td>Nama Tamu</td>
    <td>
      <div>
        <input type="text" name="nama_tamu" class="form-control" placeholder="Nama Lengkap">
    </td>
    </div>

  <tr>
    <td>Nama Siswa</td>
    <td>
      <select name="kategori_id" class="form-control">
        <?php
        foreach ($nama_siswa as $k) {
          echo "<option value='$k->kategori_id'>$k->nama_siswa</option>";
        }
        ?>
      </select>
    </td>
  </tr>
  <td>Alamat</td>
  <td>
    <div>
      <input type="text" name="alamat" class="form-control" placeholder="Alamat">
  </td>
  </div>

  </tr>
  <td>No Handphone</td>
  <td>
    <div>
      <input type="text" name="no_hp" class="form-control" placeholder="No Handphone">
  </td>
  </div>
  </tr>

  <tr>
    <td colspan="2"><button type="submit" class='btn btn-primary   btn-sm' name="submit">Simpan</button>
      <?php echo anchor('tamu', 'Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
    </td>
  </tr>
</table>
<hr>
</form>