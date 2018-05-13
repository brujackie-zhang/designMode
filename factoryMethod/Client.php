<?php

require_once('./TextFactory.php');
require_once('./TextProduct.php');

class Client
{
    private $_textFactory;

    public function work()
    {
        $this->_textFactory = new TextFactory();

        echo $this->_textFactory->startFactory(new TextProduct());
    }
}

$c = new Client();

$c->work();