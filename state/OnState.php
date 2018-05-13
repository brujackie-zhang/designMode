<?php

class OnState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }
    public function turnLightOn()
    {
        echo "Light already on! No any action!\n";
    }

    public function turnLightOff()
    {
        echo "Lights off!\n";
        $this->context->setState($this->context->getOffState());
    }
}