<?php

namespace App\Enums;

enum OrderStatus: int
{
    //	0:pending | 1:processing | 2:sent | 3:delivered | 4:cancelled| 5:refund
    case PENDING = 0;
    case PROCESSING = 1;
    case SENT = 2;
    case DELIVERED = 3;
    case CANCELLED = 4;
    case REFUND = 5;
}
