<?php

    echo "giai 8: ";
    $randNum = rand(0,99);
    if($randNum < 10){
        echo "0".$randNum;
    } else echo $randNum;
    
    echo "<br>";

    echo "giai 7: ";
    $randNum = rand(0,999);
    if($randNum < 10){
        echo "00".$randNum;
    } else echo $randNum;

    echo "<br>";

    echo "giai 6: ";
    for ($i = 0; $i < 3; $i++){
        $randNum = rand(0,9999);
        if($randNum < 100){
            echo "00".$randNum. "-";
        } else echo $randNum." - ";
    }

    // $giai8 = rand(00,99);
    // $giai7 = rand(000,999);
    // $giai65 = rand(0000,9999);
    // $giai41 = rand(00000,99999);
    // $giaiDB = rand(000000,999999);

    // for () {

    // }

    // echo "Giai 8 là: ".$giai8;
?>