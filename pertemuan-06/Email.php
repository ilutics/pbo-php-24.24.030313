
<?php

require_once __DIR__ . '/Notifikasi.php';

class Email implements Notifikasi
{
    public function kirim(string $pesan): string
    {
        return "Email: " . $pesan;
    }
}
