<?php

require_once('./EuroAdapter.php');
require_once('./DollarCal.php');

class Client
{
    private $requestNow;
    private $dollarNow;

    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarNow = new DollarCal();

        $euro = "&#8364";

        echo "Euro: $euro" . $this->makeAdapterRequest($this->requestNow);

        echo PHP_EOL;

        echo "Dollar: $" . $this->makeDollarRequester($this->dollarNow);
    }

    public function makeAdapterRequest(ITarget $adapter)
    {
        return $adapter->requestCalc(40, 50);
    }

    public function makeDollarRequester(DollarCal $dollar)
    {
        return $dollar->requestCalc(40, 50);
    }
}

$c = new Client();