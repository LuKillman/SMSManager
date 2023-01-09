<?php

declare(strict_types=1);

namespace SimPod\SmsManager;

enum RequestType
{
    case LowCost;
    case Economy;
    case High;
}
