<?php

abstract class Creator
{
    abstract protected function factoryMethod(IProduct $product);

    public function startFactory($product)
    {
        return $this->factoryMethod($product);
    }
}