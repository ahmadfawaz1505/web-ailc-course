<html>
<head>
  <title> ailc course </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="wrap">

  <div class="menu">
    <ul>
      <li><a href="admin_home.php">Home</a></li>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </div>

  <div class="content">
      <div class="kiri">
        <form action="" method="post">
          <div>
            <h1> Judul</h1>
            <input type="text" name="user" placeholder="Judul home" class="lg" />
          </div>
          <h2>ISI</h2>
          <div style="margin-top: 10px;">
            <input type="password" name="pass"  class="sp" />
          </div>
          <div style="margin-top: 10px;">
            <input type="submit" name="simpan" value="simpan" class="btn"/>
          </div>
        </form>
      </div>

<?php
include '../koneksi.php';
$id=$_GET['edi'];
$query=mysqli_query($link, "SELECT * FROM home WHERE id='$_GET[id]'");
$outputan=mysqli_fetch_array($query);

 ?>
      <div class="kanan">
      </div>


  </div>

</body>
</html>
