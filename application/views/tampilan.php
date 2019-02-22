<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Paket
	</title>
</head>
<body>
	<center>
		<br><br><br>
		<h3>TABEL DATA PAKET</h3>

</body>
</html>
<?php

echo "Hallo | <a href='inputpaket.php'>Tambah Paket</a> | <a href='tambah_penghuni.php'>Tambah Penghuni</a> | <a href='logout.php'>LOGOUT</a><br><table border='1' style='border: solid thin #666'>"; ?>
    <table border='1' style='border: solid thin #666'>
      <tr> 
      <th>ID Paket</th>
      		<th>Tgl Datang</th>
      		<th>Sasaran</th>
      		<th>Penerima</th>
      		<th>Isi Paket</th>
      		<th>Tanggal Ambil</th>
          <th>Status</th>
      		<th>Aksi</th></tr>
  <?php
  $Id_Paket = 1;
  foreach($paket as $a){
    ?>
    <tr>
      <td><?php echo $Id_Paket++ ?></td>
      <td><?php echo $a->Tgl_Datang?></td>
      <td><?php echo $a->Sasaran?></td>
      <td><?php echo $a->Penerima?></td>
      <td><?php echo $a->Isi_Paket?></td>
      <td><?php echo $a->Tgl_Terima?></td>
      
        <td>
      <?php echo "<td style='border: solid thin #666'><a href='edit.php".$row['Id_Paket']."'>Edit</a></td>";  ?></td>
    </tr>

  <?php } ?>

</table>
</center>

   
      

	 
