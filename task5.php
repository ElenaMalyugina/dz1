<?php
echo "<h4>Задание#5</h4>";

$bmv = ['model'=>'X5', 'speed'=>120, 'doors'=>5, 'year'=>'2015'];
$toyota = ['model'=>'X4', 'speed'=>110, 'doors'=>4, 'year'=>'2015'];
$opel = ['model'=>'X3', 'speed'=>100, 'doors'=>3, 'year'=>'2014'];

$cars = ['BMV'=>$bmv, 'Opel'=>$opel, 'Toyota'=>$toyota];

foreach($cars as $car => $carProps){
    echo "Car " . $car . "<br>";
    echo $carProps['model'] . ' ' .$carProps['speed'] . ' ' .$carProps['doors'] .' ' .$carProps['year'];
    echo "<br><br>";
}

echo '<a href="task6.php">Задание6</a>';