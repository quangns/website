<?php
    require "../lib/quantri.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lap Trinh PHP - KhoaPhamTraining</title>
<link rel="stylesheet" type="text/css" href="../css/layoutadmin.css" />
</head>
<body>
<table>
    <tr>Danh sach tin</tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><a href="themtin.php">Them</a></td>
    </tr>
    <?php
        $tin = DanhSachTin();
        while($row_tin = mysqli_fetch_assoc($tin)) {
            ob_start();
    ?>
    <tr>
        <td>idTin:{idTin}<br/>{Ngay}</td>
        <td><a href="suaTin.php?idTin={idTin}">{TieuDe}</a> -<br/>
        <img style="float:left" src="../upload/tintuc/{urlHinh}" width="152px" height="96px"/>
        <span style="float: right, clear: left">{TomTat}</span></td>
        <td>{TenTL} -<br/>{Ten}</td>
        <td>So lan xem: {SoLanXem}<br/>{TinNoiBat}</td>
        <td><a href="suaTin.php?idTin={idTin}">Sua</a>-<br/><a href="xoaTin.php?idTin={idTin}">Xoa</a></td>
    </tr>
    <?php
        $s = ob_get_clean();
        $s = str_replace("{idTin}", $row_tin['idTin'], $s);
        $s = str_replace("{TieuDe}", $row_tin['TieuDe'], $s);
        $s = str_replace("{TomTat}", $row_tin['TomTat'], $s);
        $s = str_replace("{TenTL}", $row_tin['TenTL'], $s);
        $s = str_replace("{Ten}", $row_tin['Ten'], $s);
        $s = str_replace("{urlHinh}", $row_tin['urlHinh'], $s);
        $s = str_replace("{SoLanXem}", $row_tin['SoLanXem'], $s);
        $s = str_replace("{TinNoiBat}", $row_tin['TinNoiBat'], $s);
        echo $s;
        }
    ?>
</table>
</body>