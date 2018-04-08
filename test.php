<?php
require 'lib/dbCon.php';
require 'lib/trangchu.php';
echo 1;
$result = TinMoiNhat_MotTin();
$tinmoinhat_mottin = TinMoiNhat_MotTin();
$row_tinmoinhat_mottin = mysqli_fetch_array($tinmoinhat_mottin, MYSQLI_ASSOC);
echo $row_tinmoinhat_mottin['urlHinh'];
echo 2;
?>
