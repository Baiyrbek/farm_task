<?php
require_once "farm.php";

class Cows extends Farm
{
    private $type = 'cow'; // Переменное указывает с каким типом животных мы работаем

    public function addCow() // Добавляет новых коров
    {
        $product = 'milk';
        $range = ['from' => 8, 'to' => 12];
        return $this->addAnimal($this->type, $product, $range);
    }

    public function collectMilk() // Собирает молоко. Возвращает количество собранной продукции
    {
        return  $this->collectProducts($this->type);
    }

    public function countCows() // Считает кол-во коров и возвращает их кол-во.
    {
        return $this->countAnimals($this->type);
    }
}
