<?php
      
    // Generating a random number from 10 to 1000
    $randomNumber = rand(10,1000);
      
    // echo($randomNumber);
    echo("- Số ngẫu nhiên là: $randomNumber <br>");

    //handle check number prime 
    function isPrimeNumber($randomNumber) {
        // if randomNumber < 2, it isn't primeNumber
        if ($randomNumber < 2) {
            return false;
        }
        // handle when randomNumer > 1
        $squareRoot = sqrt($randomNumber);
        for($i = 2; $i <= $squareRoot; $i ++) {
            if ($randomNumber % $i == 0) {
                return false;
            }
        }
        return true;
    }
     
    //a. Hiển thị các số nguyên tố nhỏ hơn số nguyên được tạo.
    echo ("- Các số nguyên tố nhỏ hơn $randomNumber là: <br>");
    for($i = 0; $i < $randomNumber; $i ++) {
        if (isPrimeNumber ( $i )) {
            echo ($i . " ");
        }
    }

    //b. Cho biết số nguyên này có bao nhiêu chữ số.
    echo "<br>- Số nguyên này có ";
    echo strlen($randomNumber); 
    echo " chữ số: ";

    //c. Cho biết chữ số lớn nhất trong số nguyên này.

    $stringNum = str_replace('\\', ' ', addcslashes((string)$randomNumber, '0..9'));

    //$stringNum = (string)$randomNumber;//ép kiểu
    //$stringNum2 = addcslashes($stringNum, '0..9');//tách chuổi
    //$stringNum3 = str_replace('\\', ' ', $stringNum2);//thay thế
    echo $stringNum;
    echo "<br>";
    
    $stringAray = explode(" ", $stringNum);//spilit array from string

    echo "- Chữ số lớn nhất là: ".(max($stringAray));//get biggest value in array

    //another idea: chia lấy số $randomNumber cho 10 -> số dư từng phần
    // là các phần từ cho mảng
    //vd: 234 %10 = 4 
    //push 4 into array
    //23 % 10 = 3 -> push 3 
    // 2 % 10 = 2 -> push 2 
    // array = [4, 3, 2] -> max(array) -> 4


?>