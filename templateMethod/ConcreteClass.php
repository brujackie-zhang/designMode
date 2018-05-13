<?php

require_once('./AbstractClass.php');

class ConcreteClass extends AbstractClass
{
    protected function addPix($pix)
    {
        $this->pix = $pix;

        echo 'pix:' . $this->pix . PHP_EOL;
    }

    protected function addCap($cap)
    {
        $this->cap = $cap;

        echo 'cap:' . $this->cap . PHP_EOL;
    }
}