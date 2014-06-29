<!--mid幻灯-->
<div class="slide_show_big">

    <?php foreach( $banners as $banner ){ ?>
    <a href="<?php echo $banner['link'];?>" target="_blank">
        <img src="<?php echo $banner['image'];?>"
             width="590" height="280" alt="<?php echo $banner['title']; ?>" /></a>
    <?php } ?>

</div>