<?php
const COUNT_NUMBER = 100;
const PATH_TO_FILE = 'numbers.csv';


function createFileWithRandomNumbers()
{
    if (file_exists(PATH_TO_FILE)) unlink(PATH_TO_FILE);
    $fp = fopen(PATH_TO_FILE, 'a+');

    $randomNumbers = [];
    for ($i = 0; $i < COUNT_NUMBER; $i++) {
        $randomNumbers[] = rand(1, 100);
    }
    fwrite($fp, implode(',', $randomNumbers));
    fclose($fp);
}

function sortNumber()
{
    $numbers = file_get_contents(PATH_TO_FILE);
    $numbersArr = explode(',', $numbers);
    asort($numbersArr);
    echo '<pre>';
    print_r($numbersArr);
    echo '</pre>';
}


function erectInPower($number, $power)
{
    $temp = $number;
    for ($i = 1; $i < $power; $i++)
        $number *= $temp;
    echo $number;
}


function isPalindrom($phrase)
{
    $result = "";
    $temp = strtolower($phrase);
    $revers = strrev($temp);
    $revers == $temp ? $result = " - это фраза палиндром" : $result = " - эта фраза не палиндром";
    echo ($phrase . $result);
}

function htmlForReturnBack()
{
    echo ('<br><a href="/index.php">Назад</a>');
}
