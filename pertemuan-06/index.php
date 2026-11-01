
<?php

require_once __DIR__ . '/BangunDatar.php';
require_once __DIR__ . '/Lingkaran.php';
require_once __DIR__ . '/Persegi.php';
require_once __DIR__ . '/Segitiga.php';
require_once __DIR__ . '/PersegiPanjang.php';

require_once __DIR__ . '/Notifikasi.php';
require_once __DIR__ . '/Email.php';
require_once __DIR__ . '/WhatsApp.php';
require_once __DIR__ . '/SMS.php';

function kirimSemua(array $notifikasi, string $pesan): array
{
    $hasil = [];

    foreach ($notifikasi as $item) {
        if ($item instanceof Notifikasi) {
            $hasil[] = $item->kirim($pesan);
        }
    }

    return $hasil;
}

$bangun = [
    new Lingkaran(7),
    new Persegi(4),
    new Segitiga(3, 4, 5),
    new PersegiPanjang(3, 4)
];

echo "=== DATA BANGUN DATAR ===\n";

foreach ($bangun as $item) {
    echo $item->deskripsi() . "\n";
}

echo "\n=== PENGIRIMAN NOTIFIKASI ===\n";

$notifikasi = [
    new Email(),
    new WhatsApp(),
    new SMS()
];

$hasil = kirimSemua(
    $notifikasi,
    "Selamat belajar PBO Pertemuan 6!"
);

foreach ($hasil as $pesan) {
    echo $pesan . "\n";
}
