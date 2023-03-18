<?php

class Service
{
    public function execute(): string
    {
        return "This class is runnung";
    }
}

class Controller
{
//    public function __construct(
//        private readonly Service $service = new Service()
//    ) {
//    }

    public function handle(Service $service = new Service()): void
    {
//        echo $this->service->execute();
        echo $service->execute();
    }
}

$controller = new Controller(new Service());

echo $controller->handle();