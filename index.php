<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> Это мой первый файл на PHP!</h1>
<!--------------Начало формы ------------------------------->
<form id="someForm" action="index.php" method="get">

    <!-------------- Поле Имя (string) -------------------------------->
    <label for="fname">Имя</label>
    <input type="text" name="fname"> </br>
    <!-------------- ./ Поле Имя (string) ----------------------------->

    <!-------------- Поле Фамилия  (string) --------------------------->
    <label for="lname">Фамилия</label>
    <input type="text" name="lname"></br>
    <!-------------- ./ Поле Фамилия (string) ------------------------->

    <!-------------- Поле Отчество (string) --------------------------->
    <label for="sname">Отчетво</label>
    <input type="text" name="sname"></br>
    <!-------------- ./ Поле Отчество (string) ------------------------>

    <!-------------- Поле Страна (string/cписок) ---------------------->
    <label for="country">Страна</label>
    <select name="country">
        <option>Россия</option>
        <option>Франция</option>
        <option>Италия</option>
    </select></br>
    <!-------------- ./Поле Страна (string) --------------------------->

    <!-------------- Поле Возраст (int/переключатель ) ---------------->
    <label for="age">Возраст</label>
    <input type="radio" name="age" value="10"> До 10 лет </br>
    <input type="radio" name="age" value="30"> От 10 до 30 лет </br>
    <input type="radio" name="age" value="50"> От 30 до 50 лет </br>
    <input type="radio" name="age" value="100"> От 50 лет</br>
    <!-------------- ./Поле Возраст (int/переключатель ) -------------->

    <!-------------- Кнопка отправки формы ---------------------------->
    <button type="submit">Запустить PHP!</button>
    <!------------- ./Кнопка отправки формы ---------------------------->

</form>
<!-------------- ./Начало формы ------------------------------->

</body>
</html>

<?php
/**
 * Магия, не трогать!
 * На самом деле используется Хелпер бибилиотеки Yii2 переписанный для занятия
 */
include 'lib/VarDump.php';

/**
 * Примеры использования метода VarDump
 * Для просмотра масиивов
 * Вместо $_POST или $_GET можно использовать любую переменную
 */

# VarDump::dump($_POST,10,true); // Пример с переменной $_GET
# VarDump::dump($_GET,10,true); // Пример с переменной $_POST

/**
 * Пример обращение к переменной без функции
 */
if ($_GET & $_GET["age"] > 40) {
    echo "Вам больше 40 лет! Вы молодец!!!";
}

/**
 * @param $fname
 * @param $lname
 * @param $sname
 * @return string
 * Пример использования функций
 */
function getFullName($fname, $lname, $sname)
{
    return $fname . ' ' . $lname . ' ' . $sname;
}
echo "<h2>2. Пример с использванием функции getFullName() </h2>";
echo getFullName($_GET["fname"], $_GET["lname"], $_GET["sname"]);

/**
 * Пример с выводом текста в зависимости от парамтера
 */
echo "<h2>3. Пример с выводом текста в зависимости от парамтера</h2>";
if (!empty($_GET["fname"])) {
    echo "<h3>Привет, " . $_GET["fname"]. " !!! </h3>";
}
?>

<?php
/**
 * Пример вставки PHP Кода
 */
?>

<? if ($_GET["fname"] & $_GET["lname"] & $_GET["sname"]): ?>
    <h2>4. Пример использования PHP кода в HTML </h2>
    <p> Вызываем функцию getFullName() </p>
    <?= getFullName($_GET["fname"], $_GET["lname"], $_GET["sname"]) ?>
<? endif; ?>
