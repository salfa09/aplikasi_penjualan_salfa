<?php
$host = 'localhost';
$user = "root";             //default LARAGON/XAMPP adalah root
$password ="";              // default Laragon/XAMPP adalah kosong
$database ="aplikasi_penjualan";

//membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

//mengecek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
//hapus atau comment baris echo di bawah ini jika projek sudah berjalan normal
//echo "koneksi berhasil";
?>