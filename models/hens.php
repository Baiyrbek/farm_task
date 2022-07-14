<?php
require_once "farm.php";

class Hens extends Farm
{
    private $type = 'hen'; // Переменное указывает с каким типом животных мы работаем

    public function addHen()  // Добавляет новых кур
    {
        $product = 'egg';
        $range = ['from' => 0, 'to' => 1];
        return $this->addAnimal($this->type, $product, $range);
    }
    public function collectEgg() // Собирает яйца. Возвращает количество собранной продукции
    {
        return  $this->collectProducts($this->type);
    }

    public function countHens() // Считает кол-во кур и возвращает их кол-во.
    {
        return $this->countAnimals($this->type);
    }
}
