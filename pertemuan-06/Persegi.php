
<?php

require_once __DIR__ . '/BangunDatar.php';

class Persegi extends BangunDatar
{
    public function __construct(private float $sisi)
    {
    }

    public function luas(): float
    {
        return $this->sisi ** 2;
    }

    public function keliling(): float
    {
        return 4 * $this->sisi;
    }
}
