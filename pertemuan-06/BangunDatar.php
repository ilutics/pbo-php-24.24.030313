
<?php

abstract class BangunDatar
{
    abstract public function luas(): float;

    abstract public function keliling(): float;

    public function deskripsi(): string
    {
        return sprintf(
            '%s, luas %.2f, keliling %.2f',
            get_class($this),
            $this->luas(),
            $this->keliling()
        );
    }
}
