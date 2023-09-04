<?php
echo "Введіть ваше ім'я" . PHP_EOL;
$yourName = fgets(STDIN);


echo "Привіт $yourName \nДавай протестуємо наш калькулятор)))" . PHP_EOL . PHP_EOL;

echo 'Введіть перше значення' . PHP_EOL;
$firstVal = fgets(STDIN);

echo 'Введіть друге значення' . PHP_EOL;
$secondtVal = fgets(STDIN);

echo 'Введіть математичний символ'. PHP_EOL;
$symbol = fgetc(STDIN);
$nameSymbol = "";
$result = 0;

if($symbol == "+"){
    $result = $firstVal + $secondtVal;
    $nameSymbol = "Сума";
} 
elseif ($symbol == "-"){
    $result = $firstVal - $secondtVal;
    $nameSymbol = "Різниця";
}
elseif ($symbol == "/"){
    $result = $firstVal / $secondtVal;
    $nameSymbol = "Частка";
} 
elseif ($symbol == "*"){
    $result = $firstVal * $secondtVal;
    $nameSymbol = "Добуток";
}

echo "$nameSymbol чисел $result" . PHP_EOL;


$arithmeticMean = ($firstVal + $secondtVal)/2;
echo "Середне арифметичне чисел $arithmeticMean" . PHP_EOL;