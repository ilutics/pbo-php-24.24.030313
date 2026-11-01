
<?php

require_once __DIR__ . '/Pegawai.php';

class Honorer extends Pegawai
{
    public function __construct(
        string $nama,
        float $gajiPerJam,
        private int $jamKerja
    ) {
        parent::__construct($nama, $gajiPerJam);
    }

    public function hitungGaji(): float
    {
        return $this->gajiPokok * $this->jamKerja;
    }
}
