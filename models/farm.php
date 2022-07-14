<?php

class Farm
{
    private $animals = array();
    
    protected function addAnimal($type, $product, $range)
    {
        array_push($this->animals, ['type' => $type, 'product' => $product, 'range' => $range]);
    }

    protected function countAnimals($type)
    {
        $val = 0;
        foreach ($this->animals as $a) {
            if ($a['type'] == $type) $val++;
        }
        return $val;
    }

    protected function collectProducts($type)
    {
        $val = 0;
        foreach ($this->animals as $a) {
            if ($a['type'] == $type) {
                $val += random_int($a['range']['from'], $a['range']['to']);
            }
        }
        return $val;
    }
}
