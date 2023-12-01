<?php

namespace App\Enums;

enum TransactionTypes: string
{
    case Auction = 'Auction';
    case Lease = 'Lease';
    case Sale = 'Sale';
    case Investment = 'Investment';

    public static function toArray()
    {
        return [
            static::Auction->value,
            static::Lease->value,
            static::Sale->value,
            static::Investment->value
        ];
    }
}
