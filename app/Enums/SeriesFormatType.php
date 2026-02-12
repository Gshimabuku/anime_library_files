<?php

namespace App\Enums;

enum SeriesFormatType: int
{
    case Series = 1;    // 第1期、シーズン1など
    case Special = 2;   // スペシャル
    case Movie  = 3;    // 映画要素

    public function label(): string
    {
        return match ($this) {
            self::Series => 'シリーズ',
            self::Special => 'スペシャル',
            self::Movie  => '映画',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
