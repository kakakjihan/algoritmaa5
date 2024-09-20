<?php
function cekUmur($umur) {
    if ($umur < 16) {
        return "Maaf, kamu belum cukup umur.";
    }
    return "Selamat, kamu boleh masuk.";
}

echo cekUmur(16); // Output: Maaf, kamu belum cukup umur.
echo "<P><strong>by:jihan syafitri";