<?php
// Memulai sesi
session_start1();
session_start2();
// Menyimpan data ke sesi
$_SESSION["namaPengguna"] = "jihan";
//Mengakses Data Sesi
session_start3();
// Mengakses data dari sesi
echo 'Selamat Datang, ' . $_SESSION["namaPengguna"] . '!';
//Menghapus Variabel Sesi
session_start4();
// Menghapus variabel "namaPengguna" dari sesi
unset($_SESSION["namaPengguna"]);
//Menghancurkan Sesi
session_start5();
// Menghancurkan seluruh sesi
session_destroy();
?>
