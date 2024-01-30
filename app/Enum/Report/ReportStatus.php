<?php declare(strict_types=1);

namespace App\Enum\Report;

enum ReportStatus: string
{
    case OPEN   = 'open';
    case CLOSED = 'closed';
}
