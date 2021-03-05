<?php
date_default_timezone_set('Europe/Minsk');
// Задание 1 - capitalize
$task1 = ucwords('london is the capital of great britain');
echo '<h2>Задание 1</h2>';
echo $task1;
echo '<hr/>';

// Задание 2 - Дана строка 'html <b>css</b> php'. Удалите теги из этой строки. С
// помощью функции explode запишите каждое слово этой строки в отдельный
// элемент массива.
$task2 = strip_tags('html <b>css</b> php');
$task2 = explode(' ',$task2);
echo '<h2>Задание 2</h2>';
prent($task2);
echo '<hr/>';

// Задание 3 - Дана строка. Перемешайте символы этой строки в случайном порядке.
$task3 = str_shuffle('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, deleniti.');
echo '<h2>Задание 3</h2>';
echo $task3;
echo '<hr/>';

// Задание 4 - Найдите количество дней в текущем месяце. Скрипт должен работать
// независимо от месяца, в котором он запущен.
$task4 = getdate();
$task4 = cal_days_in_month(CAL_GREGORIAN, $task4['mon'], $task4['year']);
echo '<h2>Задание 4</h2>';
echo 'Количество дней в текущем месяце: ' . $task4;
echo '<hr/>';

// Задание 5 - Выведите текущую дату-время в форматах
//'2025-12-31', '31.12.2025', '31.12.13', '12:59:59', timestamp.
echo '<h2>Задание 5</h2>';
echo date('Y-m-d') . '<br />';
echo date('d.m.Y') . '<br />';
echo date('d.m.y') . '<br />';
echo date('H:i:s') . '<br />';
echo date('U');
echo '<hr/>';

// Задание 6 - В переменной $date лежит дата в формате '2025-12-31'. Прибавьте к этой
//дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.
echo '<h2>Задание 6</h2>';
$date = '2025-12-31';
$task6_1 = getdate(strtotime("$date+2day"));
echo "{$task6_1['year']} - {$task6_1['mon']} - {$task6_1['mday']}<br />";
$task6_2 = getdate(strtotime("$date+3day+1month"));
echo "{$task6_2['year']} - {$task6_2['mon']} - {$task6_2['mday']}<br />";
$task6_3 = getdate(strtotime("$date+1year"));
echo "{$task6_3['year']} - {$task6_3['mon']} - {$task6_3['mday']}<br />";
$task6_4 = getdate(strtotime("$date-3day"));
echo "{$task6_4['year']} - {$task6_4['mon']} - {$task6_4['mday']}<br />";
echo '<hr/>';

// Задание 7 - Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.
//Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.
echo '<h2>Задание 7</h2>';
$regexp = '\d';
$task7 = '1a2b3c4b5d6e7f8g9h0';
echo mb_ereg_replace($regexp,'',$task7);
echo '<hr />';

// Задание 8 - Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное
//число.
echo '<h2>Задание 8</h2>';
$arTask8 = [4, -2, 5, 19, -130, 0, 10];
echo 'Минимальное: ' . min($arTask8) . '<br />';
echo 'Максимальное: ' . max($arTask8) . '<br />';
echo '<hr />';

// Задание 9 - Выведите на экран случайное число от 1 до 100
echo '<h2>Задание 9</h2>';
echo 'Случайное число от 1 до 100: ' . rand(1,100);
echo '<hr />';

// Задание 10 - Создайте ассоциативный массив дней недели. Ключами в нем должны
//служить номера дней от начала недели (понедельник - должен иметь ключ 1,
//вторник - 2 и т.д.). Выведите на экран текущий день недели.
echo '<h2>Задание 10</h2>';
$task10 = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'];
$today = getdate();
echo $task10[$today['wday']];
echo '<hr />';

// Задание 11 - Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]].
//Найдите сумму элементов этого массива. Массив, конечно же, может быть
//произвольным.
function get_recursive_array_sum ($arr) {
    return array_reduce($arr, function ($acc, $item) {
        if (is_array($item)) {
            return $acc + get_recursive_array_sum($item);
        } else {
            return $acc + $item;
        }
    });
}

echo '<h2>Задание 11</h2>';
$arTask11 = [[1, 2, 3, [1, 1, [1, 1]]], [4, 5], [6], 7, 8, [10, 11]];
echo 'Сумма элементов массива: ' . get_recursive_array_sum($arTask11);
echo '<hr />';

// Задание 12 - Есть массив $array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3, то
// есть вывести без дублей при помощи лишь одного цикла и без использования
// функций PHP.
echo '<h2>Задание 12</h2>';
$arTask12 = [1, 1, 1, 2, 2, 2, 3];
$arTask12result = [];
for ($i = 0; $i < count($arTask12); $i++) {
    if (array_search($arTask12[$i], $arTask12result) === false) {
        $arTask12result[] = $arTask12[$i];
    }
}
echo implode(' ',$arTask12result);
echo '<hr />';

// Задание 13 - Используя ассоциативный массив, добавить на страницу навигационное меню
$task13 = ['index'=>'Home', 'about'=>'About', 'services'=>'Services', 'catalog'=>'Catalog', 'contacts'=>'Contacts'];
echo '<h2>Задание 13</h2>';
echo '<ul>';
foreach ($task13 as $href=>$title) :?>
<li><a href="<?= $href;?>>.php"><?= $title ?></a></li>
<?php endforeach;
echo '</ul>';
echo  '<hr />';

// Задание 14 - Вывести на черном фоне n красных квадратов случайного размера в
// случайной позиции в браузере.
echo '<h2>Задание 14</h2>';
$task14N = 15;
echo '<div style="position: relative; width: 600px; height: 400px; background-color: #000;">';
for ($i = 0; $i < 15; $i++) :
    $width = rand(5,50);
    $top = rand(0,400);
    $left = rand(0,600);
    $top = (($top + $width) > 400) ? ($top - $width) : $top;
    $left = (($left + $width) > 600) ? ($left - $width) : $left; ?>
    <div style="background-color: #f00; width: <?= $width ?>px; height: <?= $width ?>px; position: absolute; top: <?= $top ?>px; left: <?= $left ?>px;"></div>
<?php endfor;
echo '</div>';
echo '<hr />';

// Задание 15 - Дана строка с любыми символами. Для примера пусть будет '1234567890'.
//Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890')
//и так далее пока символы в строке не закончатся.
echo '<h2>Задание 15</h2>';
$task15 = '1234567890';
$task15res = [];
for ($i = 1; strlen($task15) > 0; $i++) {
    $task15res[] = substr($task15, 0, $i);
    $task15 = substr($task15, $i);
}
prent($task15res);
echo '<hr />';

//  Задание 16 - Найдите сумму элементов массива между двумя нулями (первым и
//последним нулями в массиве). Если двух нулей нет в массиве, то выведите
//ноль. В массиве может быть более 2х нулей. Пример массива:
//[48,9,0,4,21,2,1,0,8,84,76,8,4,13,2] или [1,8,0,13,76,8,7,0,22,0,2,3,2]
function sumBetween2Zeros ($arr) {
    $keys = array_keys($arr, 0);
    if (count($keys) <= 1) return 0;
    $start = $keys[0];
    $end = $keys[count($keys)-1];
    $arr = array_slice($arr, $start + 1, $end - $start - 1);
    return array_sum($arr);
}
echo '<h2>Задание 16</h2>';
$task16arr1 = [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2];
prent($task16arr1);
echo 'Сумма элементов между двумя нулями равна '. sumBetween2Zeros($task16arr1);
$task16arr2 = [1,8,0,13,76,8,7,0,22,0,2,3,2];
prent($task16arr2);
echo 'Сумма элементов между двумя нулями равна '. sumBetween2Zeros($task16arr2);
echo '<hr />';


// Задание 17 - Сделайте функцию, которая будет генерировать случайный цвет в hex
//(dechex) формате (типа #ffffff).
echo '<h2>Задание 17</h2>';
$task17 = '#';
for ($i = 0; $i < 6; $i++) {
    $task17 .= dechex(rand(0,15));
}
echo  $task17;
echo  '<hr />';

// Задание 18 - Дана строка '332 441 550'. Найдите все места, где есть два одинаковых
// идущих подряд цифры и замените их на '!'.
echo '<h2>Задание 18</h2>';
$task18 = '332 441 550';
echo mb_ereg_replace('00|11|22|33|44|55|66|77|88|99', '!', $task18);
echo  '<hr />';

// Задание 19 - Напишите ф-цию строгой проверки ввода номер телефона в
//международном формате
echo '<h2>Задание 19</h2>';
function checkPhone ($phone) {
    $regexp = '/^(?:\+?375|80)(?:33|44|29|25|17|21|16|23|15|22)\d{7}$/';
    return preg_match($regexp, $phone);
}
$arPhones = ['+375331234567', '+375115678965', '802354578128', '+745687215455', '80212458763'];
foreach ($arPhones as $phone) {
    $res = checkPhone($phone) ? 'Верно' : 'Неверно';
    echo "$phone - $res <br />";
}
echo '<hr />';

// Задание 20 - Проверка почты
echo '<h2>Задание 20</h2>';
function checkEmail ($email) {
    $regexp = '/^[A-Za-z]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+@[A-Za-z0-9]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+\.[A-Za-z]{2,11}$/i';
    return preg_match($regexp, $email);
}
$arEmails = ['nikeugene@mail.ru', 'nike_ugene@mail.ru', 'nikeugene@mail.r', '8nikeugene@mail.ru', 'nike__ugene@mail.ru', 'ni@keugene@mail.ru'];
foreach ($arEmails as $email) {
    $res = checkEmail($email) ? 'Верно' : 'Неверно';
    echo "$email - $res <br />";
}
echo '<hr />';






function prent ($str) {
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
}
?>
