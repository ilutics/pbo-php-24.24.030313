<?php

declare(strict_types=1);

enum Predikat: string
{
    case Cumlaude = 'cumlaude';
    case SangatMemuaskan = 'sangat_memuaskan';
    case Memuaskan = 'memuaskan';

    public function label(): string
    {
        return match ($this) {
            self::Cumlaude => 'Cumlaude',
            self::SangatMemuaskan => 'Sangat Memuaskan',
            self::Memuaskan => 'Memuaskan',
        };
    }
}
