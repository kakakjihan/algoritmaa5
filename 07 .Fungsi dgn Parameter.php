<?php
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "<br>Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang bertemu dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("jihan", "Hallo");

  echo "<hr>";

  $saya = "jihan";
  $ucapanSalam = "Selamat siang";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);
  echo "<P><strong>by:jihan syafitri";
?>

