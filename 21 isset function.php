<?php
//Penggunaan Fungsi isset()
$var = "Halo, dunia!";

if (isset($var)) {
    echo "Variabel 'var' telah di-set.<br><hr>";
} else {
    echo "Variabel 'var' belum di-set.";
}
//Menchecek Beberapa Variabel Sekaligus
$var1 = "PHP";
$var2 = "isset";

if (isset($var1, $var2)) {
    echo "Kedua variabel telah di-set.<hr>";
} else {
    echo "Salah satu atau kedua variabel belum di-set.";
}
echo "<P><strong>by:jihan syafitri";
?>
