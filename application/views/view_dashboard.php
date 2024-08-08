<?php
// chek_session(); 
?>
<title>DashBoard</title>
<h2>Dashboard</h2>
<ul>
	<br>
  <li><?php echo anchor('tamu', 'Data Tamu'); ?></li>
  <li><?php echo anchor('siswa', 'Data Siswa'); ?></li>
  <li><?php echo anchor('Operator', 'Data Operator'); ?></li>
  <li><?php echo anchor('operator/logout','Logout'); ?></li>
</ul>
