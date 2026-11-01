
<?php

require_once __DIR__ . '/Pegawai.php';

class Guru extends Pegawai
{
    public function __construct(
        string $nama,
        float $gajiPokok,
        private int $jamMengajar
    ) {
        parent::__construct($nama, $gajiPokok);
    }

    public function hitungGaji(): float
    {
        return parent::hitungGaji() + ($this->jamMengajar * 50000);
    }
}
