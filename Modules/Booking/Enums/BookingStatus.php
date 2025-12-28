<?php

namespace Modules\Booking\Enums;

enum BookingStatus: string
{
    case Cancelled = 'cancelled';
    case Completed = 'completed';
    case Pending = 'pending';
}
