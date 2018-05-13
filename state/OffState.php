<?php

class OffState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        echo "Lights On! I can see!\n";
        $this->context->setState($this->context->getOnState());
    }

    public function turnLightOff()
    {
        echo "Lights already off! No any action!\n";
    }
}