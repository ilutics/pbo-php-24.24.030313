
<?php

require_once __DIR__ . '/Pegawai.php';

class Staf extends Pegawai
{
    public function __construct(
        string $nama,
        float $gajiPokok,
        private float $tunjangan
    ) {
        parent::__construct($nama, $gajiPokok);
    }

    public function hitungGaji(): float
    {
        return parent::hitungGaji() + $this->tunjangan;
    }
}
