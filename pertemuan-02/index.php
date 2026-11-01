
<?php

require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Produk.php';

$mahasiswa1 = new Mahasiswa(
    "24.24.030313",
    "William Hans Permana",
    "Pendidikan Teknologi Informasi",
    3.80
);

$mahasiswa2 = new Mahasiswa(
    "24002",
    "Andi",
    "Pendidikan Teknologi Informasi",
    3.20
);

$mahasiswa3 = new Mahasiswa(
    "24003",
    "Budi",
    "Pendidikan Teknologi Informasi",
    2.90
);

echo "=== DATA MAHASISWA ===\n\n";

echo $mahasiswa1->info() . "\n";
echo "Predikat: " . $mahasiswa1->predikat() . "\n\n";

echo $mahasiswa2->info() . "\n";
echo "Predikat: " . $mahasiswa2->predikat() . "\n\n";

echo $mahasiswa3->info() . "\n";
echo "Predikat: " . $mahasiswa3->predikat() . "\n\n";

$produk = new Produk("Buku", 5000, 3);

echo "=== DATA PRODUK ===\n";
echo "Nama: {$produk->nama}\n";
echo "Harga: {$produk->harga}\n";
echo "Stok: {$produk->stok}\n";
echo "Total Nilai: " . $produk->totalNilai() . "\n";
