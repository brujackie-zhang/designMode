<?php

require_once('./EuroCal.php');
require_once('./ITarget.php');

class EuroAdapter extends EuroCal implements ITarget
{
    public function __construct()
    {
        $this->requester();
    }

    public function requester()
    {
        $this->rate = 0.11;
        return 123;

        return $this->rate;
    }
}