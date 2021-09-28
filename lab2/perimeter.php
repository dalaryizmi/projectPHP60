<?php
    define("PI", 3.14);
    $perimeter;
    $area;

    $a = rand(1,4);
    echo "số a là: $a <br>";

    $b = rand(10,100);
    echo "số b là: $b <br>";

    switch($a) {
        case 1:
            $perimeter = $b * 4;
            $area = $b * $b;
            break;
        case 2: 
            $perimeter = 2 * PI * $b;
            $area = $b * $b * PI;
            break;
        case 3:  
            $perimeter = $b * 3;
            $area = $b * $b * (sqrt(3)/4);
            break;
        case 4: 
            $perimeter = ($a + $b) * 2;
            $area = $a * $b;
            break;
    }
    echo "Chu Vi la: $perimeter <br>";
    echo "Dien tich la: $area";
?>