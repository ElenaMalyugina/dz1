<?php
echo "<h4>Задание#2</h4>";

const COUNT_PICTURES = 80;
const COUNT_MARKER_PICTURES = 20;
const COUNT_PENCIL_PICTURES = 40;
const COUNT_PAINT_PICTURES = COUNT_PICTURES - COUNT_MARKER_PICTURES - COUNT_PENCIL_PICTURES;

echo "Всего рисунков - " . COUNT_PICTURES ."<br>";
echo "Фломастерами - " . COUNT_MARKER_PICTURES ."<br>";
echo "Карандашами - " . COUNT_PENCIL_PICTURES ."<br>";
echo "Красками - " . COUNT_PAINT_PICTURES ."<br>";

echo '<a href="task3.php">Задание3</a>';