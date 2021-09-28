<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh tien dien</title>
</head>

<body>
    <?php 
        $tenchuho = isset($_POST['tenchuho']) ? trim($_POST['tenchuho']) : '';
        $chisocu = isset($_POST['chisocu']) ? trim($_POST['chisocu']) : '';
        $chisomoi = isset($_POST['chisomoi']) ? trim($_POST['chisomoi']) : '';
        $dongia = isset($_POST['dongia']) ? trim($_POST['dongia']) : 20000;
        $sotien = '';
        if(isset($_POST['tinh']))
            if (($chisomoi >= $chisocu)&&($chisocu > 0)&&($chisomoi > 0)) {
                $sotien = ($chisomoi - $chisocu) * $dongia;
            }
            else {
                echo "<font color='red'>Vui lòng chỉ số mới dương lớn hơn hoặc bằng chỉ số cũ dương</font>";
            }
    ?>

    <form name="tien_dien" align='center' action="formBaiTap2.php" method="POST">
        <table border="0" style="font-size: 22px; width:60%; margin:auto; border: 1px solid black;">
            <tr bgcolor="yellow">
                <th colspan="2" align="center">
                    <h3>
                        <font color="red">THANH TOÁN TIỀN ĐIỆN</font>
                    </h3>
                </th>
            </tr>
            <tr>
                <td>Tên chủ hộ: </td>
                <td><input type="text" name="tenchuho" value="<?php echo $tenchuho;?> " /></td>
            </tr>
            <tr>
                <td>Chỉ số cũ: </td>
                <td><input type="number" name="chisocu" value="<?php echo $chisocu;?> " /></td>
            </tr>
            <tr>
                <td>Chỉ số mới: </td>
                <td><input type="number" name="chisomoi" value="<?php echo $chisomoi;?> " /></td>
            </tr>
            <tr>
                <td>Đơn giá: </td>
                <td><input type="number" name="dongia" value="<?php echo $dongia;?>" /></td>
            </tr>
            <tr>
                <td>Thành tiền: </td>
                <td><input type="text" name="sotien" disabled="disabled" value="<?php echo $sotien;?> " /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>
        </table>
    </form>
</body>

</html>