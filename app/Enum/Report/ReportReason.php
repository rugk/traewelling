<?php declare(strict_types=1);

namespace App\Enum\Report;

enum ReportReason: string
{
    case INAPPROPRIATE = 'inappropriate';
    case IMPLAUSIBLE   = 'implausible';
    case SPAM          = 'spam';
    case ILLEGAL       = 'illegal';
    case OTHER         = 'other';

    public function getPriority(): int {
        return match ($this) {
            self::OTHER, self::IMPLAUSIBLE => 0,
            self::INAPPROPRIATE            => 10,
            self::SPAM                     => 50,
            self::ILLEGAL                  => 100,
        };
    }
}
