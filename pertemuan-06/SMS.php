
<?php

require_once __DIR__ . '/Notifikasi.php';

class SMS implements Notifikasi
{
    public function kirim(string $pesan): string
    {
        return "SMS: " . $pesan;
    }
}
