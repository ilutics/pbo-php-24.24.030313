
<?php

require_once __DIR__ . '/Pegawai.php';

class Sekolah
{
    private array $pegawai = [];

    public function tambahPegawai(Pegawai $p): void
    {
        $this->pegawai[] = $p;
    }

    public function totalGaji(): float
    {
        $total = 0.0;

        foreach ($this->pegawai as $p) {
            $total += $p->hitungGaji();
        }

        return $total;
    }
}
