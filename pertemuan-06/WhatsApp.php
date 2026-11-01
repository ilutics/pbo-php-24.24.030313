
<?php

require_once __DIR__ . '/Notifikasi.php';

class WhatsApp implements Notifikasi
{
    public function kirim(string $pesan): string
    {
        return "WhatsApp: " . $pesan;
    }
}
