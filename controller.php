<?php

require_once 'function.php';

switch ($_GET['task']) {
    case '1':
        createFileWithRandomNumbers();
        echo 'Успешно';
        htmlForReturnBack();
        break;
    case '2':
        sortNumber();
        htmlForReturnBack();
        break;
    case '3':
        erectInPower($_GET['number'], $_GET['power']);
        htmlForReturnBack();
        break;
    case '4':
        isPalindrom($_GET['phrase']);
        htmlForReturnBack();
        break;

    default:
        echo ('Ошибка');
        htmlForReturnBack();
        break;
}
