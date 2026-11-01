<?php
declare(strict_types=1);

require_once __DIR__ . '/Predikat.php';
require_once __DIR__ . '/Semester.php';
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

echo "=== FITUR STATIC DAN KONSTANTA ===\n";
echo "Jumlah objek: " . Mahasiswa::getJumlah() . "\n";
echo "Batas SKS: " . Mahasiswa::BATAS_SKS . "\n\n";

echo "=== ENUM SEMESTER ===\n";
echo "Semester: " . Semester::Ganjil->value . "\n";
echo "Semester: " . Semester::Genap->value . "\n\n";

echo "=== ENUM PREDIKAT ===\n";
echo "Predikat 1: " . Predikat::Cumlaude->label() . "\n";
echo "Predikat 2: " . Predikat::SangatMemuaskan->label() . "\n";
echo "Predikat 3: " . Predikat::Memuaskan->label() . "\n\n";

$produk = new Produk("Buku", 5000, 3);

echo "=== DATA PRODUK ===\n";
echo "Nama: " . $produk->nama . "\n";
echo "Harga: " . $produk->harga . "\n";
echo "Stok: " . $produk->stok . "\n";
echo "Total Nilai: " . $produk->totalNilai() . "\n";

// Contoh perubahan properti readonly yang ditolak PHP:
// $mahasiswa1->nim = "999";
// Error: Cannot modify readonly property Mahasiswa::$nim
