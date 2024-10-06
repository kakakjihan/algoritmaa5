<?php
//Untuk Metode GET
if(isset($_GET['query'])) {
  $searchTerm = $_GET['query'];
  // Proses searchTerm untuk menampilkan hasil pencarian
}
//Untuk Metode POST
if(isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  // Proses username dan password untuk autentikasi
}
