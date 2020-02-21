<?php
echo "<h4>Задание#6</h4>";

echo "<table>";
for($i=1; $i<=10; $i++){
    echo "<tr>";
        for($j=1; $j<=10; $j++){
            if ($i % 2 == 0 && $j % 2 == 0) {
                echo "<td> (" . $i * $j  .") </td>";
            } elseif ($i % 2 != 0 && $j % 2 != 0) {
                echo "<td> [" . $i * $j  ."] </td>";
            }
            else {
                echo "<td>" .$i*$j  ."</td>";
            }
            
        }
    echo "</tr>";    
}
echo "</table>";