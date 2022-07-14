<?php

// Главный класс ФЕРМЫ. 
// Переменное $type указывет с каким типом животных мы работаем 

class Farm
{
    private $animals = array(); // Данные о животных хранится в этой переменной в виде объектов в массиве
    
    protected function addAnimal($type, $product, $range) // Добавляет новых животных в ферму. Возвращает true
    {
        array_push($this->animals, ['type' => $type, 'product' => $product, 'range' => $range]);
        return true;
    }

    protected function countAnimals($type) // Считает количество животных определенного типа на ферме. Возвращает кол-во животных
    {
        $val = 0;
        foreach ($this->animals as $a) {
            if ($a['type'] == $type) $val++;
        }
        return $val;
    }

    protected function collectProducts($type) // Собирает продукции животных определенного типа на ферме. Возвращает кол-во собранной продукции 
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
