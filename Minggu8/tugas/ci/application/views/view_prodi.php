<html>
<head>
 <title>Struktur Table</title>
</head>
<body>
<table border="1" width="300">
 <caption>Daftar Prodi Jurusan Teknologi Informasi</caption>
 <thead>
  <tr>
   <td>No</td>
   <td>Nama</td>
   <td>Keterangan</td>
  </tr>
 </thead>
 <tbody>
    <?php
    $no=1; 
    foreach($Prodi as $row){
    ?>
    <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $row['prodi'];?></td>
    <td><?php echo $row['ket'];?></td>
    </tr>
    <?php } ?>
 </tbody>
</table>
<hr>
</body>
</html>