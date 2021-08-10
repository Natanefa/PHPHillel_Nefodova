<?php
getVariableType();
countCharacterInString();
sumAllValuesInArray();
squaroComparison();

function getVariableType()
{
    $data = array(1, 1., null, true, 'string', new stdClass(), []);

    foreach ($data as $value) {
        echo gettype($value), "\n";
    }

}

function countCharacterInString()
{
    $string = 'This function doesn\'t count overlapped substrings. See the example below!';
    if (is_string($string)) {
        $count = substr_count($string, 'b');
        print_r($count);
        echo
        "\n";
    } else {
        echo 'false', "\n";
    }
}

function sumAllValuesInArray()
{
    $array = [
        'one' => 1,
        'two' => [
            'one' => 11,
            'two' => 22,
            'three' => [
                'one' => [
                    'one' => 852,
                    'two' => 741,
                ]
            ],
        ],
        'three' => [
            'one' => 111,
            'two' => [
                'one' => 123,
                'two' => 456,
                'three' => 789,
            ],
        ],
        'four' => 4,
        'five' => [
            'three' => 33333,
            'four' => 44444,
            'five' => 55555,
        ],
    ];
    $result = [];
    foreach ($array as $item) {
        if (is_array($item)) {
            foreach ($item as $subItem) {
                if (is_array($subItem)) {
                    foreach ($item as $subItem)
                        $result[] = $subItem;
                } else $result[] = $subItem;
            }
                $result[] = $item;
            }
        }
        $arraySumm = array_sum($result);
        print_r("Сумма всех значений массива = " . $arraySumm);
        echo "\n";
}

function squaroComparison()
{
    $sqaroBigger = 13;
    $squaroSmaller = 10;
    if ($sqaroBigger > 0 and $squaroSmaller > 0){
        if ($sqaroBigger >= $squaroSmaller){
            if ($sqaroBigger != $squaroSmaller){
                echo "В квадрате c площадью " . $sqaroBigger . " поместится квадрат площадью " . $squaroSmaller . " - " . $sqaroBigger / $squaroSmaller . " раз(a)", "\n";
            } else {
                echo "В квадрате c площадью " . $sqaroBigger . " поместится квадрат площадью " . $squaroSmaller . " - 1 раз", "\n";
                return null;
            }
        } else {
            echo "Квадрат с площадью " . $sqaroBigger .  " меньше, чем квадрат с площадью " . $squaroSmaller , "\n";
            return null;
        }

    } else {
        echo "ОШИБКА: Площадь квадрата не может быть < 1", "\n";
        return null;
    }
    return null;
}


