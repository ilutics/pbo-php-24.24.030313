
<?php

require_once __DIR__ . '/BangunDatar.php';

class PersegiPanjang extends BangunDatar
{
    public function __construct(
        private float $p,
        private float $l
    ) {
    }

    public function luas(): float
    {
        return $this->p * $this->l;
    }

    public function keliling(): float
    {
        return 2 * ($this->p + $this->l);
    }
}
