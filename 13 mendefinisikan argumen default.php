<?php
function namaFungsi($parameter = 'nilaiDefault') {
    // kode fungsi di sini
}
//Contoh penggunaan Argumen Default
function sapa($nama = 'pengunjung') {
    echo "Halo, $nama!<br><hr>";
}
sapa(); // Output: Halo, pengunjung!
sapa('novla'); // Output: Halo, novla!
//Jika kita tidak menyertakan argumen saat memanggil fungsi, nilai default akan diterapkan.

sapa(); // menggunakan nilai default yang didefinisikan dalam fungsi
//Kamu juga bisa menyertakan argumen baru jika ingin menggantikan nilai default.

sapa('putri'); // menggunakan argumen yang diberikan, "Budi"
//Jika kamu memiliki beberapa parameter, dan beberapa di antaranya adalah argumen default, pastikan untuk menempatkan argumen default setelah semua parameter non-default.

function contohFungsi($wajib, $opsional = 'default') {
    // Kode fungsi...
}
echo "<P><strong>by:jihann syafitri";