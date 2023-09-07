<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
<?php
class Logout {

public function konfirmasiLogout() {
  echo "<h1>Konfirmasi Logout</h1>";
  echo "<p>Apakah Anda yakin ingin logout?</p>";
  echo "<a href='formlogin.php'>Ya</a>";
  echo "<br>";
  echo "<a href='isihalaman.php'>Tidak</a>";
}

}

// Ini adalah kode yang akan ditampilkan di halaman
$logout = new Logout();
$logout->konfirmasiLogout();
?>

</body>
</html>
