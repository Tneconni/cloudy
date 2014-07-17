<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>漫客商城 - 你身边的动漫商店</title>

    <link href="catalog/view/theme/manka/stylesheet/manka/common.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/manka/stylesheet/manka/index2.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="catalog/view/javascript/common.js"></script>

    <!--
    <script type="text/javascript" id="dialog_js" src="js/jquery.dialog.js" ></script>
-->

    <!--[if IE 6]>
    <script type="text/javascript" src="js/png.js" ></script>
    <script type="text/javascript"> DD_belatedPNG.fix('*');</script>
    <![endif]-->
</head>
<body>
<!--头部公共开始-->
<!--页眉-->
<div class="yemei_big">
    <div class="yemei">
        <ul class="fl Id">
            <li class="fore cof"> <a href="<?php echo $home;?>">漫客商城首页</a> </li>
            <?php if( !$logged ){ ?>
            <li class="fore"> 请
                <span class="dunlu">
                    <a href="<?php echo $login; ?>">登录</a>
                    <a href="<?php echo $register; ?>">免费注册</a>
                </span>
            </li>
            <?php }else{ ?>
            <li class="fore"> 你好
                <span class="dunlu">

                    <a href="<?php echo $account; ?>"><?php echo $firstName; ?></a>
                    <a href="<?php echo $logout; ?>">退出</a>

                </span>
            </li>
            <?php } ?>
            <!--登录之后-->
            <li class="fore Id"><s></s>
                <a href="javascript:void(0);"
                   onclick="AddFavorite(window.location.href,document.title);">收藏本店</a>
            </li>
        </ul>
        <ul class="fr">
            <li class="fore cof menu_2" id="my_account">

                <a
                <?php if($logged){ ?>
                        href="<?php echo $account;?>"
                <?php }else{ ?>
                    href="<?php echo $login;?>"
                <?php } ?>
                >我的账户<b></b></a>

                <div class="account_big">
                    <ul>
                        <li><a href="/index.php/User/Order/index/status/1">待付款订单</a></li>
                        <li><a href="/index.php/User/Order/index/status/2">已付款订单</a></li>
                        <li><a href="/index.php/User/Message/index">短消息<!--<span style="font-weight:bold; color:#990000">&nbsp;(<font color="#990000" >0</font>)</span>--></a></li>
                    </ul>
                </div>
            </li>

            <!--<li class="fore Id"> <a href="#">联系客服</a> <s></s> </li>-->

            <?php echo $cart; ?>

            <li class="fore Id menu_1">

                <s></s>
                <a >收藏夹</a>

            </li>
            <!--<li class="fore Id menu_2"><s></s><a href="#">网站导航<b></b></a></li>-->
        </ul>
    </div>
</div>


<!--logo+搜索-->
<div id="header_1">
    <div class="header_top Id">
        <div class="mantou"></div>
        <a class="logo" href="<?php echo $home;?>"><img src="image/logl.gif" /></a>
        <!--搜索-->
        <div class="search_big" style="padding-bottom:7px">

            <input name="search-word" type="text" value="<?php echo $search;?>" class="text"/>

            <input id="search-sbt" type="submit" class="button" value="搜索" />
            <div class="clear"></div>
<!--
            <div class="hotwords">热门搜索：
                <a href="/index.php/home/search/index/keyword/绕线器">绕线器</a>
                <a href="/index.php/home/search/index/keyword/暴走">暴走</a>
                <a href="/index.php/home/search/index/keyword/斗罗">斗罗</a>
                <a href="/index.php/home/search/index/keyword/卡贴">卡贴</a>
                <a href="/index.php/home/search/index/keyword/2014">2014</a>
                <a href="/index.php/home/search/index/keyword/斗破">斗破</a>
                <a href="/index.php/home/search/index/keyword/抱枕">抱枕</a>
                <a href="/index.php/home/search/index/keyword/偷星">偷星</a>
            </div>
-->
            <div class="clear"></div>
        </div>
    </div>
    <script>

        $('#search-sbt').click(function(){

            var word = $('input[name="search-word"]').val();

            var request  = '&search=' + word;

            location = "<?php echo $searchUrl; ?>" + request;
        });
        $('input[name="search-word"]').keydown(function( event ){


            if( navigator.userAgent.indexOf('MSIE') > -1){
                var key = event.keyCode;
            }else{
                var key = event.which;
            }

            if( key == 13 ){
                var word = $('input[name="search-word"]').val();

                var request  = '&search=' + word;

                location = "<?php echo $searchUrl; ?>" + request;
            }
        });
    </script>
</div>
<!--导航-->
<div id="navigation">
<div class="navigation_big">
    <!--分类导航-->
    <h2>所有商品分类</h2>

    <!-- todo : fixing the style -->
    <?php echo $nav_left; ?>

    <ul class="navigation">
        <!-- <li class="pifa_f"><a href="http://shop.zymk.cn/index.php/article/show/id/43" target="_blank">网络批发渠道申请</a></li>-->
        <li><a href="/" class="beijing" >首 页</a></li>
        <!--      <li><a href="/index.php/Tag?id=1"  >限时抢购</a></li>-->
        <li><a href="/index.php/Category/index/"  >全部商品</a></li>
        <li><a href="/index.php/Tag?id=2"  >独家发布</a></li>

    </ul>
</div>
</div>
<!--头部公共结束-->
<link href="css/index2.css" rel="stylesheet" type="text/css" />
<script src="js/index.js" type="text/javascript"></script>
<script src="js/jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("a").focus(function(){
            $(this).blur();
        });

        /*	$("#lingqu").click(function(){
         var item = $(this);
         var coupon_id = item.attr("data");
         if(item.data("ling") === undefined){
         item.data("ling", true);
         $.get("/index.php/Goodstest/getcoupon", {id:1}, function(data){
         item.removeData("ling");
         if(data.ret == 1){
         shop.msg("领取成功，您的优惠券是：<br>" + data.data);
         }else{
         shop.msg(data.info);
         }
         }, "json");
         }
         return false;
         });*/

        //幻灯片
        $(".slide_show_big").KinSlideshow({
            titleBar:{titleBar_height:30,titleBar_bgColor:"#000000",titleBar_alpha:0.7},
            isHasTitleBar:false,
            isHasTitleFont:false,
            btn:{btn_bgColor:"#FFFFFF",btn_bgHoverColor:"#f18113",btn_fontColor:"#000000",btn_fontHoverColor:"#FFFFFF",btn_borderColor:"#cccccc",btn_borderWidth:1,btn_bgAlpha:1}
        });

    });
</script>
<!--头部公共结束-->
