<?php
$to = 'tujuan@example.com'; // Ganti dengan alamat email tujuan
$subject = 'Pesan dari Website';
$headers = "From: " . $email . "\r\n";
$headers1 .= "Reply-To: ". $email . "\r\n";
$headers2 .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Pesan terkirim dengan sukses.";
} else {
    echo "Pesan gagal dikirim.";
}
