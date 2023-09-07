<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Login</title>
</head>
<body>
  <form action="formlogin.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
  </form>

  <?php

    class User {
      // Atribut
      public $username;
      public $password;

      // Fungsi
      public function login() {
        // Mendapatkan data pengguna dari database
        $users = [
          ["username" => "admin", "password" => "admin"],
          ["username" => "user", "password" => "user"],
        ];

        // Memeriksa apakah username dan password cocok dengan salah satu pengguna yang terdaftar
        foreach ($users as $user) {
          // Jika username dan password cocok, maka login berhasil
          if ($user["username"] === $this->username && $user["password"] === $this->password) {
            // Redirect ke halaman tampilanlogin.php
            header("Location: tampilanlogin.php");
            break;
          }
        }

        // Jika username atau password salah, maka tampilkan pesan kesalahan
        echo "Username atau password salah.";
      }
    }

    // Jika method POST, maka proses login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Dapatkan username dan password dari form
      $username = $_POST["username"];
      $password = $_POST["password"];

      // Buat objek User
      $user = new User();

      // Set username dan password pada objek User
      $user->username = $username;
      $user->password = $password;

      // Login dengan menggunakan objek User
      $user->login();
    }

  ?>
</body>
</html>
