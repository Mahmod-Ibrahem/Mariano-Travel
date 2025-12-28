<?php

namespace Modules\Booking\Enums;

enum BookingPayment: string
{
    case Cash = 'cash';
    case PayPal = 'paypal';
    case Cancelled = 'cancelled';
}
