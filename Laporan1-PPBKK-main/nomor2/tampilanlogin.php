<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Selamat Datang</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Selamat Datang</title>
</head>
<body>
  <?php

    class User {
      public $username;
      public $password;

      public function login() {
        $users = [
          ["username" => "admin", "password" => "admin"],
          ["username" => "user", "password" => "user"],
        ];

        foreach ($users as $user) {
          if ($user["username"] === $this->username && $user["password"] === $this->password) {
            return true;
          }
        }

        return false;
      }
    }

    // Buat objek User
    $user = new User();

    // Cek apakah pengguna sudah login
    session_start();

    if (isset($_SESSION['username'])) {
      // Jika sudah login, tampilkan pesan "Selamat Datang"
      echo "<h1>Selamat Datang, " . $_SESSION['username'] . "</h1>";
    } else {
      // Jika belum login, tampilkan pesan "Anda belum login"
      echo "Anda belum login.";
    }
  ?>
  <a href="isihalaman.php" class="btn btn-primary">Selanjutnya</a>

</body>
</html>
