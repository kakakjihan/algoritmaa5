<?php
// mmbuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "<br>Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang bertemu dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("jihan", "Hallo");

echo "<hr>";

$saya= "jihan";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);
echo "<P><strong>by:jihann syafitri";
?>
