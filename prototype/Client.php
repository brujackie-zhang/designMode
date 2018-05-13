<?php

require_once('./Product.php');

class Client
{
    private $p1;

    private $cp1;

    public function __construct()
    {
        $this->p1 = new Product();

        $this->cp1 = clone $this->p1;
        $this->p1->name = 'BZ';
        $this->p1->id = '201301';
        $this->p1->age = '25';

        $this->cp1->age = '256';

        $this->show($this->p1);
        $this->show($this->cp1);
    }

    private function show(AbstractProduct $p)
    {
        echo "My name is {$p->name}, my id is {$p->id}, my age is {$p->age}!\n";
    }
}

$c = new Client();