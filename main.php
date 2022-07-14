<?php
require_once "./models/cows.php";
require_once "./models/hens.php";

$cows = new Cows();
$hens = new Hens();

echo 'Добавление животных...', '<br>';

for ($i = 0; $i < 10; $i++) {
    $cows->addCow();
}
for ($i = 0; $i < 20; $i++) {
    $hens->addHen();
}

echo 'На ферме: ', '<br/>';
echo 'Коров : ' . $cows->countCows(), '<br>';
echo 'Кур : ' . $hens->countHens(), '<br>';

echo 'Сбор продукции...', '<br>';

$milk = 0;
for ($i = 0; $i < 7; $i++) {
    $milk += $cows->collectMilk();
}
$egg = 0;
for ($i = 0; $i < 7; $i++) {
    $egg += $hens->collectEgg();
}
echo 'Молоко: ' . $milk . 'л.', '<br>';
echo 'Яйцо: ' . $egg . 'шт.', '<br>';

echo '<br>======================================================<br><br>';

echo 'Добавление животных...', '<br>';

$cows->addCow();
for ($i = 0; $i < 5; $i++) {
    $hens->addHen();
}

echo 'На ферме: ', '<br/>';
echo 'Коров : ' . $cows->countCows(), '<br>';
echo 'Кур : ' . $hens->countHens(), '<br>';

echo 'Сбор продукции...', '<br>';

$milk = 0;
for ($i = 0; $i < 7; $i++) {
    $milk += $cows->collectMilk();
}
$egg = 0;
for ($i = 0; $i < 7; $i++) {
    $egg += $hens->collectEgg();
}
echo 'Молоко: ' . $milk . 'л.', '<br>';
echo 'Яйцо: ' . $egg . 'шт.', '<br>';
