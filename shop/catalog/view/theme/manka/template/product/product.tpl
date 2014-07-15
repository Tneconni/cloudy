<?php echo $header; ?>
<link href="catalog/view/theme/manka/stylesheet/manka/Goods_details_test.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/manka/stylesheet/manka/Inside_pages_common.css" rel="stylesheet" type="text/css" />
<input type="hidden"  id="nav-show" />
<div class="nav_big">
<!--导航指示牌-->
<div class="position Id"> <s></s> 您的当前位置：
    <?php $breadNum = count( $breadcrumbs ) - 1; ?>
    <?php foreach( $breadcrumbs as $key=>$bread ){ ?>
        <a href="<?php echo $bread['href']; ?>"><?php echo $bread['text']; ?></a>
        <?php if( $key < $breadNum ){ ?>
            <span>＞</span>
        <?php } ?>
    <?php } ?>

    <!--
    <span>＞</span>
    <a href="/index.php/Home/Category/index/id/161">昨日青空</a>
    -->
</div>
<!--商品展示-->
<div class="Product_presentation_big">
    <!--大图片展示-->
    <div class="tu_presentation_big">
        <a href="javascript:void(0);" class="tu_big"
           style="background-image:url(<?php echo $images[0]['popup'] ?>)"></a>
        <!--小图片展示-->
        <div class="tu_xiao">
            <a href="javascript:void(0);" class="spec-control" style="left:3px"></a>
            <a style="right:2px" href="javascript:void(0);" class="spec-control_1"></a>
            <div style="position:relative;width:332px; margin:0px auto;
             overflow:hidden; height:100%" class="xiaotu_container">
                <ul class="xiaotu" style="width:1000%; left:0">
                    <?php foreach( $images as $key => $image){  ?>
                    <li
                        <?php if( $key == 0 ){ ?>
                            style="margin-left:0"
                        <?php } ?>
                    >
                        <a href="javascript:void(0);"
                           class="tu_mini <?php if( $key == 0 ){ ?>img_hover <?php } ?>"
                           source-data="<?php echo $image['popup']; ?>"
                           style="background:url(<?php echo $image['thumb']; ?>);"></a>
                    </li>
                    <?php } ?>


                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!--文字介绍-->
    <div class="Text_introduce_big">
        <input type="hidden" name="goods_id" id="goods_id" value="1327"/>
        <!--标题介绍-->
        <h1> <?php echo $heading_title; ?>
            <span>货  号：<font id="goods_sn" title=""><?php echo $product_id; ?></font></span>
        </h1>
        <!--定价-->
        <ul class="price_big">
            <li class="sale_price">
                <span>价 格：</span>
    			<span>
                    <strong id="shop_price" title="28.00"><?php echo $price; ?></strong>
		    	</span>
            </li>
            <li>
                <span>配 送 至：</span>
                <div id="TreeSelectTrigger">
                    <a href="javascript:void(0)" style="line-height:28px; float:left;">
                        请选择
                    </a>
			        <span class="nan" id="shipping"
                          style="line-height:28px; margin-left:10px">
          		    </span>
                </div>
            </li>
        </ul>
        <!--商品选择-->
        <div class="Product_selection">
            <!--图书类型-->
            <dl  class="huibj">
                <dt>购买数量：</dt>
                <dd class="number">
                    <span>
                        <input name="" type="text" value="1" class="buy_num"/>
                        <s class="add_button"></s>
                        <b class="sub_button"></b>
                    </span>件
                    <font style="display:none" id="goods_number" title="28">(库存<?php echo $stock; ?>件)</font>
                </dd>
            </dl>
        </div>
        <!--购物车标-->
        <div class="tb-action_big" style="margin-left:82px; width:450px">
            <a href="#" class="mai"></a>
            <a id="product-<?php echo $product_id; ?>" class="add-to-cart gouwuche" style="cursor:pointer"></a>
            <s></s><span class="favgoods" style="cursor:pointer">收藏商品</span>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<script>

    $('.add-to-cart').click(function(){

        var productNum = parseInt( $('.buy_num').val() );
        addToCart( this.id.split('-')[1], productNum );

    });

    function changeProductNum(){
        var sign = arguments[0];

        var productNum = parseInt( $('.buy_num').val() );

        if(sign == '+'){
            productNum ++;
        }else if( productNum > 1 ){
            productNum --;
        }
        $('.buy_num').val( productNum );

    }

    $('.buy_num').keyup(function(){

        var productNum = parseInt( $('.buy_num').val().replace(/^(\s+)|(\s+)$/,'') );
        var dataReg = /[\d+]/g;

        if( !dataReg.test(productNum) ||  productNum == 0 ){

            productNum = 1;

        }

        $('.buy_num').val( productNum );

    });

    $('.add_button').click(function(){

        changeProductNum('+');

    });

    $('.sub_button').click( function(){

        changeProductNum('-');

    });

    $('.tu_mini').mouseover(function(){

        var sourceImg = $(this).attr('source-data');
        $('.tu_big')[0].style.backgroundImage =  "url("+sourceImg+")";

        $('.tu_mini').removeClass('img_hover');
        $( this ).addClass('img_hover');
    });

</script>

<!--新品上架=================left-->
<div class="New_product">     <div class="new_left mt_left">
        <div class="biao biao_1"></div>
        <ul>
            <!--
            <li >
                <div class="img"><a href="/index.php/goods/index/id/3305" style="background:url(/Uploads/Goods/2014-05-16/5375ddf2e9848.jpg.110x110.jpg)"  class="hong_x"></a></div>
                <div class="tb_sm"><a href="/index.php/goods/index/id/3305" class="hong_w">MK姓名贴...</a></div>
                <div class="tb_sm">商城价 <font>￥5.00</font></div>

            </li>
            -->
        </ul>
        <div class="clear"></div>
    </div>    <!--浏览记录-->
    <!--<div class="record_big">
      <div class="record_big_biao"></div>
      <a class="record_left" style="background:url(images/img/gai_65.jpg)"></a>
      <div class="record_right">
        <p>知音漫客知音漫客知音漫客知音漫客</p>
        <p><span>￥25</span>现价<font>￥15</font></p>
        <p><b>已销售15件</b></p>
      </div>
    </div>-->
    <div class="record_big">

        <div class="record_big_biao"></div>
        <!--
        <div style="height:89px; padding-bottom:8px;">
            <a class="record_left" style="background: url(/Uploads/Goods/2014-05-16/5375af57e98dc.jpg.50x50.jpg)" href="/index.php/home/goods/index/id/3304" title="MK小小漫画家"></a>
            <div class="record_right">
                <p><a href="/index.php/home/goods/index/id/3304"  title="MK小小漫画家">MK小小漫画家</a></p>
                <p>商城价<font>￥16.00</font></p>

            </div>
        </div>
        <div style="height:89px; padding-bottom:8px;border-top: 1px dashed #FA802A;">
            <a class="record_left" style="background: url(/Uploads/Goods/2013-06-28/51cd335d19adc.jpg.50x50.jpg)" href="/index.php/home/goods/index/id/1327" title="《昨日青空》（下）随书附赠精美卡贴"></a>
            <div class="record_right">
                <p><a href="/index.php/home/goods/index/id/1327"  title="《昨日青空》（下）随书附赠精美卡贴">《昨日青空》（下）随书附赠精美卡贴</a></p>
                <p>商城价<font>￥28.00</font></p>

            </div>
        </div>
        -->
    </div>
    <div class="clear"></div>
</div>
<!--商品组合================right-->
<div class="combination_right">

<!--产品详情===============================================================-->
<ul class="Product_introduction_biao">
    <li ><a href="javascript:void(0);" class="goods_desc hongdi">产品详情</a></li>
    <!--
    <li><a href="javascript:void(0);" class="goods_qa">购买咨询(1)</a></li>
    <li><a href="javascript:void(0);" class="goods_comment">商品评价(12)</a></li>
    -->
</ul>
<!--================================================================这一块暂时隐藏-->
<div class="Product_introduction">

    <div class="wen">
        <?php echo $description;?>
      </div>
</div>

<div id="comment" class="content_2"> </div>
</div>
<div class="clear"></div>
</div>

<?php echo $footer; ?>