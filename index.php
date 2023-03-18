<?php

enum Status: int
{
    case PAID = 1;
    case PENDING = 2;
    case CANCELED = 0;
}

class CheckoutService
{
    public function handle(Status $gatewayStatus): int
    {
        return $gatewayStatus->value;
    }
}

$service = new CheckoutService();
echo $service->handle(Status::PAID);