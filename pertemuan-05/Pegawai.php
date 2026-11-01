
<?php

class Pegawai
{
    public function __construct(
        protected string $nama,
        protected float $gajiPokok
    ) {
    }

    public function hitungGaji(): float
    {
        return $this->gajiPokok;
    }

    final public function info(): string
    {
        return "{$this->nama}: Rp" . number_format(
            $this->hitungGaji(),
            0,
            ',',
            '.'
        );
    }
}
