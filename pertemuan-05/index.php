
<?php

require_once __DIR__ . '/Pegawai.php';
require_once __DIR__ . '/Guru.php';
require_once __DIR__ . '/Staf.php';
require_once __DIR__ . '/Honorer.php';
require_once __DIR__ . '/Sekolah.php';

$guru = new Guru("Bu Sari", 4000000, 24);
$staf = new Staf("Pak Andi", 3500000, 500000);
$honorer = new Honorer("Pak Budi", 25000, 80);

echo "=== DATA PEGAWAI ===\n";
echo $guru->info() . "\n";
echo $staf->info() . "\n";
echo $honorer->info() . "\n\n";

$sekolah = new Sekolah();

$sekolah->tambahPegawai($guru);
$sekolah->tambahPegawai($staf);
$sekolah->tambahPegawai($honorer);

echo "=== TOTAL GAJI SEKOLAH ===\n";
echo "Total: Rp" . number_format(
    $sekolah->totalGaji(),
    0,
    ',',
    '.'
) . "\n";

// Contoh override method final yang ditolak PHP:
//
// class GuruContoh extends Pegawai
// {
//     public function info(): string
//     {
//         return "Info baru";
//     }
// }
//
// Error: Cannot override final method Pegawai::info()
