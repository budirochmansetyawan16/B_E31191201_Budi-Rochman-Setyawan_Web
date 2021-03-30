<html>
<head>
 <title>Struktur Table</title>
</head>
<body>
<table border="1" width="200">
 <caption>Daftar Angkatan</caption>
 <thead>
  <tr>
   <td>No</td>
   <td>Tahun</td>
  </tr>
 </thead>
 <tbody>
    <?php
    $no=1; 
    foreach($Angkatan as $row){
    ?>
    <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $row['tahun'];?></td>
    </tr>
    <?php } ?>
 </tbody>
</table>
<hr>
</body>
</html>