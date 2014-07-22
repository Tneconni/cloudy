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
            <dd style="float:right; margin-right:16px;">
                <span id="qqLoginBtn"></span>
                <script type="text/javascript">
                    QC.Login({
                        btnId:"qqLoginBtn"    //插入按钮的节点id
                    });
                </script>
            </dd>
        </dl>



    </div>

</div>

<?php echo $content; ?>


<div class="footer row top-line">
    <div class="qq-group large-3 columns">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/qq_group.png"/>
        <p>
            <span>漫客小屋</span>
            <span>(QQ群:316387163)</span>
        </p>
    </div>
    <div class=" tail-menu large-9 columns">
        <ul class="large-3 columns small-12">
            <li class="header">漫客商城</li>
            <li class="">海贼王</li>
            <li class="">火影忍者</li>
        </ul>
        <ul class="large-3 columns small-12">
            <li class="header">技术博客</li>
            <li class="">前端</li>
            <li class="">PHP</li>
        </ul>
        <ul class="large-3 columns small-12">
            <li class="header">工具坊</li>
        </ul>
        <ul class="large-3 columns small-12">
            <li class="header">施工地点</li>
        </ul>
    </div>
</div>
</body>
</html>
