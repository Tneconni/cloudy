
<?php
$cat_i = 1;
foreach( $categories as $cat ){ ?>
<div class="da_beijing">
    <div class="classify_biao classify_biao_<?php echo $cat_i;?>">
        <a href="<?php echo $cat['href'];?>" class="cate_more">更多&gt;&gt;</a>
        <a href="<?php echo $cat['href'];?>" class="cate_link"></a>
    </div>
    <!--图片排列-->
    <div class="Picture_Arrangement">
        <ul class="product_shelves" id="news">
            <?php foreach($cat['products'] as $products ){ ?>
            <li>
                <a href="<?php echo $products['href'];?>"
                    class="tupian"
                    target="_blank">
                    <img src="<?php echo $products['image'];?>" />
                </a>

                <div class="wen_sm">
                    <a href="/index.php/goods/index/id/3307" target="_blank"><?php echo $products['name'];?></a>
                    <p> ￥9.00</p>
                </div>
            </li>
            <?php } ?>
            <div class="clear"></div>

        </ul>
    </div>
    <!--最热排行榜-->
    <div class="list_big list_beijing_<?php echo $cat_i;?>">
        <ul class="list_host">
            <!--
            <li class="lihover"><a href="/index.php/goods/index/id/3307" class="Text_color_2" target="_blank">73辑《漫客·绘意》 [赠飞..</a>
                <div class="graphic">
                    <a href="/index.php/goods/index/id/3307" style="background:url(/Uploads/Goods/2014-05-21/537c662f7e91f.jpg.50x50.jpg)"
                       class="tu" target="_blank"></a>
                    <div class="wen">￥9.00</div>
                </div>
                <div class="clear"></div>
            </li>
            <li><a href="/index.php/goods/index/id/3306" title="312期《知音漫客》萌周刊" target="_blank">312期《知音漫客》萌周刊</a></li>
            <li><a href="/index.php/goods/index/id/3301" title="311期《知音漫客》幻周刊" target="_blank">311期《知音漫客》幻周刊</a></li>
            <li><a href="/index.php/goods/index/id/3294" title="310期《知音漫客》锐周刊" target="_blank">310期《知音漫客》锐周刊</a></li>
            <li><a href="/index.php/goods/index/id/3291" title="75期《漫客星期天》" target="_blank">75期《漫客星期天》</a></li>
            <li><a href="/index.php/goods/index/id/3290" title="74期《漫客星期天》" target="_blank">74期《漫客星期天》</a></li>
            <li><a href="/index.php/goods/index/id/3285" title="VOL.02《漫客栈》" target="_blank">VOL.02《漫客栈》</a></li>
            <li><a href="/index.php/goods/index/id/3282" title="309期《知音漫客》燃周刊" target="_blank">309期《知音漫客》燃周刊</a></li>
            <li><a href="/index.php/goods/index/id/3277" title="308期《知音漫客》萌周刊" target="_blank">308期《知音漫客》萌周刊</a></li>
            <li><a href="/index.php/goods/index/id/3273" title="71辑《漫客·绘意》 [赠精美大海报]" target="_blank">71辑《漫客·绘意》 [赠精美大</a></li>
            -->
        </ul>
    </div>
    <div class="clear"></div>

    <!--广告-->

    <div style="height:95px; padding-top:5px;"><a href="http://shop.zymk.cn/index.php/goods/index/id/3231" target="_blank">
            <img src="/Uploads/Ad/2014-03-19/5329411301c13.jpg" width="968" height="90" /></a>
    </div>
</div>

<?php $cat_i++; }?>


