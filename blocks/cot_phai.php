<!-- box cat -->
<?php
    $idlt=5;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin($idlt)?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <?php
                    $tinmoinhatLT = TinMoiNhat_TheoLoaiTin_MotTin($idlt);
                    $row_tinmoinhatLT = mysqli_fetch_array($tinmoinhatLT, MYSQLI_ASSOC);
                ?>
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhatLT['idTin']?>"><?php echo $row_tinmoinhatLT['TieuDe']?></a></h3>
                <a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhatLT['idTin']?>"><img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhatLT['urlHinh']?>" align="left" /></a>
                    <div class="des"><?php echo $row_tinmoinhatLT['TomTat']?></div>
                  
                  
                    <div class="clear"></div>
				</div>
            </div>
            <div class="col2">
                <?php
                    $tinmoinhatLT_4t = TinMoiNhat_TheoLoaiTin_BonTin($idlt);
                    while ($row_tinmoinhatLT_4t = mysqli_fetch_array($tinmoinhatLT_4t, MYSQLI_ASSOC)) {
                ?>
                <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhatLT_4t['idTin']?>"><?php echo $row_tinmoinhatLT_4t['TieuDe']?></a></h3>
                <?php
                    }
                ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<!-- box cat -->
<?php
    $idlt=3;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin($idlt)?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <?php
                    $tinmoinhatLT = TinMoiNhat_TheoLoaiTin_MotTin($idlt);
                    $row_tinmoinhatLT = mysqli_fetch_array($tinmoinhatLT, MYSQLI_ASSOC);
                ?>
                <h3 class="title" ><a href="#"><?php echo $row_tinmoinhatLT['TieuDe']?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhatLT['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhatLT['TomTat']?></div>
                  
                  
                    <div class="clear"></div>
				</div>
            </div>
            <div class="col2">
                <?php
                    $tinmoinhatLT_4t = TinMoiNhat_TheoLoaiTin_BonTin($idlt);
                    while ($row_tinmoinhatLT_4t = mysqli_fetch_array($tinmoinhatLT_4t, MYSQLI_ASSOC)) {
                ?>
                <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhatLT_4t['idTin']?>"><?php echo $row_tinmoinhatLT_4t['TieuDe']?></a></h3>
                <?php
                    }
                ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->