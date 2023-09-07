<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Halaman</title>
</head>
<body>

<?php
session_start();

/*
 * Ini adalah kelas `IsiHalaman`
 * Kelas ini mendefinisikan data dan fungsi yang terkait dengan halaman utama
 */
class IsiHalaman {

    /*
     * Ini adalah atribut `judul`, `username`, dan `pesan`
     * Atribut-atribut ini menyimpan data yang digunakan untuk menampilkan halaman utama
     */
    public $judul = "Halaman Utamaku";
    public $username = "User";
    public $pesan = "Selamat datang di halaman utama.";

    /*
     * Ini adalah fungsi `__construct()`
     * Fungsi ini digunakan untuk menginisialisasi atribut `judul`, `username`, dan `pesan`
     */
    public function __construct($judul = null, $username = null, $pesan = null) {
        if ($judul) {
            $this->judul = $judul;
        }
        if ($username) {
            $this->username = $username;
        }
        if ($pesan) {
            $this->pesan = $pesan;
        }
    }

    /*
     * Ini adalah fungsi `tampilkan()`
     * Fungsi ini menampilkan kode HTML untuk halaman utama
     */
    public function tampilkan() {
        /*
         * Ini adalah kode HTML yang akan ditampilkan di halaman
         */
        echo "<h1>" . $this->judul . "</h1>";
        echo "<p>Selamat datang, " . $this->username . ".</p>";
        echo "<p>" . $this->pesan . "</p>";

        echo "<p>Apa yang ingin Anda lakukan hari ini?</p>";
        echo "<ul>";
        echo "<li><a href='profil.php'>Lihat profil Anda</a></li>";
        echo "<li><a href='artikel.php'>Baca artikel</a></li>";
        echo "<li><a href='posting.php'>Tulis artikel</a></li>";
        echo "<li><a href='logout.php'>Logout</a></li>";
        echo "</ul>";
    }

}

/*
 * Ini adalah kode HTML yang akan ditampilkan di halaman
 */
$isiHalaman = new IsiHalaman();
echo $isiHalaman->tampilkan();

?>

</body>
</html>
