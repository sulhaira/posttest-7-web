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
  <h3 class="tulisan_login">login akun</h3>
  <form action="" method="post">
    <label for="">Username / Email</label><br>
    <input type="text" name="user" placeholder="Masukkan Username/Email"><br><br>

    <label for="">Password</label><br>
    <input type="password" name="password" placeholder="Masukkan Password"><br><br>

    <input type="submit" name="login" value="login">
  </form>
  <p>Belum punya akun?
    <a href="register.php">Registrasi</a>
  </p></div>
  

</body>
</html>
<?php
  session_start();
  require 'config.php';
  if(isset($_POST['login'])){
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM akun
    WHERE username='$user'
    OR email='$user'";

    $result = $db->query($sql);
    if(mysqli_num_rows($result)>0){
      $row = mysqli_fetch_array($result);
      $username = $row['username'];

      if(password_verify($password, $row['psw'])){
        $_SESSION['login'] = true;
        echo "<script>
      alert('selamat datang $username');
      document.location.href = 'index.php';
    </script>";
      }else{
        echo "<script>
        alert('username dan password salah')</script>";
      }
    }
  }
?>
