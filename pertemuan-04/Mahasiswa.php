<?php

declare(strict_types=1);

class Mahasiswa
{
    public const BATAS_SKS = 24;

    private static int $jumlah = 0;

    public function __construct(
        public readonly string $nim,
        public string $nama,
        public string $prodi,
        public float $ipk
    ) {
        self::$jumlah++;
    }

    public function info(): string
    {
        return "NIM: {$this->nim}, Nama: {$this->nama}, Prodi: {$this->prodi}, IPK: {$this->ipk}";
    }

    public function predikat(): string
    {
        if ($this->ipk >= 3.51) {
            return Predikat::Cumlaude->label();
        }

        if ($this->ipk >= 3.01) {
            return Predikat::SangatMemuaskan->label();
        }

        return Predikat::Memuaskan->label();
    }

    public static function getJumlah(): int
    {
        return self::$jumlah;
    }
}
