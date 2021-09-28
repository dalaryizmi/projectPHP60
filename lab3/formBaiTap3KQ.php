<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuc hien phep tinh</title>
</head>

<body>
    <?php
        $sothunhat = $_REQUEST["sothunhat"];
        $sothuhai = $_REQUEST["sothuhai"];
        $pheptinh = $_REQUEST["pheptinh"];
        switch ($pheptinh) {
            case 'add':
                $ketqua = $sothunhat + $sothuhai;
                $pheptinh = "Cộng";
                break;
            case 'min':
                $ketqua = $sothunhat - $sothuhai;
                $pheptinh = "Trừ";
                break;
            case 'mul':
                $ketqua = $sothunhat * $sothuhai;
                $pheptinh = "Nhân";
                break;
            case 'div':
                if ($sothuhai == 0)
                    $ketqua = "Không chia được cho 0";
                else
                    $ketqua = $sothunhat / $sothuhai;
                $pheptinh = "Chia";
                break;
            }
        ?>

    <form id="phep_tinh_kq" align='center' action="form-bai_tap_6_kq.php" method="POST">
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
                <td>
                    <?php echo $pheptinh;?>
                </td>
            </tr>
            <tr>
                <td>Số thứ nhất: </td>
                <td><input type="number" name="sothunhat" disabled value="<?php echo $sothunhat;?>" /></td>
            </tr>
            <tr>
                <td>Số thứ hai: </td>
                <td><input type="number" name="sothuhai" disabled value="<?php echo $sothuhai;?>" /></td>
            </tr>
            <tr>
                <td>Kết quả: </td>
                <td><input type="text" name="ketqua" disabled value="<?php echo $ketqua;?>" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
            </tr>
        </table>
    </form>
</body>

</html>