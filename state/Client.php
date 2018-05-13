<?php

function autoload($className)
{
    include($className . '.php');
}

spl_autoload_register('autoload');

class Client
{
    private $context;

    public function __construct()
    {
        $this->context = new Context();
        $this->context->turnOnLight();
        $this->context->turnOnLight();
        $this->context->turnOffLight();
        $this->context->turnOffLight();
    }
}

$c = new Client();