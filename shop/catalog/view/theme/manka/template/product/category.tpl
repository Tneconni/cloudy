<?php echo $header; ?>
<link href="catalog/view/theme/manka/stylesheet/manka/Goods_list.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/manka/stylesheet/manka/Inside_pages_common.css" rel="stylesheet" type="text/css" />
<div class="nav_big">
    <!--============================================================left-->
    <!--分类导航-->

    <div class="left_big" style="margin-top:292px; padding-top:0px">
        <!--
        <div class="new_left mt_left">
            <div class="biao biao_1"></div>
            <ul>
                <li >
                    <div class="img"><a href="/index.php/goods/index/id/3305" style="background:url(/Uploads/Goods/2014-05-16/5375ddf2e9848.jpg.110x110.jpg)"  class="hong_x"></a></div>
                    <div class="tb_sm"><a href="/index.php/goods/index/id/3305" class="hong_w">MK姓名贴...</a></div>
                    <div class="tb_sm">商城价 <font>￥5.00</font></div>

                </li><li >
                    <div class="img"><a href="/index.php/goods/index/id/3304" style="background:url(/Uploads/Goods/2014-05-16/5375af57e98dc.jpg.110x110.jpg)"  class="hong_x"></a></div>
                    <div class="tb_sm"><a href="/index.php/goods/index/id/3304" class="hong_w">MK小小漫画家...</a></div>
                    <div class="tb_sm">商城价 <font>￥16.00</font></div>

                </li><li >
                    <div class="img"><a href="/index.php/goods/index/id/3302" style="background:url(/Uploads/Goods/2014-05-15/53747fc23d37c.jpg.110x110.jpg)"  class="hong_x"></a></div>
                    <div class="tb_sm"><a href="/index.php/goods/index/id/3302" class="hong_w">现货！舞·星...</a></div>
                    <div class="tb_sm">商城价 <font>￥58.00</font></div>

                </li><li >
                    <div class="img"><a href="/index.php/goods/index/id/3300" style="background:url(/Uploads/Goods/2014-05-13/5371c5babc680.jpg.110x110.jpg)"  class="hong_x"></a></div>
                    <div class="tb_sm"><a href="/index.php/goods/index/id/3300" class="hong_w">MK大徽章...</a></div>
                    <div class="tb_sm">商城价 <font>￥12.00</font></div>

                </li><li >
                    <div class="img"><a href="/index.php/goods/index/id/3299" style="background:url(/Uploads/Goods/2014-05-13/537176ecd759d.jpg.110x110.jpg)"  class="hong_x"></a></div>
                    <div class="tb_sm"><a href="/index.php/goods/index/id/3299" class="hong_w">7-8册《浪漫传...</a></div>
                    <div class="tb_sm">商城价 <font>￥15.00</font></div>

                </li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="record_big">

            <div class="record_big_biao"></div>
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
        </div>
        -->
    </div>
    <!--====================================right-->
    <div class="combination_right combination_right_ml">
        <!--你的位置-->
        <div class="position_common">您的当前位置：
            <?php $count = count($breadcrumbs) - 1; ?>
            <?php foreach($breadcrumbs as $key=>$nav ){ ?>
                <a href="<?php echo $nav['href'];?>"><?php echo $nav['text'];?></a>
                <?php if( $key <  $count ){ ?>><?php }?>
            <?php } ?>
        </div>
        <!--分类查找-->
        <!--相关商品数-->
        <div class="Number_goods">
            <span>相关商品<font><?php echo $product_total;?></font>款 </span></div>
        <!--图片排列方式-->
        <ul class="arrangement_big">
            <div class="pages_fan">
                <span></span>
                <?php echo $paginationObj->total; ?>/<?php echo $paginationObj->page; ?>
                <span class="next_page">
                    <a href="<?php echo $paginationObj->total; ?>"></a>
                </span>
                <span class="previous_page">
                    <a href="/index.php/Category/index/id/225?&page=0"></a>
                </span>
            </div>

            <?php foreach( $sorts as $sort ){ ?>
            <li>
                <a href="<?php echo $sort['href'];?>" ><?php echo $sort['text'];?></a>
                <?php if(strpos( $sort['value'], 'DESC' ) !== false){ ?>
                <s class="xia"></s>
                <?php }?>
                <?php if(strpos( $sort['value'], 'ASC' ) !== false){ ?>
                <s class="shang"></s>
                <?php }?>
            </li>
            <?php } ?>
            <!--
            <li><a href="" >价格</a><s class="xia"></s></li>
            <li><a href="" >人气</a><s class="xia"></s></li>
            -->
            <!--<li><a href="#">大图</a><b class="da"></b></li>
            <li><a href="#">小图</a><b class="xiao"></b></li>-->
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>


        <!--图片排列-->
        <div class="Picture_Arrangement">

            <?php foreach( $products as $pdt ){ ?>

            <div class="Picture_li">
                <div class="product-iWrap_1">
                    <a href="<?php echo $pdt['href'];?>" class="productImg-wrap"
                       style="background:url(<?php echo $pdt['thumb'];?>)"
                       title="<?php echo $pdt['name'];?>"></a>
                    <h3 class="wenzhi">
                        <a href="<?php echo $pdt['href'];?>"
                            title="<?php echo $pdt['name'];?>"><?php echo $pdt['name'];?></a>
                    </h3>
                    <p><span><?php echo $pdt['price'];?></span></p>
                    <p class="anliu_big">
                        <s></s>
                        <a href="javascript:void(0);"
                           class="add-to-card"
                           id="product-<?php echo $pdt['product_id']; ?>">添加到购物车</a>
                    </p>
                </div>
            </div>

            <?php } ?>

        </div>
        <div class="clear"></div>
        <!--页码-->
        <div id="pages" style="float:right;">
        </div>



        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<script>

    $('.add-to-card').click(function(){

        addToCart( this.id.split('-')[1], 1);

    });

</script>
<?php echo $footer; ?>