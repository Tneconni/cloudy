<?php echo $header; ?>

<link href="catalog/view/theme/manka/stylesheet/manka/shopping.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(document).ready(function(){

        //清除a标签的边框
        $("a").focus(function(){
            this.blur();
        });

        $(".selectall").click(function(){
            var checked = $(this).attr("checked");
            if(checked == "checked")
                $('input:checkbox[name="cart_id[]"]:enabled').attr("checked", "checked");
            else{
                $('input:checkbox[name="cart_id[]"]:enabled').removeAttr("checked");
            }
            $('#totalPrice').html(total());
            $('#totalPrices').html(endPrice());
        });

        //火狐下会自动选择之前选中的状态
        $('input:checkbox[name="cart_id[]"]:[disabled="disabled"]').removeAttr("checked");

        $('#cart table tr td').each(function(){

            //checkbox 选择购物车的商品
            $(this).find('input:checkbox[name="cart_id[]"]').click(function(){
                if($(this).attr("checked") != "checked"){
                    $(".selectall").removeAttr("checked");
                }else{
                    var all = true;
                    $('input:checkbox[name="cart_id[]"]').each(function(){
                        if($(this).attr("disabled") != "disabled" && $(this).attr("checked") != "checked"){
                            all = false;
                        }
                    });
                    if(all){
                        $(".selectall").attr("checked", "checked");
                    }
                }
                $('#totalPrice').html(total());
                $('#totalPrices').html(endPrice());
            });

            //+ 增加购买数量
            $(this).find('#augmented').click(function(){
                var id = $(this).attr('data');
                if($('.check_' + id).attr("disabled") == "disabled") return false;
                var number  = parseInt($('#goods_'+id).val());
                changeNumber(id, number+1)
                return false;
            });

            //- 减少购买数量
            $(this).find('#diminished').click(function(){
                var id = $(this).attr('data');
                if($('.check_' + id).attr("disabled") == "disabled") return false;
                var number  = parseInt($('#goods_'+id).val());
                changeNumber(id, number-1);
                return false;
            });

            //input type=text 手动改变购买数量
            $(this).find(".goods_num").change(function(){
                var id = $(this).attr('data');
                if($('.check_' + id).attr("disabled") == "disabled") return false;
                var number  = parseInt($('#goods_'+id).val());
                if(number < 1) $('#goods_'+id).val(1);
                changeNumber(id, number);
            });

            //input type=text,按了确认键
            $(this).find(".goods_num").keypress(function(event){
                if(event.keyCode==13||event.which==13){
                    var id = $(this).attr('data');
                    if($('.check_' + id).attr("disabled") == "disabled") return false;
                    var number  = parseInt($('#goods_'+id).val());
                    if(number < 1) $('#goods_'+id).val(1);
                    changeNumber(id, number);
                }
            });

            //删除
            $(this).find('#delete').click(function(){
                var id = $(this).attr('data');
                shop.msg("确定删除吗?", function(){
                    $.get("/index.php/Cart/delete/id/" + id, "", function(data){
                        if(data.ret == 1){
                            $('.cart_'+id).css({background:'#EEEEEE'}).slideUp('500',function(){
                                $(this).remove();
                                $('#totalPrice').html(total());
                                $('#totalPrices').html(endPrice());
                            });
                        }
                    }, "json");
                }, "取消");
                return false;
            });
        });

        $("#submit_button").click(function(){
            var item = $(this);
            if($('input:checkbox[name="cart_id[]"]:checked').length == 0){
                shop.msg("请选择要购买的商品");
                return false;
            }
            if(item.data("submit") === undefined){
                item.data("submit", true);
                $.post("/index.php/Goodstest/orderverify", $("#myform").serialize(), function(data){
                    item.removeData("submit");
                    switch(data.ret){
                        case 1:
                            $("#myform").submit();
                            break;
                        case -4:
                        case -3:
                            $('.cart_'+data.data.id).css({background:'#EEEEEE'});
                            shop.msg(data.data.info);
                            break;
                        case -2:
                        default:
                            break;
                    }
                }, "json");
            }

        });

        function changeNumber(id, currentnum){
            var shop_price = parseFloat($('#shop_price_'+id).html());
            var subtotal = $('#subtotal_'+id);
            if(currentnum < 1){
                return false;
            }
            if($(document).data("changenum") === undefined){
                $(document).data("changenum", true);
                $.get('/index.php/Cart/modifynum',{id:id, number:currentnum},function(data){
                    $(document).removeData("changenum");
                    if(data.ret == 1){
                        var num = data.data;
                        $('#goods_'+id).val(num);
                        subtotal.html((parseFloat(num)*shop_price).toFixed(2));
                        $('#totalPrice').html(total());
                        $('#totalPrices').html(endPrice());
                    }else if(data.ret == -1){
                        var num = data.data;
                        $('#goods_'+id).val(num);
                        subtotal.html((parseFloat(num)*shop_price).toFixed(2));
                        $('#totalPrice').html(total());
                        $('#totalPrices').html(endPrice());
                    }
                }, "json");
            }
            return false;
        }

        $('#totalPrice').html(total());
        $('#totalPrices').html(endPrice());
    });

    function total(){
        var totalPrice = 0;
        $('.subtotal').each(function(){
            var checkbox = $('.check_' + $(this).attr("data"));
            if(checkbox.attr("checked") == "checked" && checkbox.attr("disabled") === undefined){
                totalPrice += parseFloat($(this).html());
            }
        });


        return (Math.round(totalPrice*100)/100).toFixed(2);
    }
    function endPrice(){
        //满额立减
        return total();

    }
</script>
<style type="text/css">
    <!--
    body {
        background:#fff;
    }
    a:visited {
        color: #666;
    }
    a:hover {
        color: #f37020;
    }
    a:active {
        color: #D6D6D6;
    }
    .span_1{color: #313131; font-size: 14px;}
    .span_2{font-size: 16px; color: #f37020; font-weight: bold;}
    -->
</style>
<!--logo+导航-->
<div id="logo">
    <div class="top">
        <div class="header" style="background:none"><a href="/" style="display:block"><img src="image/logo.jpg"/></a></div>
        <div class="navigation"> </div>
    </div>
    <!--/*指示牌*/-->
    <div class="instructions">
        <p>
            <span style="float:right; color:#333333; font-size:14px; font-weight:normal;">
                <a href="http://shop.zymk.cn/index.php/goods/index/id/3281" target="_blank">爱萌1.0绕线器 多用途萌物现货到！</a>
                &nbsp;&nbsp;
            </span>
            我的购物车
        </p>
    </div>
    <!--/*订单*/-->
    <!--订单发货-->
    <div id="shelf">
        <table width="980" height="40" border="0" cellspacing="0" >
            <tr>
                <td align="left" width="60" bgcolor="#fdeade" style="padding-left:12px;"><span style="font-size: 12px; font-weight: bold;">
          <input type="checkbox" value="" name="selectall" checked="checked" class="selectall" />全选</span></td>
                <td width="423" bgcolor="#fdeade" style="font-size: 12px; font-weight: bold; color: #313131;" >商品</td>
                <td width="164" bgcolor="#fdeade" style="font-size: 12px; font-weight: bold; color: #313131;" >单价（元）</td>
                <td width="90" bgcolor="#fdeade" style="font-size: 12px; font-weight: bold; color: #313131;">送积分</td>
                <td width="110" bgcolor="#fdeade" style="font-size: 12px; font-weight: bold; color: #313131;">数量（件）</td>
                <td width="106" bgcolor="#fdeade" style="font-size: 12px; font-weight: bold; color: #313131;">小计</td>
                <td width="80" bgcolor="#fdeade" style="font-size: 12px; font-weight: bold; color: #313131;">操作</td>
            </tr>
        </table>
        <!--书本展示-->
        <form action="/index.php/Goodstest/order" method='post' id='myform' onkeypress="if(event.keyCode==13||event.which==13){return false;}">
            <div class="show" style="width:970px">

                <div class="bookone" id="cart" style="width:970px;">
                    <?php foreach ($products as $product) { ?>

                    <table width="957" border="0" cellspacing="0" class="cart_<?php echo $product['key']; ?>"  class="check_<?php echo $product['key']; ?>"/>
                    <!--书本展示一-->
                    <tr>
                        <!--  宝贝一-->
                        <td width="10"><input type="checkbox" name="cart_id[]" value="<?php echo $product['key']; ?>" reachName=''  checked="checked" class="check_<?php echo $product['key']; ?>" /></td>
                        <td width="80"><a  href="<?php echo $product['href'];?>" target="_blank">
                                <div class="baobei" style="background:url('<?php echo $product['thumb'];?>'); cursor:pointer"></div>
                            </a></td>
                        <td width="353" style="font-size: 12px; color: #535353; text-align:left"><em >
                                <a  href="/index.php/goods/index/id/3225" target="_blank"><?php echo $product['name'];?> <span class="reachName"></span> 				  </a>
                            </em>
                        </td>
                        <td width="144"><p style="font-size: 14px; color: #313131; font-family: Arial, Helvetica, sans-serif, '宋体', '黑体'; text-align:center">

                                ￥<span id="shop_price_<?php echo $product['key']; ?>"><?php echo $product['price'];?></span></p>
                            <p id="ziti" style="text-align:center"><?php echo $product['price'];?></p></td>
                        <td width="90" style="font-size: 14px; color: #7f7e7e; font-weight: bold;">0</td>
                        <td width="111">
                            <div class="tb">
                                <a href="javascript:void(0);" id="diminished" data="<?php echo $product['key']; ?>">
                                    <img src="image/buy_20.jpg" width="24" height="24" /></a>
                                <input type="text" name="number[<?php echo $product['key']; ?>]" id="goods_<?php echo $product['key']; ?>" value="<?php echo $product['quantity']; ?>" data="<?php echo $product['key']; ?>" class="goods_num" style="width:20px;" />
                                <a href="javascript:void(0);" id="augmented" data="<?php echo $product['key']; ?>">
                                    <img src="image/buy_22.jpg" width="24" height="24" /></a></div></td>
                        <td width="112" style="color: #f37020; font-weight: bold; font-size: 12px;"><span id="subtotal_<?php echo $product['key']; ?>" class="subtotal" data="<?php echo $product['key']; ?>"><?php echo $product['total'];?></span></td>
                        <td width="57" id="shanchu">
                            <a href="javascript:void(0)" id="delete" data='<?php echo $product['key']; ?>'>删除</a>
                        </td>
                    </tr>
                    </table>
                    <?php } ?>


                    <div style="clear:both;"></div>
                </div>
            </div>

    </div>
    <!--继续购买-->
    <div class="buy">
        <table width="980" border="0" cellspacing="0">
            <tr>
                <td width="299">&nbsp;</td>
                <td width="425">&nbsp;</td>
                <td width="84">&nbsp;</td>
                <td width="164" height="63" style="text-align:left; line-height:24px;">
                    <!--
                    <span class="span_1">商品金额</span>：<span class="span_2">￥<b id="totalPrice">0.00</b></span>
                    <br />
                    <span class="span_1">　　优惠</span>：<span class="span_2">- <b id="youhui">0.00</b></span>
                    <br />
                    -->

                    <?php foreach ($totals as $total) { ?>

                    <?php if( $total['code'] == 'total'){ ?>
                        <?php continue; ?>
                    <?php } ?>
                    <span class="span_1" >
                        <?php echo $total['title']; ?></span>：
                    <span class="span_2"><b id="totalPrice"><?php echo $total['text']; ?></b></span>
                    <br />
                    <?php } ?>
                </td>
            </tr>

            <?php foreach ($totals as $total) { ?>
                <?php if( $total['code'] != 'total'){ ?>
                    <?php continue; ?>
                <?php } ?>
            <tr>
                <td>&nbsp;</td>
                <td height="46">&nbsp;</td>
                <td colspan="2" style=" border-top:1px solid  #fbccb0;">
                    <span class="span_1"><?php echo $total['title']; ?></span>：
                    <span class="span_2" style="font-size:24px;"><b  id="totalPrices"><?php echo $total['text']; ?></b></span>
                </td>
            </tr>
            <?php } ?>

            <tr>
                <td bgcolor="#fdeade" style="padding-left:6px;" align="left"><a href="/"><img src="image/button2.jpg" width="92" height="24" /></a></td>
                <td height="40" colspan="2" bgcolor="#fdeade">&nbsp;</td>
                <td bgcolor="#fdeade"  style="padding-left:35px;">
                    <a href="<?php echo $checkout ?>" id="submit_button">
                        <img src="image/button1.jpg" width="109" height="31" />
                    </a>
                </td>
            </tr>

        </table>
    </div>
    </form>
    <!--热卖商品-->
    <link type="text/css" href="css/widget/hslider_style1.css" rel="stylesheet"/>
    <script type="text/javascript" src="js/jquery.hslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".hsliber").hslider({width:920});
        });
    </script>
    <div class="selling_big hsliber">
        <div class="selling_big_biao">热销商品</div>
        <s class="slide_control_l" style="display:none"></s>
        <div style="position:relative; top:20px; height:220px; margin:0 auto; width:920px; overflow:hidden">
            <ul class="selling" style="left:0; top:0; padding-left:0">
                <li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2014-05-12/537090cc25895.jpg.150x150.jpg)" title="MK8周年漫画短篇集" href="/index.php/Goods/index/id/3297"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3297" title="MK8周年漫画短篇集">MK8周年漫画短篇集...</a></h3>
                    <p>￥12.00</p>
                </li><li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2014-04-25/5359c0d7697c6.jpg.150x150.jpg)" title="爱萌1.0绕线器" href="/index.php/Goods/index/id/3281"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3281" title="爱萌1.0绕线器">爱萌1.0绕线器...</a></h3>
                    <p>￥15.00</p>
                </li><li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2014-04-04/533e74bba0117.jpg.150x150.jpg)" title="MK梦想快递明信片" href="/index.php/Goods/index/id/3264"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3264" title="MK梦想快递明信片">MK梦想快递明信片...</a></h3>
                    <p>￥12.00</p>
                </li><li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2014-02-21/5306a21e71d1e.jpg.150x150.jpg)" title="《龙族3黑月之潮 ·下》" href="/index.php/Goods/index/id/3225"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3225" title="《龙族3黑月之潮 ·下》">《龙族3黑月之潮 ·下...</a></h3>
                    <p>￥33.20</p>
                </li><li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2014-02-19/5304180a54dfe.jpg.150x150.jpg)" title="MK斗罗字母小印章" href="/index.php/Goods/index/id/3219"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3219" title="MK斗罗字母小印章">MK斗罗字母小印章...</a></h3>
                    <p>￥3.50</p>
                </li><li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2014-02-13/52fc7e0ba2371.jpg.150x150.jpg)" title="现货！2014MK同学录" href="/index.php/Goods/index/id/3216"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3216" title="现货！2014MK同学录">现货！2014MK同学录...</a></h3>
                    <p>￥28.00</p>
                </li><li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2013-12-10/52a6da4c1b40d.jpg.150x150.jpg)" title="新MYpoker斗罗大陆扑克MKtoy277" href="/index.php/Goods/index/id/3170"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3170" title="新MYpoker斗罗大陆扑克MKtoy277">新MYpoker斗罗大陆扑克...</a></h3>
                    <p>￥12.00</p>
                </li><li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2013-10-25/526a0dc3d8a0a.jpg.150x150.jpg)" title="MK斗兽棋" href="/index.php/Goods/index/id/3124"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3124" title="MK斗兽棋">MK斗兽棋...</a></h3>
                    <p>￥18.00</p>
                </li><li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2013-10-17/525fa42ad9906.jpg.150x150.jpg)" title="MK 37°爱贺卡" href="/index.php/Goods/index/id/3114"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3114" title="MK 37°爱贺卡">MK 37°爱贺卡...</a></h3>
                    <p>￥16.00</p>
                </li><li><a class="productImg-wrap" style="background:url(/Uploads/Goods/2013-10-15/525cf4eb61ee8.jpg.150x150.jpg)" title="MK斗罗时光项链" href="/index.php/Goods/index/id/3112"></a>
                    <h3 class="wenzhi"><a href="/index.php/Goods/index/id/3112" title="MK斗罗时光项链">MK斗罗时光项链...</a></h3>
                    <p>￥48.00</p>
                </li>      </ul>
        </div>
        <b class="slide_control_r" style="display:none"></b>
        <div class="clear"></div>
    </div></div>



<?php echo $footer; ?>
