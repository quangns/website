<?php
    $quangcao = QuangCao(1);
    while($row_quangcao = mysqli_fetch_array($quangcao, MYSQLI_ASSOC)) {
?>
<a href="<?php echo $row_quangcao['Url']?>">
<img width="280" src="images/<?php echo $row_quangcao['urlHinh']?>" /> </a>
<div style="height:10px"></div>
<?php
    }
?>