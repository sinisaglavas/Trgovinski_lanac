<?php
namespace src;

class Pharmacy implements Store_interface {

    public $product;

    public function tip()
    {
        return 'Pharmacy';
    }
}
