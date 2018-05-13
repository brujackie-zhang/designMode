<?php

require_once('./IProduct.php');

class TextProduct implements IProduct
{
    public function getProperties()
    {
        $text = "This is a text!\n";

        return $text;
    }
}