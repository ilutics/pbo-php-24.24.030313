
<?php

require_once __DIR__ . '/BangunDatar.php';

class Segitiga extends BangunDatar
{
    public function __construct(
        private float $alas,
        private float $tinggi,
        private float $sisiMiring
    ) {
    }

    public function luas(): float
    {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function keliling(): float
    {
        return $this->alas + $this->tinggi + $this->sisiMiring;
    }
}
