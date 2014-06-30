
<!--
<div class="box">
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="box-content">
    <ul>
      <?php foreach ($informations as $information) { ?>
      <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
      <?php } ?>
      <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
      <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
    </ul>
  </div>
</div>

-->

<div class="news_top">
    <div class="news_top_biao">
        <!--<a href="#">更多>></a>-->
        公告资讯</div>
    <ul>
        <?php foreach($informations as $info){ ?>
        <li><a href="<?php echo $info['href'];?>" target="_blank"><?php echo $info['title'];?></a></li>
        <?php } ?>
    </ul>
</div>
