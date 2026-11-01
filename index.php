<?php

// Program prosedural
$buku = [
    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
    ['judul' => 'Bumi', 'penulis' => 'Tere Liye', 'tahun' => 2014],
    ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009]
];

echo "=== Versi Prosedural ===\n";
foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}

// Program OOP
class Buku
{
    private string $judul;
    private string $penulis;
    private int $tahun;

    public function __construct(string $judul, string $penulis, int $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function info(): string
    {
        return "$this->judul - $this->penulis ($this->tahun)";
    }
}

$buku1 = new Buku('Laskar Pelangi', 'Andrea Hirata', 2005);
$buku2 = new Buku('Bumi', 'Tere Liye', 2014);
$buku3 = new Buku('Negeri 5 Menara', 'Ahmad Fuadi', 2009);

echo "\n=== Versi OOP ===\n";
echo $buku1->info() . "\n";
echo $buku2->info() . "\n";
echo $buku3->info() . "\n";
