<?php
echo "<h4>Задание#3</h4>";

$age = 55;

if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17){
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}

echo '<br><a href="task4.php">Задание4</a>';
