<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh S HCN</title>
</head>

<body>
    <?php

        $chieudai = isset($_POST['chieudai']) ? trim($_POST['chieudai']) : 0;
        $chieurong = isset($_POST['chieurong']) ? trim($_POST['chieurong']) : 0;
        $sHCN = 0;

        if(isset($_POST["tinh"])) {
            if (is_numeric($chieudai) && is_numeric($chieurong))
                $sHCN = $chieudai * $chieurong;
            else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>";
                $dientich="";
            }
        }
        else $dientich=0; 
    ?>

    <form align='center' action="formBaiTap1.php" method="POST">
        <table border="0" style="font-size:22px; width:60%; margin:auto; border: 1px solid black;">
            <tr bgcolor="yellow">
                <th colspan="2" align="center">
                    <h3>
                        <font color="red">DIỆN TÍCH HÌNH CHỮ NHẬT</font>
                    </h3>
                </th>
            </tr>
            <tr>
                <td>Chiều dài:</td>
                <td><input type="text" name="chieudai" value="<?php echo $chieudai;?>" /></td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td><input type="text" name="chieurong" value="<?php echo $chieurong;?>" /></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dientich" disabled="disabled"
                        value="<?php echo number_format($sHCN, 2, ',', ' ');?> " /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>
        </table>
    </form>
</body>

</html>