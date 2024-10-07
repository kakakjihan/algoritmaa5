<?php
if(isset($_COOKIE["user"])) {
    echo "Selamat datang " . $_COOKIE["user"];
    echo "Sampai jumpa " . $_COOKIE["user"];
} else {
    echo "<br>Selamat datang, tamu!<br><hr>";
    echo "Sampai jumpa!";
}echo "<P><strong>by:jihann syafitri";

