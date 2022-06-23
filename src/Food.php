<?php
namespace src;


class Food implements Store_interface {

    public $product;

    public function tip()
    {
        return 'Food';
    }
}
