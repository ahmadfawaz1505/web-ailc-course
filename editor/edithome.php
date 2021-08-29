<?php
include '../koneksi.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    <h1>Sebelumnya</h1>
    <table border="1">
      <tr>
        <td>No</td>
        <td>Judul</td>
        <td style="width:500px;">isi</td>
        <td>Pilihan</td>
      </tr>
      <?php
      $query = mysqli_query($conn, "SELECT * FROM home");
      while ($row = mysqli_fetch_assoc($query )) {
        // code...
       ?>
       <tr>
         <td><?php echo $row['id_home']; ?></td>
         <td><?php echo $row['judul']; ?></td>
         <td><?php echo $row['isi']; ?></td>
         <td>
            <a href="../inputdata/homeinput.php=<?php echo $row['id_home']; ?>">Edit</a> |
            <a href="">Hapus</a>

         </td>
       </tr>
     <?php } ?>
   </table>
  </body>
</html>
