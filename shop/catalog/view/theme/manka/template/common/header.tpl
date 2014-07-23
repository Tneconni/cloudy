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
    <script type="text/javascript"
            src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js"
            data-appid="101140571"
            data-redirecturi="http://tneconni.gotoip55.com/shop?route=common/qq_login"
            charset="utf-8"
            ></script>
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
            <li class="fore" > 你好
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
            <li class="fore">
                <span id="qqLoginBtn"></span>
                <style>
                    #qqLoginBtn{
                        display:block
                    }
                    #qqLoginBtn .qc_item.figure img{
                        width: 15px;
                        position: relative;
                        top: 4px;
                    }
                </style>
                <script type="text/javascript">
                    QC.Login({
                        btnId:"qqLoginBtn"    //插入按钮的节点id
                    });

                    console.log( 'QC:' );
                    console.log( QC );
                </script>
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
<?php if( strpos($this->request->get['route'], 'checkout/') === false ){ ?>
<?php echo $search_bar; ?>
<?php } ?>
<!--导航-->
<?php if( strpos($this->request->get['route'], 'checkout/') === false ){ ?>
<?php echo $navigation; ?>
<?php } ?>
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
