<?php 
    $randNumber = rand(1,10);
    echo "Bảng cửu chương ". $randNumber . "<br>";
    for($i = 1; $i < 11; $i++){
        echo "$randNumber x $i = " . $randNumber * $i;
        echo "<br>";
    }
?>