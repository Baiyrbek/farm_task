<?php
require_once "farm.php";
class Hens extends Farm
{
    private $type = 'hen';

    public function addHen()
    {
        $product = 'egg';
        $range = ['from' => 0, 'to' => 1];
        return $this->addAnimal($this->type, $product, $range);
    }
    public function collectEgg()
    {
        return  $this->collectProducts($this->type);
    }

    public function countHens()
    {
        return $this->countAnimals($this->type);
    }
}
