<?php
/*Урок 1*/
echo "Задание 1<br>";
$name = "My name is Андрей<br>";
echo $name;

echo "Задание 2<br>";
$name = "I’m 30<br>";
echo $name;

echo "Задание 3<br>";
$parA = 3;
$parB = 4;
$res = $parA  + $parB;
echo "Результат расчета a'+'b'='rez равен ". $res . "<br>";

echo "Задание 4<br>";
$a = 5;
$b = 6;
echo $a . ',' . $b . "<br>";
list($a, $b) = array($b, $a);
echo $a . ',' . $b . "<br>";

echo "Задание 5<br>";
?>

<form action="">
    <h4>Вопрос с одним вариантом ответа</h4>
    <input type="radio" name="q1" value="1">
    <label for="">Вариант 1</label>
    <input type="radio" name="q1" value="2">
    <label for="">Вариант 2</label>
    <input type="radio" name="q1" value="3">
    <label for="">Вариант 3</label>
    <hr>
    <h4>Вопрос с множественным вариантом ответа</h4>
    <input type="checkbox" name="q2" value="1">
    <label for="">Вариант 1</label>
    <input type="checkbox" name="q2" value="2">
    <label for="">Вариант 2</label>
    <hr>
    <h4>Вопрос с вводом ответа</h4>
    <input type="text" name="q3">
    <input type="submit" name="submit" value="Отправить">

</form>