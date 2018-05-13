<?php

require_once('./Creator.php');
// require_once('./TextProduct.php');
require_once('./IProduct.php');

class TextFactory extends Creator
{
    private $_textFactory;
    protected function factoryMethod(IProduct $product)
    {
        $this->_textFactory = $product;

        return $this->_textFactory->getProperties();
    }
}