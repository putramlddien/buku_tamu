<h3 class="text-primary">Data Operator</h3>
<title>Data Operator</title>
<br>
<hr>
<table class="table table-bordered">
    <tr><th>No</th><th>Nama Lengkap</th><th>Username</th><th>Login Terakhir</th></tr>
    <?php
    $no=1;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td>$r->nama_lengkap</td>
            <td>$r->username</td>
            <td>$r->last_login</td>
            </tr>";
        $no++;
    }
    ?>
</table>
<br>
<center><p class="mt-5 mb-3 text-muted">&copy; Smk Negeri 1 Depok - 2019</p></center>