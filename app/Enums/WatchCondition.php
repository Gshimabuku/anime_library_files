<?php

namespace App\Enums;

enum WatchCondition: int
{
    case Subscription = 1;      // 見放題
    case PointPurchase = 2;     // ポイント購入
    case PointRental = 3;       // ポイントレンタル

    public function label(): string
    {
        return match ($this) {
            self::Subscription => '見放題',
            self::PointPurchase => 'ポイント購入',
            self::PointRental => 'ポイントレンタル',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return array_map(
            fn (self $case) => [
                'value' => $case->value,
                'label' => $case->label(),
            ],
            self::cases()
        );
    }
}
