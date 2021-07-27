<?php
// Исходный массив
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// Подсчитать длину массива
$arrayLength = count($arr);
echo "Длина массива \$arr - " . $arrayLength, "\n";

// Переместить первые 4 элемента массива в конец массива
$array1 = array_slice($arr, 0, 4);
$array2 = array_slice($arr, 4, 5);
$arrayRes = array_merge($array2, $array1);
print_r($arrayRes);

// Получить сумму 4,5,6 элемента
$arrayNum = array_slice($arr, 3, 3);
$sumElementOfArray = array_sum($arrayNum);
print_r("Сумма элементов массива = " . $sumElementOfArray);
echo "\n";

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];

// Найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$arrayArrTwoOne = array_diff($secondArr, $firstArr);
print_r($arrayArrTwoOne);
echo "\n";

// Найти все элементы которые присутствуют в первом и отсутствуют во втором
$arrayArrOneTwo = array_diff($firstArr, $secondArr);
print_r($arrayArrOneTwo);
echo "\n";

// Найти все элементы значения которых совпадают
$arrayTheSame = array_intersect($firstArr, $secondArr);
print_r($arrayTheSame);
echo "\n";

// Найти все элементы значения которых отличаются
$arrayDiffValues = array_diff_assoc($firstArr, $secondArr);
print_r($arrayDiffValues);
echo "\n";

$firstArray = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];

// получить все вторые элементы вложенных массивов+++++++++++++
while (list($key1, $value1) = each($firstArray)) {
    if (is_array($value1)) {
        echo $key1, "\n";
        while (list($key2, $value2) = each($firstArray[$key1])) {
            echo $key2, " => ";
            echo $value2, "\n";
        }
    }
// получить общее количество элементов в массиве
    $result = [];
//    $count = 0;
    foreach ($firstArray as $item) {
        if (is_array($item)) {
            foreach ($item as $subItem) {
                $result[] = $subItem;
            }
        } else {
            $result[] = $item;
        }
    }
    $arrayCount = count($result);
    print_r("Количество всех элементов массива = " . $arrayCount);
    echo "\n";

// получить сумму всех значений в массиве
    $result = [];
    foreach ($firstArray as $item) {
        if (is_array($item)) {
            foreach ($item as $subItem) {
                $result[] = $subItem;
            }
        } else {
                $result[] = $item;
        }
    }
    $arraySumm = array_sum($result);
    print_r("Сумма всех значений массива = " . $arraySumm);
    echo "\n";
}
