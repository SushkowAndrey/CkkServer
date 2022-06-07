<?php
echo "Урок 1<br>";

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

<?php
echo "Урок 2<br>";

echo "Задание 1<br>";
?>
<form action="">
    <input type="text" name="name">
    <button type="submit" name="submit">Отправить</button>
</form>
<br>
<?php if (isset($_GET['submit'])) : ?>
    <p><?php echo $_GET['name'] ?></p>
<?php endif; ?>

<?php
echo "Задание 2<br>";
$countries = [];
$sourceCountries = ['Россия', 'Беларусь', 'Турция'];
if (isset($_GET['submit'])) {

    $newCountries = [];
    $query = $_GET['query'];

    foreach ($sourceCountries as $country) {
        if (mb_strripos($country, $query) !== false) {

            $strToArr = preg_split('//u', $country, -1, PREG_SPLIT_NO_EMPTY);

            $start = mb_strripos($country, $query);
            $end = $start + mb_strlen($query);

            $countryStr = '';
            foreach ($strToArr as $key => $letter) {
                if ($key >= $start && $key < $end) {
                    $countryStr .= '<b style="color:red;">' . $letter . '</b>';
                } else {
                    $countryStr .= $letter;
                }
            }

            $newCountries[] = $countryStr;
        } else {
            $newCountries[] = $country;
        }
    }
    $countries = $newCountries;
} else {
    $countries = $sourceCountries;
}
?>
<form action="">
<input type="text" name="query" placeholder="Что ищем?">
<button type="submit" name="submit">Найти</button>
</form>
<ul>
    <?php foreach ($countries as $country) : ?>
        <li><?php echo $country ?></li>
    <?php endforeach; ?>
</ul>


