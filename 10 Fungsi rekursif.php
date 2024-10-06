<?php

function faktorial($angka) {
  if ($angka < 2) {
    return 1;
  } else {
  // memanggil dirinya sendiri
  return ($angka * faktorial($angka-1));
  }
}
// memanggil fungsi
echo "faktorial 8 adalah " . faktorial(8);
echo "<hr>";
echo "<br>faktorial 6 adalah " . faktorial(6);
echo "<hr>";
echo "<P><strong>by:jihann syafitri";

?>

