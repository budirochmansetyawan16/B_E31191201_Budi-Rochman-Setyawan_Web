<html>
<head>
 <title>Struktur Table</title>
</head>
<body>
<table border="1" width="300">
 <caption>Mahasiswa</caption>
 <thead>
  <tr>
   <td>No</td>
   <td>Nama</td>
   <td>Prodi</td>
  </tr>
 </thead>
 <tbody>
    <?php
    $no=1; 
    foreach($Mahasiswa as $row){
    ?>
    <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $row['nama'];?></td>
    <td><?php echo $row['prodi'];?></td>
    </tr>
    <?php } ?>
 </tbody>
</table>
<hr>
</body>
</html>