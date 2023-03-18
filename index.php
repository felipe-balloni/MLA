<?php

class Service
{
    public function execute(): string
    {
        return "This class is runnung";
    }
}

//class Controller
//{
//    private $service;
//
//    public function __construct(Service $service)
//    {
//        $this->service = $service;
//    }
//
//    public function handle()
//    {
//        echo $this->service->execute();
//    }
//}

class Controller
{

    public function __construct(
        private Service $service
    ) {
    }

    public function handle(): void
    {
        echo $this->service->execute();
    }
}

$controller = new Controller(new Service());

echo $controller->handle();