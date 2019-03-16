<?php
function matriz($matriz) {
    echo "PARES:<br>";
    for($i = 0; $i < 5; $i++) {
        for($j = 0; $j < 5; $j++) {
            echo ($matriz[$i][$j] % 2 == 0 ? $matriz[$i][$j] . " " : " x ");
        }
        echo "<br>";
    }

    echo "ÍMPARES:<br>";
    for($i = 0; $i < 5; $i++) {
        for($j = 0; $j < 5; $j++) {
            echo ($matriz[$i][$j] % 2 == 0 ? $matriz[$i][$j] . " " : "x ");
        }
        echo "<br>";
    }
}

matriz(array(
    array(1, 2, 3, 4, 5),
    array(6, 7, 8, 9 , 10),
    array(11, 12, 13, 14, 15),
    array(16, 17, 18, 19, 20),
    array(21, 22, 23, 24, 25)
));

?>
