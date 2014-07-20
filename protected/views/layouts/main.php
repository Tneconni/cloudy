<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <meta property="qc:admins" content="7567036575376616774710556375" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- foundation -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/foundation/css/foundation.min.css" rel="stylesheet" type="text/css" />
    <!-- 公共css -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" rel="stylesheet" type="text/css" />
    <!-- less 编译而成的css -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/index.css" rel="stylesheet" type="text/css" />


    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/global_nav.css" media="screen" rel="stylesheet" type="text/css" /><!-- Reset -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset-cb1274462936.css" media="screen" rel="stylesheet" type="text/css" /><!-- Reset -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen-cb1359557040.css" media="screen" rel="stylesheet" type="text/css" /><!-- Controls Top Hat Elements -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/utility-cb1363356033.css" media="screen" rel="stylesheet" type="text/css" /><!-- Controls Global Utility Elements -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen-cb1361987876.css" media="screen" rel="stylesheet" type="text/css" /><!-- Controls Global Site Elements -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jcarousel-cb1274471334.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/skin-cb1338468430.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/gallery.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- JS-enabled styles -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/js_enabled-cb1361987876.css" media="screen" rel="stylesheet" type="text/css" />

    <style type="text/css">@import url("css/screen-cb1317731845.css");</style>
    <style type="text/css">@import url("css/popquiz-cb1312282967.css");</style>

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/print-cb1274471335.css" media="print" rel="stylesheet" type="text/css" /><!-- Controls Global Site Elements -->

    <!-- qq login-->
    <script type="text/javascript"
            src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js"
            data-appid="101140571"
            data-redirecturi="http://tneconni.gotoip55.com"
            charset="utf-8"
            data-callback="true"
        ></script>

    <script src='<?php echo Yii::app()->request->baseUrl; ?>/js/'></script>
    <script src='<?php echo Yii::app()->request->baseUrl; ?>/js/jQuery/jQuery.1.10.2.js'></script>

    <script src='<?php echo Yii::app()->request->baseUrl; ?>/js/angular/angular.min.js'></script>
</head>
<body>
<div class="navigation_container">
    <div class='blank20'></div>

    <div class='row'>
        <div class="header-logo large-8 columns">
            <a class="logo-text lottery-logo" href="#">Clown</a>
        </div><!-- #header_logo -->
        <div class='large-4 columns fr'>
            <input class='search-inp fr' type="search" name="search" placeholder="Search" maxlength="256" />

        </div>

        <div class='clear'></div>
        <dl class="sub-nav" style=''>
            <?php foreach($this->menu as $key => $v){ ?>
                <dd class="">
                    <a href="<?php echo $v->href; ?>">
                        <?php echo $v->name; ?>
                    </a>
                </dd>
            <?php } ?>
        </dl>

        <span id="qqLoginBtn"></span>
        <script type="text/javascript">
            QC.Login({
                btnId:"qqLoginBtn"    //插入按钮的节点id
            });
        </script>
    </div>

</div>

<?php echo $content; ?>

<div class="footer section" id="footer_global" style='display:none'>
    <ul class="nav nav_global_tierA">
        <li class="nav1"><a href="http://www.nationalgeographic.com/" id="intl_link_footer_home">Home</a></li>
        <li class="nav2"><a href="http://video.nationalgeographic.com/video/player/">Video</a></li>
        <li class="nav3"><a href="/photography/">Photography</a></li>
        <li class="nav4"><a href="/animals/">Animals</a></li>
        <li class="nav5"><a href="/environment/">Environment</a></li>
        <li class="nav6"><a href="/travel/">Travel</a></li>
        <li class="nav7"><a href="/adventure/">Adventure</a></li>
        <li class="nav8"><a href="//channel.nationalgeographic.com/channel/" id="intl_link_footer_natgeotv">Television</a></li>
        <li class="nav9"><a href="http://kids.nationalgeographic.com/kids/"  id="intl_link_footer_kids">Kids</a></li>
        <li class="nav10"><a href="http://shop.nationalgeographic.com/ngs/index.jsp?code=NG94010" id="intl_link_footer_shop">Shop</a></li>
    </ul>
    <ul class="nav nav_global_tierB">
        <li class="nav13"><a href="/news/">Daily News</a></li>
        <li class="nav01"><a href="http://ngm.nationalgeographic.com/">The Magazine</a></li>
        <li class="nav02"><a href="/maps/">Maps</a></li>
        <li class="nav04"><a href="/science/">Science &amp; Space</a></li>
        <li class="nav05"><a href="/education/">Education</a></li>
        <li class="nav06"><a href="http://games.nationalgeographic.com/">Games</a></li>
        <li class="nav07"><a href="http://greenliving.nationalgeographic.com/">Green Living</a></li>
        <li class="nav08"><a href="http://events.nationalgeographic.com/">Events</a></li>
        <li class="nav09"><a href="http://blogs.nationalgeographic.com/">Blogs</a></li>
        <li class="nav10"><a href="/movies/">Movies</a></li>
        <li class="nav11"><a href="/explorers/">Explorers</a></li>
        <li class="nav12"><a href="/mobile">Mobile</a></li>
        <li class="nav13"><a href="/siteindex/">Site Index</a></li>
    </ul>
    <ul class="nav nav_global_tierC">
        <li class="nav01"><a href="/magazines/" id="intl_link_footer_subscriptions">Subscriptions</a></li>
        <li class="nav02"><a href="http://national-geographic.cafepress.com/art">Buy Prints</a></li>
        <li class="nav03"><a href="http://www.ngdigitalmotion.com/">Stock Footage</a></li>
        <li class="nav03"><a href="http://www.nationalgeographicSTOCK.com">Stock Photos</a></li>
        <li class="nav04"><a href="http://www.nationalgeographicexpeditions.com/home?utm_source=travel.nationalgeographic.com&amp;utm_medium=Link&amp;utm_content=Footer_link_Our_Trips&amp;utm_campaign=NGdotcom">Our Trips</a></li>
        <li class="nav05"><a href="/newsletter/">Newsletters</a></li>
        <li class="nav06"><a href="/jobs/">Jobs</a></li>
        <li class="nav07"><a href="/siteindex/international/">Global Sites</a></li>
        <li class="nav07"><a href="/environment/national-geographic-sustainability/">Sustainability</a></li>
        <li class="nav08"><a href="/about/">About</a></li>
        <li class="nav09"><a href="/community/email/">Contact</a></li>
    </ul>
    <ul class="nav nav_global_tierC">
        <li class="nav01"><a href="http://shop.nationalgeographic.com/ngs/browse/category.jsp?categoryId=A245&code=NG90414">Gifts</a></li>
        <li class="nav02"><a href="http://shop.nationalgeographic.com/ngs/browse/category.jsp?categoryId=A054&addFacet=9004:A054&code=NG90415">DVD's</a></li>
        <li class="nav03"><a href="http://shop.nationalgeographic.com/ngs/browse/category.jsp?categoryId=A001&addFacet=9004:A001&code=NG90416">Books</a></li>
        <li class="nav04"><a href="http://shop.nationalgeographic.com/ngs/browse/category.jsp?categoryId=A106&addFacet=9004:A106&code=NG90417">Maps &amp; Globes</a></li>
        <li class="nav05"><a href="http://shop.nationalgeographic.com/ngs/browse/category_sale.jsp?categoryId=A223&addFacet=9004:A223&code=NG90413">Sale</a></li>
        <li class="nav06"><a href="http://shop.nationalgeographic.com/ngs/browse/category.jsp?categoryId=A169&addFacet=9004:A169&code=NG90419">Travel Gear</a></li>
        <li class="nav07"><a href="http://shop.nationalgeographic.com/ngs/browse/category.jsp?categoryId=A161&addFacet=9004:A161&code=NG90420">Photography Gear</a></li>
    </ul>
    <ul class="nav nav_global_tierD">
        <li class="nav03"><a href="https://donate.nationalgeographic.org/Page.aspx?pid=184">Donate</a></li>
        <li class="nav04"><a href="http://press.nationalgeographic.com/">Press Room</a></li>
        <li class="nav05"><a href="/siteindex/customer/">Customer Service</a></li>
        <li class="nav06"><a href="http://www.nationalgeographic.com/mediakit/">Advertise With Us</a></li>
        <li class="nav07"><a href="/community/terms/">Terms of Service</a></li>
        <li class="nav08"><a href="/community/privacy/">Privacy Policy</a></li>
    </ul>
    <p >&copy; 1996-2013 National Geographic Society. All rights reserved.</p>
</div>
</body>
</html>
