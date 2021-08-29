<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Login</title>
    <style type="text/css">
    body{
      font-family :arial;
      font-size: 14px;
      background-color: #222;
    }
    #utama{
      width: 300px;
      margin: 0 auto;
      margin-top: 12%;

    }
    #judul{
      padding: 15px;
      text-align: center;
      font-size: 20px;
      background-color: #339966;
      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
      border-bottom: 3px solid #336666;
    }
    #inputan{
      background-color: #ccc;
      padding: 20px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
    }
    input{
      padding: 10px;
      border: 0;
    }
    .lg{
      width: 240px;
    }
    .btn{
      background-color: #339966;
      border-radius: 10px;
      color: #fff;
    }
    .btn:hover{
      background-color: #339966;
      cursor: pointer;
    }
  </style>
  </head>
  <body>
  <div id ="utama">
      <div id="judul">
      Halaman Login
      </div>
      <div id="inputan">
      <form action="" method="post">
        <div>
          <input type="text" name="user" placeholder="Username" class="lg" />
        </div>
        <div style="margin-top: 10px;">
          <input type="password" name="pass" placeholder="Password" class="lg" />
        </div>
        <div style="margin-top: 10px;">
          <input type="submit" name="login" value="login" class="btn"/>
            <input type="submit" name="register" value="register" class="btn"/>
        </div>

      </form>
      </div>

      <?php
      include("koneksi.php");
      if (isset($_POST['login'])) {
        $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$_POST['user']."' AND password = '".$_POST['pass']."' ");
        $hasil = mysqli_fetch_array($cek);
        $count = mysqli_num_rows($cek);
        if ($count > 0) {
          header ("location:home.php");
        } else {
          // code...
          echo "gagal masuk";
        }

      }
       ?>
  </div>
  </body>
  </html>
