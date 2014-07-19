<?php echo $header; ?>

<link href="catalog/view/theme/manka/stylesheet/manka/shopping.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/manka/stylesheet/manka/widget/hslider_style1.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/manka/stylesheet/manka/order.css" rel="stylesheet" type="text/css" />

<style>
    body{ background:#fff; text-align:left;}
    .baobei {
        background-position: center center !important;
        background-repeat: no-repeat !important;
        border: 1px solid #E5E5E5;
        display: inline;
        float: left;
        height: 60px;
        margin-left: 20px;
        width: 60px;
    }
    .goods_info {
        margin-left:70px;
        display:none;
    }
    .goods_info li{
        text-align:left;
    }
    .goods_info li input{color:#333333;}
    .return_cart{float:right; padding-right:20px; font-weight:normal; color:#f33400; font-family: Arial, Helvetica, sans-serif, 宋体, 黑体;}
    .address {font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #313131; padding-left:18px; padding-top:0px;}
    .wenzi { padding-bottom:10px;}
    .wenzi span { text-align:left;}
    #payment {height:495px;}
    .framework{height:410px; padding-bottom:10px;};
    .td_table{font-size: 12px; font-family: Arial, Helvetica, sans-serif; color: #626262;}

    .td_table_1{font-family: Arial, Helvetica, sans-serif; font-size: 12px;  border-bottom:1px solid  #dcdcdc; background:#FFFFFF}
    .td_table_2{color: #535353;}
    .td_table_3{color: #666;}
    .td_table_4{color: #333;}
    .td_text{width:400px; height:100px; font-size:12px; color:#666666; border:1px #CCCCCC solid; padding:3px 5px; resize: none;}
    .td_span_1{font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #313131;}
    .td_span_2{font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: #ED7447;}
    .td_span_3{font-family: Arial, Helvetica, sans-serif; font-size: 14px;}
</style>
<!--logo+导航-->
<div id="logo">
    <?php echo $navigation;?>
</div>

<form action="/index.php/goodstest/submitorder" method="post" id="myform"  name="myform">
<div id="information">
    <div class="shelf shelf_1" style="padding-bottom:10px">
        <h2><span style="color: #707070;" >收货信息</span>&nbsp;&nbsp;<span style="color: #f33600; font-weight: normal;"><a href="/index.php/User/Consignee/index" target="_blank">[管理收货地址]</a></span></h2>
        <!-- 填写个人信息-->
        <div class="form" style="padding-bottom:10px">
            <!--收货人文字-->
            <?php foreach( $addresses as $addr ){ ?>
            <p class="words">
                <input name="address_id" type="radio" value="<?php echo $addr['address_id']?>"/>
                <span class="address"><?php echo $addr['address']?></span>
                &nbsp;&nbsp;&nbsp;
                <span data="<?php echo $addr['address_id']?>" class="delete_add_b" style="cursor:pointer; color:#999999">删除</span>
            </p>
            <?php } ?>

            <!--填写信息-姓名-->
            <ul class="goods_info">
                <li> 收&nbsp&nbsp货&nbsp&nbsp人：
                    <input  type="text" name="address[consignee]"/>
                    &nbsp;&nbsp;<span >请输入收货人姓名</span></li>
                <!--地区文字及选项 -->
                <li  class="area" style="padding-left:0; height:45px">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp区：
                    <script type="text/javascript" src="js/getarea.js"></script>
                    <select name="address[province]" id="province" >
                    </select>
                    <select name="address[city]" id="city">
                    </select>
                    <select name="address[district]" id="district" >
                    </select>
                    <span>&nbsp;&nbsp;&nbsp;选择正确的县镇／街道可提升送货速度</span></li>

                <li>
                    <p style="padding-left:72px">
                        <input  type="text" name="address[address]" class="address" style="width:400px"/>
                        &nbsp;&nbsp;填写详细地址</p>
                </li>
                <li style="padding-left:0px;">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：
                    <input name="address[mobile_phone]" type="text" />
                </li>
                <li style="padding-left:0px;">座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：
                    <input name="address[fixed_phone]" type="text" />
                </li>
                <li style="padding-left:0px;">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编：
                    <input name="address[zipcode]" type="text" />
                </li>
                <li style="padding-left:0px;"> <a href="javascript:void(0);" class="address_button" style="padding-bottom:0"><img src="image/index_57.jpg" width="130" height="30" style="padding-bottom:0"/></a> </li>
            </ul>
        </div>
        <!--确认按钮-->
    </div>
</div>
<!--支付及配送方式-->
<div id="payment">
    <div class="pay">
        <h2><span style="color: #707070;" >支付方式</span>&nbsp;&nbsp;
            <!--<span style="color: #f33600; font-weight: normal;"><a href="#">[修改]</a></span>-->
        </h2>
        <!--  支付选项 -->
        <div class="framework">
            <!--在线支付选项-->
            <p class="words" style="font-weight: bold">在线支付
            <p>
                <!--  支付宝-->
            <div style=" height:60px;">
                <p class="tubiao">
                    <input name="pays" type="radio" value="1" />
                </p>
                <p  class="tupian"><img src="image/index_55.jpg" width="125" height="41" /></p>
                <p class="wenzi"><span>支付宝，是支付宝公司针对网上交易而特别推出的安全付款服务，其运作的实质 是以支付宝为信用中介，在买家确认收到商品前，由支付宝替买卖双方暂时保管货款的一种增值服务。 （网址：http://www.alipay.com）</span></p>
            </div>
            <div class="clear"></div>
            <!--网上银行-->
            <div class="banknet">
                <p class="tubiao">
                    <input name="pays" type="radio" value="1" />
                </p>
                <p  class="tupian"><img src="image/prepaid_3.jpg" width="125" height="41" /></p>
                <p class="wenzi"><span>网银支付（支付宝）与中国工商银行、招商银行、中国建设银行、农业银行、民生银行等50多家金融机构达成协议。全面支持全国50多家银行的信用卡及借记卡实现网上支付。网址：http://www.alipay.com</span></p>
            </div>

            <!--只限在线支付时隐藏-->
            <!--  站内支付-->
            <p class="words"><b>站内支付</b><p>
                <!--  余额付款-->
            <div style=" height:60px;">
                <p class="tubiao">
                    <input name="pays" type="radio" value="2" />
                </p>
                <p  class="tupian"><img src="image/index_60.jpg" width="125" height="41" /></p>
                <p class="wenzi"><span>余额付款</span></p>
            </div>
            <div class="clear"></div>
            <!-- 线下支付-->
            <p class="words" style="font-weight: bold">线下支付<p>
                <!--  线下支付-->
            <div style=" height:60px;">
                <p class="tubiao">
                    <input name="pays" type="radio" value="3" />
                </p>
                <p  class="tupian"><img src="image/index_61.jpg" width="125" height="31" /></p>
                <p class="wenzi">
                    <span>收款人信息</span><br>
                    <span>姓名：知音漫客（商城）</span><br>
                    <span>地址：湖北省武汉市武昌东湖路169号</span><br>
                    <span>邮编：430077</span><br>
                    <span>汇款注意事项：在汇款单的附言处一定要注明您在漫客商城下的订单号！并且留下您的联系电话。</span><br />
                    <span style="color:#FF0000">邮局汇款周期较长（2-3周左右），介意者慎选！推荐使用在线支付。</span>
                </p>
            </div>        <div class="clear"></div>
        </div>
        <!--支付及配送方式按钮-->
        <!--    <div class="button2">
      <p class="anniu"> <img src="image/index_31.jpg" width="145" height="30" /></p>-->
    </div>
</div>

<!--商品清单-->
<div class="List" style="height:auto; padding-bottom:10px">
    <div class="shangpin">
        <h2>
            <p><span class="return_cart"><a href="/index.php/Cart/index/">返回购物车修改商品>></a></span><span style=" float:left;">商品清单</span></p>
        </h2>
    </div>
    <!-- 商品展示-->
    <table width="90%" border="0" cellspacing="0" height="189" style="margin-top:10px">
        <tr bgcolor="#fdf8e2">
            <td width="106" height="30" align="center" class="td_table">商品图片</td>
            <td width="310" height="30" class="td_table">商品名称</td>
            <td width="142" height="30" class="td_table">价格</td>
            <td width="92" height="30" class="td_table">赠送积分</td>
            <td width="92" height="30" class="td_table" >数量</td>
            <td width="51" height="30" class="td_table">小计</td>
        </tr>
        <!--图片展示-->

        <?php foreach( $products as $product ){ ?>
        <input type="hidden" name="cart_id[]" value="<?php echo $product['key']?>" w="0.850"/>
        <input type="hidden" name="number[<?php echo $product['key']?>]" value="<?php echo $product['quantity']?>" />
        <tr bgcolor="#EFEFEF">
            <td width="106" height="70" bgcolor="#ffffff" style="border-bottom:1px solid  #dcdcdc;" >
                <a  href="<?php echo $product['href']; ?>" target="_blank">
                    <div class="baobei"
                         style="background:url(<?php echo $product['image'];?>);">

                    </div>
                </a>
            </td>

            <td height="70" class="td_table_1 td_table_2 ">
                <a  href="<?php echo $product['href'];?>" target="_blank">
                    <?php echo $product['name'];?>
                </a>
                <span class="reachName"></span><br>
                <font color="#999999">重量: <?php echo $product['weight'];?></font>
            </td>

            <td height="70" class="td_table_1">
                <p style="font-size: 14px; border-bottom:none" class="td_table_1 td_table_3">
                    <span style="font-size: 12px">￥</span><?php echo $product['price'];?></p>
                <p id="link" style="text-decoration: line-through;color: #999;">￥<?php echo $product['price'];?></p>
            </td>

            <td height="70" class="td_table_1 td_table_4" ><?php echo $product['reward'];?></td>
            <td height="70" class="td_table_1 td_table_4" ><?php echo $product['quantity'];?></td>
            <td height="70" class="td_table_1 td_table_4" >￥<?php echo $product['total'];?></td>
        </tr>
        <?php } ?>

    </table>

    <!--商品金额总计-->
    <table width="100%" border="0" cellspacing="0" height="160">
        <tr>
            <td width="550" rowspan="3"><table>
                    <tbody>
                    <tr>
                        <td align="left" height="28px">买家留言：</td>
                    </tr>
                    <tr>
                        <td><textarea id="msg" class="td_text" name="msg">您可以在这里给商家留言</textarea></td>
                    </tr>
                    </tbody>
                </table></td>
            <td height="120" width="550" rowspan="2" align="right">
                <table width="90%">
                    <tbody>

                    <?php foreach( $totals as $total ){ ?>
                    <tr>
                        <td width="330" height="28" align="right">
                            <span class="td_span_1"><?php echo $total['title'];?>：</span>
                        </td>
                        <td height="28" align="right">
                            <span class="td_span_3"></span>
                            <span id="goods_amount" class="td_span_2"><?php echo $total['text'];?></span>
                        </td>
                    </tr>
                    <?php }?>


<!--
                    <tr>
                        <td width="330" height="28" align="right">
                            <span class="td_span_1">商品总额：</span>
                        </td>
                        <td height="28" align="right">
                            <span class="td_span_3"></span><span id="goods_amount" class="td_span_2">132.4</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="330" height="28" align="right">
                            <span class="ship_tip" style="color:#990033"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="td_span_1">运费：</span>
                        </td>
                        <td align="right">
                            <span class="td_span_3"></span><span id="shipping_fee" class="td_span_2">0.00</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="330" height="28" align="right">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="td_span_1">优惠：</span></td>
                        <td align="right">
                            <span class="td_span_3"></span><span id="youhui" class="td_span_2">0.00</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="330" height="28" align="right">
                            <span class="td_span_1">应付总额：</span>
                        </td>
                        <td align="right">
                            <span class="td_span_3">￥</span><span id="order_amount" class="td_span_2">132.4</span>
                        </td>
                    </tr>
-->
                    </tbody>
                </table>
            </td>
        </tr>
        <tr> </tr>
        <!--商品提交按钮-->
        <tr>
            <td height="30" width="578" align="right">
                <p style=" float:right; padding-right:20px;">
                    <img src="image/index_47.jpg" width="150" height="40"
                         style="cursor:pointer"
                         class="order_submit_button"/>
                </p>
            </td>
        </tr>
    </table>
</div>


</form>

<script>
    $('.order_submit_button').click(function(){

        var url = '<?php echo $confirmOrderUrl; ?>';
        var data = {
            shipping_address_id : $('input[name=\'address_id\']').val(),
            payment_method_code : $('input[name=\'pays\']').val()
        };

        $.post(url, data, function( res ){

            if( res['status'] == 'success' ){

                var order_id = res['order']['order_id'];
                location = '<?php echo $orderSuccessUrl;?>' + '&order_id=' + order_id;

            }else{
                alert('false');
            }

        },'json');

    });
</script>
<?php echo $footer; ?>