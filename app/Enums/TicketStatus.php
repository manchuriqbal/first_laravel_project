<?php


namespace App\Enums;

enum TicketStatus: string {
    case OPEN = 'open';
    case RESOLVE = 'resolve';
    case REJECTED = 'rejected';
}
