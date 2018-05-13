<?php

abstract class AbstractProduct
{
    public $name;
    public $id;

    abstract public function __clone();
}