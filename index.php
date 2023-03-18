<?php

enum Status: string
{
    case PAID = 'pago';
    case PENDING = 'processando';
    case CANCELED = 'cancelado';
}

class CheckoutService
{
    public function handle(Status $gatewayStatus): string
    {
        return $gatewayStatus->value;
    }
}

$service = new CheckoutService();
echo $service->handle(Status::PAID);