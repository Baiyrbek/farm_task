<?php
require_once "farm.php";
class Cows extends Farm
{
    private $type = 'cow';

    public function addCow()
    {
        $product = 'milk';
        $range = ['from' => 8, 'to' => 12];
        return $this->addAnimal($this->type, $product, $range);
    }
    public function collectMilk()
    {
        return  $this->collectProducts($this->type);
    }

    public function countCows()
    {
        return $this->countAnimals($this->type);
    }
}
