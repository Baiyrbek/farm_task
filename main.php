<?php
// Импортируем классы
require_once "./models/cows.php";
require_once "./models/hens.php";

// Инициализация классов Коров и  Кур
$cows = new Cows();
$hens = new Hens();

echo 'Добавление животных...', '<br>';

// Добавление 10 коров и 20 кур
for ($i = 0; $i < 10; $i++) {
    $cows->addCow();
}
for ($i = 0; $i < 20; $i++) {
    $hens->addHen();
}

// Вывод данных о животных на ферме на экран
echo 'На ферме: ', '<br/>';
echo 'Коров : ' . $cows->countCows(), '<br>';
echo 'Кур : ' . $hens->countHens(), '<br>';

echo 'Сбор продукции...', '<br>';

// Сбор продукци за неделю (7 раз)
$milk = 0;
for ($i = 0; $i < 7; $i++) {
    $milk += $cows->collectMilk();
}
$egg = 0;
for ($i = 0; $i < 7; $i++) {
    $egg += $hens->collectEgg();
}

// Вывод данных о собранной продукции на экран

echo 'Молоко: ' . $milk . 'л.', '<br>';
echo 'Яйцо: ' . $egg . 'шт.', '<br>';

echo '<br>======================================================<br><br>';

echo 'Добавление животных...', '<br>';

//Добавляем 1 корову
$cows->addCow();
//Добавляем 5 кур
for ($i = 0; $i < 5; $i++) {
    $hens->addHen();
}

// Вывод данных о животных на ферме на экран
echo 'На ферме: ', '<br/>';
echo 'Коров : ' . $cows->countCows(), '<br>';
echo 'Кур : ' . $hens->countHens(), '<br>';

echo 'Сбор продукции...', '<br>';

// Сбор продукци за неделю (7 раз)
$milk = 0;
for ($i = 0; $i < 7; $i++) {
    $milk += $cows->collectMilk();
}
$egg = 0;
for ($i = 0; $i < 7; $i++) {
    $egg += $hens->collectEgg();
}
// Вывод данных о собранной продукции на экран
echo 'Молоко: ' . $milk . 'л.', '<br>';
echo 'Яйцо: ' . $egg . 'шт.', '<br>';
