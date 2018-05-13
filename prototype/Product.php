<?php

require_once('./AbstractProduct.php');

class Product extends AbstractProduct
{
    public $age;

    public function __construct()
    {
        $this->name = 'zj';
        $this->id = '1';
    }

    public function __clone() {
    }
}