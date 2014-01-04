<div class='row'>
    <div class='large-8 columns'>
        <!-- 博客列表 -->
        <ol class='blog-list btm-line'>
            <?php if( !empty($posts) ){ ?>
            <?php foreach( $posts as $k=>$post ){ ?>
            <li <?php if($k == 0){ ?> class='first' <?php } ?> >
            <?php if($k == 0 && isset($post['image_url'])){ ?>
                    <a href="/blog/index.php?p=<?php echo $post['ID']; ?>">
                        <img src="<?php echo UPLOAD_FILE . $post['image_url']; ?>" />
                    </a>
                    <h4><?php echo $post['post_title']; ?></h4>
                    <p><?php echo date('M d Y',strtotime($post['post_modified']));?></p>
                    <div class='clear'></div>
            <?php }else{ ?>
                    <a href="/blog/index.php?p=<?php echo $post['ID']; ?>"><?php echo $post['post_title']; ?></a>
            <?php }?>
            </li>
            <?php } ?>
            <?php } ?>
        </ol>
        <dl class="sub-nav" style='display:none'>
            <dt>Filter:</dt>
            <dd class="active"><a href="#">More</a></dd>
            <dd><a href="#">NewsNews</a></dd>
            <dd><a href="#">PhotosNews</a></dd>
            <dd><a href="#">Videos</a></dd>
        </dl>
        <div class='clear'></div>
        <!-- 项目展示 -->
        <ul class='img-queue inline-list btm-line' >

            <?php if(!empty($projects)){ ?>
            <?php foreach($projects as $p){ ?>
            <li>

                <a
                <?php if(!empty($p['link'])){ ?>
                    href="<?php echo $p['link'];?>"
                <?php }else{ ?>
                    href="index.php?r=project/project&id=<?php echo $p['project_id']; ?>"
                <?php }?>
>
                    <img src="/blog/wp-content/uploads/<?php echo $p['iamge_url']; ?>" width="160" height="120" />
                </a>
                <p><a
                        <?php if(!empty($p['link'])){ ?>
                        href="<?php echo $p['link'];?>"
                    <?php }else{ ?>
                        href="index.php?r=project/project&id=<?php echo $p['project_id']; ?>"
                    <?php }?>
                        ><?php echo $p['name']; ?></a></p>
            </li>
            <?php }?>
            <?php }?>
        </ul>
        <div class='clear'></div>

        <!-- 前端js作品展示 -->
        <ul class='img-queue inline-list' >
            <?php if(!empty($apps)){ ?>
            <?php foreach($apps as $app){ ?>
                    <li>
                        <a href="<?php echo $app['link']; ?>">
                            <img src="/blog/wp-content/uploads/<?php echo $app['image_url'];?>"
                                 width="160" height="120" >
                        </a>
                        <p><?php echo $app['description']; ?></p>
                    </li>
            <?php }?>
            <?php }?>

        </ul>
        <div class='clear'></div>
    </div>
    <div class='right-win large-4 columns left-line '>

        <!-- 广告位 -->
        <div>

        </div>
        <!-- 可信任站点登陆 -->
        <div class='connect-links btm-line'>
            <h3>可用以下站点账号登陆</h3>
            <ul class='inline-list '>
                <li>
                    <a href=''><img src='http://images.nationalgeographic.com/wpf/sites/common/i/icons/fb_cng-cb1315395346.png' /></a>
                </li>
                <li>
                    <a href=''><img src='http://images.nationalgeographic.com/wpf/sites/common/i/icons/twitter_cng-cb1315395346.png' /></a>
                </li>
                <li>
                    <a href=''><img src='http://images.nationalgeographic.com/wpf/sites/common/i/icons/fb_cng-cb1315395346.png' /></a>
                </li>
                <li>
                    <a href=''><img src='http://images.nationalgeographic.com/wpf/sites/common/i/icons/twitter_cng-cb1315395346.png' /></a>
                </li>
            </ul>
        </div>
        <!-- News Watch Blog -->
        <div class='news btm-line'>
            <h3>News Watch Blog </h3>
            <ol>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
            </ol>
        </div>
    </div>
</div>
