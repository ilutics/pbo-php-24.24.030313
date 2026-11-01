
<?php

require_once __DIR__ . '/BangunDatar.php';

class Lingkaran extends BangunDatar
{
    public function __construct(private float $r)
    {
    }

    public function luas(): float
    {
        return M_PI * $this->r ** 2;
    }

    public function keliling(): float
    {
        return 2 * M_PI * $this->r;
    }
}
