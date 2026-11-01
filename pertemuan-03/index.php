
<?php

require_once __DIR__ . '/Rekening.php';
require_once __DIR__ . '/Siswa.php';

$rekening1 = new Rekening("001", "William Hans Permana");
$rekening2 = new Rekening("002", "Andi");

echo "=== DATA REKENING ===\n";
echo "Nomor: " . $rekening1->getNomor() . "\n";
echo "Pemilik: " . $rekening1->getPemilik() . "\n\n";

$rekening1->setor(100000);
$rekening1->tarik(20000);
$rekening1->transfer($rekening2, 30000);

echo "Saldo William: Rp" . $rekening1->getSaldo() . "\n";
echo "Saldo Andi: Rp" . $rekening2->getSaldo() . "\n\n";

echo "=== RIWAYAT TRANSAKSI WILLIAM ===\n";

foreach ($rekening1->getRiwayat() as $transaksi) {
    echo "- {$transaksi}\n";
}

echo "\n=== RIWAYAT TRANSAKSI ANDI ===\n";

foreach ($rekening2->getRiwayat() as $transaksi) {
    echo "- {$transaksi}\n";
}

echo "\n=== PENGUJIAN VALIDASI REKENING ===\n";

if (!$rekening1->setor(-5000)) {
    echo "Setor negatif ditolak.\n";
}

if (!$rekening1->tarik(1000000)) {
    echo "Penarikan melebihi saldo ditolak.\n";
}

echo "\n=== DATA SISWA ===\n";

$siswa = new Siswa();
$siswa->setNama("William Hans Permana");
$siswa->setNilai(90);

echo "Nama: " . $siswa->getNama() . "\n";
echo "Nilai: " . $siswa->getNilai() . "\n";

echo "\n=== PENGUJIAN VALIDASI SISWA ===\n";

$siswa->setNama("");
$siswa->setNilai(150);

echo "Nama setelah input kosong: " . $siswa->getNama() . "\n";
echo "Nilai setelah input 150: " . $siswa->getNilai() . "\n";

// Contoh akses ilegal yang ditolak PHP:
// $rekening1->saldo = -500000; // Error: properti saldo bersifat private.
// $siswa->nilai = 150;         // Error: properti nilai bersifat private.
