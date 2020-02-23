<?php
echo "<h4>Задание#6</h4>";

echo "<table>";
for($row = 1; $row <= 10; $row ++){
    echo "<tr>";
        for($col = 1; $col <=10; $col ++){
            $res = $row * $col;

            if ($row % 2 == 0 && $col % 2 == 0) {
                echo "<td> (" . $res .") </td>";
            } elseif ($row % 2 != 0 && $col % 2 != 0) {
                echo "<td> [" . $res  ."] </td>";
            } else {
                echo "<td>" . $res ."</td>";
            }
        }
    echo "</tr>";    
}
echo "</table>";