<?php

namespace App\Enums;

enum WorkType: int
{
    case SeriesOnly = 1;        // シリーズ作品
    case SeriesPlusMovie = 2;   // シリーズ+映画作品
    case MovieOnly = 3;         // 映画のみ作品（単発）

    public function label(): string
    {
        return match ($this) {
            self::SeriesOnly => 'クール作品',
            self::SeriesPlusMovie => 'クール+映画作品',
            self::MovieOnly => '映画のみ作品',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
