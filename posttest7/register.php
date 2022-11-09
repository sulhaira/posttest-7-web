<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>Document</title>
</head>
<body>
  <div class="kotak_login">
  <h3>Registrasi Akun</h3>
  <form action="" method="post">
    <label for="">Email</label><br>
    <input type="text" name="email" placeholder="Masukkan Email"><br><br>

    <label for="">Username</label><br>
    <input type="text" name="username" placeholder="Masukkan Username"><br><br>

    <label for="">Password</label><br>
    <input type="password" name="password" placeholder="Masukkan Password"><br><br>

    <label for="">Konfirmasi Password</label><br>
    <input type="password" name="konfirmasi" placeholder="Konfirmasi Password"><br><br>

    <input type="submit" name="regis" value="registrasi">
  </form>
  <p>Sudah punya akun?
    <a href="login.php">Login</a>
  </p>
  </div>
  
  
</body>
</html>

<?php
require 'config.php';
  if(isset($_POST['regis'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    //ngecek username sudah dipake atau belum

  $sql = "SELECT * FROM akun WHERE username='$username'";
  $user = $db->query($sql);

  if(mysqli_num_rows($user)>0){
    echo "<script>
      alert('username telah digunakan')
    </script>";
  }else{

    //ngecek konfirmasi pw
    if($password == $konfirmasi){

      $password = password_hash($password, PASSWORD_DEFAULT);

      $query = "INSERT INTO akun (email, username, psw)
                VALUE ('$email', '$username', '$password')";
      $result = $db->query($query);

      if($result){
        echo "<script>
          alert('Registrasi berhasil')
        </script>";
      }else{
        echo "<script>
      alert('konfirmasi password salah')
    </script>";
      }
    }
  }
  }
?>