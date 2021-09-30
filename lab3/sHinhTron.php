<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh chu vi vs dien tich hinh tron</title>
</head>

<body>
    <?php
        define("PI", 3.14);

        $banKinhTron = isset($_POST['banKinhTron']) ? trim($_POST['banKinhTron']) : 0;
        $dienTichTron = 0;
        $chuViTron = 0;

        if (isset($_POST['tinh'])) {
            if (is_numeric($banKinhTron) && $banKinhTron > 0) {
                $chuViTron = 2 * PI * $banKinhTron;
                $dienTichTron = PI * pow($banKinhTron, 2);
            } else{
                echo "<p style='color:red;display: flex; justify-content: center;'>
                        Vui lòng nhập vào số và lớn hơn không!
                    </p>";
                $dientich="";
            }
        } else $dientich=0; 
    
    ?>

    <form align='center' action="sHinhTron.php" method="POST">
        <table border="0" style="font-size:22px; width:60%; margin:auto; border: 1px solid black;">
            <tr bgcolor="yellow">
                <th colspan="2" align="center">
                    <h3>
                        <font color="red">DIỆN TÍCH & CHU VI HÌNH TRÒN</font>
                    </h3>
                </th>
            </tr>
            <tr>
                <td>Bán kính:</td>
                <td><input type="text" name="banKinhTron" value="<?php echo $banKinhTron;?>" /></td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input type="text" name="chuViTron" disabled="disabled"
                    value="<?php echo number_format($chuViTron, 2, ',', ' ');?>" /></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dienTichTron" disabled="disabled"
                        value="<?php echo number_format($dienTichTron, 2, ',', ' ');?> " /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>
        </table>
    </form>
</body>

</html>