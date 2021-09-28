<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuc hien phep tinh</title>
</head>

<body>
    <form name="phep_tinh" align='center' action="formBaiTap3KQ.php" method="POST">
        <table border="0" style="font-size:22px; width:60%; margin:auto; border: 1px solid black;">
            <tr bgcolor="pink">
                <th colspan="2" align="center">
                    <h3>
                        <font color="red">PHÉP TÍNH TRÊN HAI SỐ</font>
                    </h3>
                </th>
            </tr>
            <tr>
                <td>Chọn phép tính: </td>
                <td style="display: flex; justify-content: space-evenly; align-items: center;">
                    <input type="radio" name="pheptinh" value="add" checked/> Cộng
                    <input type="radio" name="pheptinh" value="min" /> Trừ
                    <input type="radio" name="pheptinh" value="mul" /> Nhân
                    <input type="radio" name="pheptinh" value="div" /> Chia
                </td>
            </tr>
            <tr>
                <td>Số thứ nhất: </td>
                <td><input type="number" name="sothunhat" value="<?php echo $sothunhat;?>" required /></td>
            </tr>
            <tr>
                <td>Số thứ hai: </td>
                <td><input type="number" name="sothuhai" value="<?php echo $sothuhai;?>" required/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>
        </table>
    </form>
</body>

</html>