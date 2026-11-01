<?php

declare(strict_types=1);

class Produk
{
    public function __construct(
        public string $nama,
        public float $harga,
        public int $stok
    ) {
    }

    public function totalNilai(): float
    {
        return $this->harga * $this->stok;
    }
}
