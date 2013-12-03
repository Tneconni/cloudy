<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

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

    <script src='<?php echo Yii::app()->request->baseUrl; ?>/js/'></script>
</head>
<body>
<div id="navigation_tophat_container">
<p id="skip_navigation" class="hidden"><a href="#content">Skip to this page's content</a></p>
<div id="navigation_mainA">


    <!-- HEADER ADVERTISEMENT -->
    <div id="headerboard">

        <div class="pushdown advertisement hidden">
            <h3 class="hidden">Advertisement</h3>
            <div id="advertisingModule970x66"></div>
        </div><!-- .pushdown .advertisement -->
        <div class="leaderboard advertisement hidden">
            <h3 class="hidden">Advertisement</h3>

            <div id="advertisingModule728x90">

            </div>

        </div><!-- .leaderboard .advertisement -->
        <div class="secondary_ad hidden">
            <h3 class="hidden">Advertisement</h3>

            <div id="advertisingModule257x90">

            </div>




        </div><!-- .secondary_ad -->
    </div><!-- #headerboard -->



    <div id="header_logo" class="vcard">
        <a class="url fn org hiddenText" href="http://www.nationalgeographic.com/">National Geographic Society</a>
        <div class="adr hiddenText">
            <span class="post-office-box">P.O. Box 98199</span>
            <span class="locality">Washington</span>,
            <abbr title="District of Columbia" class="region">DC</abbr>
            <span class="postal-code">20090-8199</span>
            <span class="country-name">USA</span>
        </div>
        <div class="geo hiddenText">
            <span class="latitude">38.90531943278526</span>,
            <span class="longitude">-77.0376992225647</span>
        </div>
        <div class="tel hiddenText">800-647-5463</div>
    </div><!-- #header_logo -->

    <div id="shared-header"></div>

    <!-- google search parameters -->
    <form name="global_search" method="GET" id="global_search" action="http://www.nationalgeographic.com/search/">
        <div class="hidden">

            <input type="hidden" name="frontend" value="default_frontend">


            <input type="hidden" name="output_format" value="xml_no_dtd">
            <input type="hidden" name="num_results" value="25">
            <input type="hidden" name="filter" value="p">


            <input type="hidden" name="collection" value="default_collection">



            <input type="hidden" name="meta_field_to_return" value="ngs-gsa-feed-title">
            <input type="hidden" name="meta_field_to_return" value="ngs-gsa-feed-slug">
            <input type="hidden" name="meta_field_to_return" value="ngs-gsa-feed-description">
            <input type="hidden" name="meta_field_to_return" value="ngs-gsa-feed-keywords">
            <input type="hidden" name="meta_field_to_return" value="ngs-gsa-feed-thumbnail">



            <input type="hidden" name="required_meta_field_1" value="ngs-gsa-feed-mediaType:video">

            <input type="hidden" name="required_meta_field" value="ngs-gsa-feed-video-source:animals|ngs-gsa-feed-video-source:environment|ngs-gsa-feed-video-source:movies|ngs-gsa-feed-video-source:music|ngs-gsa-feed-video-source:news|ngs-gsa-feed-video-source:places|ngs-gsa-feed-video-source:specials|ngs-gsa-feed-video-source:science|ngs-gsa-feed-video-source:nat-geo-wild|ngs-gsa-feed-video-source:national-geographic-channel|ngs-gsa-feed-video-source:kids|ngs-gsa-feed-video-source:the-magazine">



            <input type="hidden" name="meta_field_filter" value="ngs-gsa-feed-title">
            <input type="hidden" name="meta_field_filter" value="ngs-gsa-feed-description">
            <input type="hidden" name="meta_field_filter" value="ngs-gsa-feed-keywords">


            <input type="hidden" name="oe" value="utf-8" />
        </div>

        <span class="hidden">Search National Geographic</span>

        <div class="field">
            <label for="header_search_input" class="hidden">Search<span class="hidden">nationalgeographic.com</span></label>


            <input id="header_search_input" type="search" name="search" placeholder="Search" maxlength="256" value="">



            <button type="submit" name="btnG" id="header_search_submit" value="Go" class="hidden">Submit</button>



            <input type="hidden" name="start" value="0">



            <input type="hidden" name="sort" value="">


        </div>


    </form><!-- #header_search -->

    <ul id="social" class="inline_list">
        <li>Connect:</li>
        <li><a href="http://www.facebook.com/natgeo" class="facebook"></a></li>
        <li><a href="http://www.twitter.com/NatGeo" class="twitter"></a></li>
    </ul>
</div><!-- #navigation_mainA -->

<nav id="navigation_mainB" class="cf">
    <div class="navigation_mainB_container">
        <ul class="primary_nav inline-list">
            <?php foreach($this->menu as $key => $v){ ?>
            <li class="home active"><a href="<?php echo $v->href; ?>"><?php echo $v->name; ?></a>
                <nav class="sub_nav">
                    <ul class="secondary_nav">
                        <li><a href="http://www.nationalgeographic.com/news/">Daily News</a></li>
                        <li><a href="http://ngm.nationalgeographic.com">The Magazine</a></li>
                        <li><a href="http://maps.nationalgeographic.com">Maps</a></li>
                    </ul>
                </nav>
            </li>
            <?php } ?>
            <!--
            <li class="video"><a href="http://www.nationalgeographic.com/video/">Video</a>
                <nav class="sub_nav">
                    <ul class="secondary_nav">
                        <li><a href="http://www.nationalgeographic.com/video/">Video Home</a></li>
                        <li><a href="http://www.nationalgeographic.com/video/national-geographic-channel/">Nat Geo TV</a></li>
                        <li><a href="http://www.nationalgeographic.com/video/nat-geo-wild/">Nat Geo Wild</a></li>
                        <li><a href="http://www.nationalgeographic.com/video/animals/">Animals</a></li>
                        <li><a href="http://www.nationalgeographic.com/video/kids/">Kids</a></li>
                        <li><a href="http://www.nationalgeographic.com/video/news/">News</a></li>
                        <li><a href="http://www.nationalgeographic.com/video/more/">More</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>
            <li class="photography"><a href="http://www.nationalgeographic.com/photography/">Photography</a>
                <nav class="sub_nav">
                    <ul class="secondary_nav">
                        <li ><a href="http://www.nationalgeographic.com/photography/">Photography Home</a></li>
                        <li ><a href="http://www.nationalgeographic.com/photography/photo-of-the-day/">Photo of the Day</a></li>
                        <li ><a href="http://www.nationalgeographic.com/photography/photogalleries/">Galleries</a></li>
                        <li ><a href="http://www.nationalgeographic.com/photography/wallpapers/">Wallpapers</a></li>
                        <li ><a href="http://www.nationalgeographic.com/photography/photo-tips/">Photo Tips</a></li>
                        <li ><a href="http://www.nationalgeographic.com/photography/photographers/">Photographers</a></li>
                        <li ><a href="http://ngm.nationalgeographic.com/your-shot/">Your Shot</a></li>
                        <li ><a href="http://national-geographic.cafepress.com/art">Buy Prints</a></li>
                        <li ><a href="http://video.nationalgeographic.com/video/player/photography/">Video</a></li>
                        <li ><a href="http://www.nationalgeographic.com/newsletter/">Newsletters</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>
            <li class="animals"><a href="http://www.nationalgeographic.com/animals/">Animals</a>
                <nav class="sub_nav">
                    <ul class="secondary_nav">
                        <li ><a href="http://www.nationalgeographic.com/animals/">Animals Home</a></li>
                        <li ><a href="http://www.nationalgeographic.com/animals/facts/">Facts</a></li>
                        <li ><a href="http://www.nationalgeographic.com/animals/photos/">Photos</a></li>
                        <li ><a href="http://www.nationalgeographic.com/video/player/animals/">Video</a></li>
                        <li ><a href="http://www.nationalgeographic.com/animals/conservation/">Animal Conservation</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>
            <li class="environment"><a href="http://www.nationalgeographic.com/environment/">Environment</a>
                <nav class="sub_nav">
                    <ul class="secondary_nav">
                        <li ><a href="http://www.nationalgeographic.com/environment/">Environment Home</a></li>
                        <li ><a href="http://www.nationalgeographic.com/environment/energy/">Energy</a></li>
                        <li ><a href="http://www.nationalgeographic.com/environment/freshwater/">Freshwater</a></li>
                        <li ><a href="http://www.nationalgeographic.com/environment/global-warming/">Global Warming</a></li>
                        <li ><a href="http://www.nationalgeographic.com/environment/habitats/">Habitats</a></li>
                        <li ><a href="http://www.nationalgeographic.com/environment/natural-disasters/">Natural Disasters</a></li>
                        <li ><a href="http://www.nationalgeographic.com/ocean/">The Ocean</a></li>
                        <li ><a href="http://greenliving.nationalgeographic.com/">The Green Guide</a></li>
                        <li ><a href="http://www.nationalgeographic.com/newsletter/">Newsletters</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>
            <li class="travel"><a href="http://www.nationalgeographic.com/travel/">Travel</a>
                <nav class="sub_nav">
                    <ul class="secondary_nav">
                        <li ><a href="http://www.nationalgeographic.com/travel/">Travel Home</a></li>
                        <li ><a href="http://www.nationalgeographic.com/travel/top-10/">Top 10</a></li>
                        <li ><a href="http://www.nationalgeographic.com/travel/destinations-a-z/">Destinations A-Z</a></li>
                        <li ><a href="http://www.nationalgeographic.com/travel/trip-ideas/">Trip Ideas</a></li>
                        <li ><a href="http://intelligenttravel.nationalgeographic.com/">Travel Blogs</a></li>
                        <li ><a href="http://www.nationalgeographic.com/travel/traveler-magazine/">Traveler Magazine</a></li>
                        <li ><a href="http://www.nationalgeographic.com/travel/travel-photos/">Photos</a></li>
                        <li ><a href="http://www.nationalgeographic.com/video/player/places/">Video</a></li>
                        <li ><a href="http://www.nationalgeographicexpeditions.com/?utm_source=travel.nationalgeographic.com&utm_medium=Link&utm_content=TopNav_Our_Trips&utm_campaign=NGdotcom">Our Trips</a></li>
                        <li ><a href="http://www.nationalgeographic.com/newsletter/">Newsletters</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>
            <li class="adventure"><a href="http://www.nationalgeographic.com/adventure/">Adventure</a>
                <nav class="sub_nav">
                    <ul class="secondary_nav">
                        <li ><a href="http://www.nationalgeographic.com/adventure/">Adventure Home</a></li>
                        <li ><a href="http://www.nationalgeographic.com/adventure/gear/?source=NavAdvHome ">Gear</a></li>
                        <li ><a href="http://www.nationalgeographic.com/adventure/ultimate-adventurers/">Ultimate Adventurers</a></li>
                        <li ><a href="http://www.nationalgeographic.com/adventure/trip-ideas/">Trip Ideas</a></li>
                        <li ><a href="http://www.nationalgeographic.com/travel/national-parks/">Parks</a></li>
                        <li ><a href="http://www.nationalgeographic.com/adventure/adventure-photos/">Photos</a></li>
                        <li ><a href="http://www.nationalgeographic.com/video/player/adventure/">Video</a></li>
                        <li ><a href="http://adventureblog.nationalgeographic.com/">Blog</a></li>
                        <li ><a href="http://www.nationalgeographicexpeditions.com/?utm_source=NGdotcom-Adventure&utm_medium=Link&utm_content=TopNav_Nat_Geo_Trips&utm_campaign=NGdotcom">Nat Geo Trips</a></li>
                        <li ><a href="http://alltrails.com/a/100077/">AllTrails</a></li>
                        <li ><a href="http://www.nationalgeographic.com/newsletter/">Newsletters</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>
            <li class="television"><a href="http://channel.nationalgeographic.com/channel/">Television</a>
                <nav class="sub_nav left">
                    <ul class="secondary_nav">
                        <li ><a href="http://channel.nationalgeographic.com/channel/">National Geographic Channel</a></li>
                        <li ><a href="http://channel.nationalgeographic.com/wild/">Nat Geo Wild</a></li>
                        <li ><a href="http://channel.nationalgeographic.com/channel/schedule/daily/">TV Schedule</a></li>
                        <li ><a href="http://channel.nationalgeographic.com/channel/shows/">Shows</a></li>
                        <li ><a href="http://video.nationalgeographic.com/video/national-geographic-channel/">Video</a></li>
                        <li ><a href="http://tvblogs.nationalgeographic.com">Blogs</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>
            <li class="kids"><a href="http://www.nationalgeographic.com/kids/">Kids</a>
                <nav class="sub_nav left">
                    <ul class="secondary_nav">
                        <li ><a href="http://www.nationalgeographic.com/kids/">Kids Home</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://kids.nationalgeographic.com/kids/games/">Games</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://video.nationalgeographic.com/video/player/kids/">Videos</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://kids.nationalgeographic.com/kids/animals/">Animals &amp; Pets</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://kids.nationalgeographic.com/kids/photos/">Photos</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://kids.nationalgeographic.com/kids/places/">Countries</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://kids.nationalgeographic.com/kids/activities/">Fun Stuff</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://kids.nationalgeographic.com/kids/community/">Community</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://kids.nationalgeographic.com/kids/stories/">News</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://kids.nationalgeographic.com/kids/animal-jam/">Animal Jam</a></li>
                        <li ><a href="http://ad.doubleclick.net/clk;218355739;8304489;w?http://kidsblogs.nationalgeographic.com/littlekids/">Little Kids</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>

            <li class="subscriptions"><a href="http://www.nationalgeographic.com/magazines/lp/20121024/nav-rdpg/">Subscriptions</a>
                <nav class="sub_nav left">
                    <ul class="secondary_nav">
                        <li ><a href="https://secure.customersvc.com/servlet/Show?WESPAGE=OrderPages/ng/1209/order_15A1.jsp&MSRSMAG=NG&EFK1=NGB0F69&EFK2=NGB0F85&EFK3=NGB0GA9&MSCCMPLX=RBMULTINV3">National Geographic Magazine</a></li>
                        <li ><a href="https://kidsubs.nationalgeographic.com/servlet/ConvertibleGateway?cds_mag_code=NWO&cds_page_id=118275&cds_misc_5=FLYOUT7">National Geographic Kids</a></li>
                        <li ><a href="https://littlekidsubs.nationalgeographic.com/servlet/ConvertibleGateway?cds_mag_code=NLK&cds_page_id=118233&cds_misc_5=FLYOUT7">National Geographic Little Kids</a></li>
                        <li ><a href="https://travelersubs.nationalgeographic.com/servlet/OrdersGateway?cds_mag_code=NGT&cds_page_id=118786&cds_misc_5=FLYOUT7">National Geographic Traveler</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>

            <li class="shop"><a href="http://shop.nationalgeographic.com/ngs/index.jsp?code=NG94000&amp;source=NavShopHome">Shop</a>
                <nav class="sub_nav left">
                    <ul class="secondary_nav">
                        <li><a href="http://shop.nationalgeographic.com/ngs/index.jsp?code=NG94001&amp;source=NavShopHome" title="National Geographic Shop - Home">Store Home</a></li>
                        <li><a href="http://shop.nationalgeographic.com/ngs/browse/categorySeries.jsp?categoryId=S061&amp;addFacet=9004:S061&amp;code=NG94007&amp;source=NavShopServ" title="National Geographic Shop - Genographic Kits">Genographic Kits</a></li>
                        <li><a href="http://shop.nationalgeographic.com/ngs/browse/category_bestsellers.jsp?categoryId=A200&addFacet=9004:A200&code=NG94232" title="National Geographic Shop - Best Sellers">Best Sellers</a></li>
                        <li><a href="http://shop.nationalgeographic.com/ngs/browse/category_new.jsp?categoryId=A211&addFacet=9004:A211&code=NG94233" title="National Geographic Shop - New">New</a></li>
                        <li><a href="http://shop.nationalgeographic.com/ngs/browse/category.jsp?categoryId=A091&amp;addFacet=9004:A091&amp;code=NG94004&amp;source=NavShopKids" title="National Geographic Shop - Kids">Kids Shop</a></li>
                        <li><a href="http://shop.nationalgeographic.com/ngs/browse/category.jsp?categoryId=A245&amp;addFacet=9004:A245&amp;code=NG94002&amp;source=NavShopGift" title="National Geographic Shop - Gift Finder">Gift Finder</a></li>
                        <li><a href="http://shop.nationalgeographic.com/ngs/browse/category.jsp?categoryId=A236&amp;addFacet=9004:A236&amp;code=NG94003&amp;source=NavShopChan" title="National Geographic Shop - Channel">Channel Shop</a></li>
                        <li><a href="http://shop.nationalgeographic.com/ngs/browse/category_sale.jsp?categoryId=A223&amp;addFacet=9004:A223&amp;code=NG94008&amp;source=NavShopSale" title="National Geographic Shop - Sale">Sale</a></li>
                        <li><a href="http://shop.nationalgeographic.com/ngs/category/shop-by-catalog?code=NG94005&amp;source=NavShopCat" title="National Geographic Shop - Shop By Catalog">Shop by Catalog</a></li>
                        <li><a href="http://shop.nationalgeographic.com/ngs/browse/emailRegistration.jsp?code=NG94056" title="National Geographic Shop - Email Signup">Email Signup</a></li>
                    </ul>
                    <div class="spotlight">
                    </div>
                </nav>
            </li>
             -->
        </ul><!-- .primary_nav -->
    </div><!-- .navigation_mainB_container -->
</nav><!-- #navigation_mainB -->
</div>

<?php echo $content; ?>




<div class="footer section" id="footer_global">
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
    <p id="copyright">&copy; 1996-2013 National Geographic Society. All rights reserved.</p>
</div>
</body>
</html>
