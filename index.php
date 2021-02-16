<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание</title>
</head>

<body>
    <label for="formForTask1">Первое задание</label>
    <form id="formForTask1" action="controller.php" method="get">
        <button type="submit">Сгенерировать файл с числами</button>
        <input type="hidden" value="1" name="task">
    </form>

    <label for="formForTask2">Второе задание</label>
    <form id="formForTask2" action="controller.php" method="get">
        <button type="submit">Отсортировать и вывести числа из файла</button>
        <input type="hidden" value="2" name="task">
    </form>

    <label for="formForTask3">Третье задание</label>
    <form id="formForTask3" action="controller.php" method="get">
        <input type="number" min="1" max="10" placeholder="Число" name="number">
        <input type="number" min="0" max="9" placeholder="Степень" name="power">
        <button type="submit">Возвести в степень число</button>
        <input type="hidden" value="3" name="task">
    </form>

    <label for="formForTask4">Четвертое задание</label>
    <form id="formForTask4" action="controller.php" method="get">
        <input type="text" placeholder="Фраза" name="phrase">
        <button type="submit">Это палиндром?</button>
        <input type="hidden" value="4" name="task">
    </form>
</body>

</html>