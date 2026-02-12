<?php

namespace App\Enums;

enum WatchStatus: int
{
    case Unwatched = 0; // 未視聴
    case Watching  = 1; // 視聴中
    case Watched   = 2; // 視聴済み

    public function label(): string
    {
        return match ($this) {
            self::Unwatched => '未視聴',
            self::Watching  => '視聴中',
            self::Watched   => '視聴済み',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
