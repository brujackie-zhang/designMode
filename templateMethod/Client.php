<?php

function __autoload($className)
{
    include($className . '.php');
}

class Client
{
    function __construct()
    {
        $c = new ConcreteClass();

        $c->templateMethod('pix haha', 'cap hello');
    }
}

$c = new Client();