<!--
<div class="box">
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="box-content">
    <div class="box-product">
      <?php foreach ($products as $product) { ?>
      <div>
        <?php if ($product['thumb']) { ?>
        <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></a></div>
        <?php } ?>
        <div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
        <?php if ($product['price']) { ?>
        <div class="price">
          <?php if (!$product['special']) { ?>
          <?php echo $product['price']; ?>
          <?php } else { ?>
          <span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
          <?php } ?>
        </div>
        <?php } ?>
        <?php if ($product['rating']) { ?>
        <div class="rating"><img src="catalog/view/theme/default/image/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></div>
        <?php } ?>
        <div class="cart"><input type="button" value="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');" class="button" /></div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

-->

<div class="product_shelves_big">
    <div class="product_shelves_biao"><span class="shelves"></span></div>
    <!--产品列表-->
    <ul class="product_shelves" id="news">
        <li> <a href="/index.php/goods/index/id/3305" class="tupian" style="background:url(/Uploads/Goods/2014-05-16/5375ddf2e9848.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3305" target="_blank">MK姓名贴</a>
                <p> ￥5.00</p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3304" class="tupian" style="background:url(/Uploads/Goods/2014-05-16/5375af57e98dc.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3304" target="_blank">MK小小漫画家</a>
                <p> ￥16.00</p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3302" class="tupian" style="background:url(/Uploads/Goods/2014-05-15/53747fc23d37c.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3302" target="_blank">现货！舞·星空之约（</a>
                <p> ￥58.00</p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3300" class="tupian" style="background:url(/Uploads/Goods/2014-05-13/5371c5babc680.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3300" target="_blank">MK大徽章</a>
                <p> ￥12.00</p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3299" class="tupian" style="background:url(/Uploads/Goods/2014-05-13/537176ecd759d.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3299" target="_blank">7-8册《浪漫传说》单行</a>
                <p> ￥15.00</p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3298" class="tupian" style="background:url(/Uploads/Goods/2014-05-13/53716b9718998.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3298" target="_blank">《等风来》精装绘本</a>
                <p> ￥36.00</p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3297" class="tupian" style="background:url(/Uploads/Goods/2014-05-12/537090cc25895.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3297" target="_blank">MK8周年漫画短篇集</a>
                <p> ￥12.00</p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3296" class="tupian" style="background:url(/Uploads/Goods/2014-05-12/53708c25e741e.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3296" target="_blank">39册《偷星九月天》单</a>
                <p> ￥9.00</p>
            </div>
        </li>	  <div class="clear"></div>
    </ul>
    <div class="clear"></div>
    <!--热销商品-->
    <div class="product_shelves_biao"><span class="shelves shelves_1"></span></div>
    <!--产品列表-->
    <ul class="product_shelves" id="hot">
        <li> <a href="/index.php/goods/index/id/3297" class="tupian" style="background:url(/Uploads/Goods/2014-05-12/537090cc25895.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3297" target="_blank">MK8周年漫画短篇集</a>
                <p> ￥12.00 </p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3281" class="tupian" style="background:url(/Uploads/Goods/2014-04-25/5359c0d7697c6.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3281" target="_blank">爱萌1.0绕线器</a>
                <p> ￥15.00 </p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3264" class="tupian" style="background:url(/Uploads/Goods/2014-04-04/533e74bba0117.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3264" target="_blank">MK梦想快递明信片</a>
                <p> ￥12.00 </p>
            </div>
        </li><li> <a href="/index.php/goods/index/id/3225" class="tupian" style="background:url(/Uploads/Goods/2014-02-21/5306a21e71d1e.jpg.150x150.jpg)" target="_blank"></a>
            <div class="wen_sm"><a href="/index.php/goods/index/id/3225" target="_blank">《龙族3黑月之潮 ·下</a>
                <p> ￥33.20 </p>
            </div>
        </li>    </ul>
</div>


<div class="Exclusive_release_big">
    <div class="Exclusive_release_biao"><a  href="/index.php/Tag/?id=2" class="more">更多>></a></div>
    <ul class="Exclusive_release">
        <li
                style="border-top:none;"        ><a href="/index.php/goods/index/id/3161" class="tu_left" style="background:url(/Uploads/Goods/2013-12-05/52a025f4b5c25.jpg.50x50.jpg)" target="_blank"></a>
            <div class="wen"><a href="/index.php/goods/index/id/3161" target="_blank">2014知音漫客八周年大挂历</a>
                <h2>￥29.00</h2>
            </div>
            <div class="clear"></div>
            <p>


                2014知音漫客八周年大挂历！





                新年大挂历，限量壕金版

                ...<a href="/index.php/goods/index/id/3161">了解>></a></p>
        </li><li
                ><a href="/index.php/goods/index/id/3133" class="tu_left" style="background:url(/Uploads/Goods/2013-11-01/527313ae5ed5d.jpg.50x50.jpg)" target="_blank"></a>
            <div class="wen"><a href="/index.php/goods/index/id/3133" target="_blank">【阿狸铁盒扑克】+【阿狸呓</a>
                <h2>￥39.00</h2>
            </div>
            <div class="clear"></div>
            <p>
                阿狸铁盒扑克一副……原价15元


                阿狸呓之盒一套………原价35元


                以上原价50元两件...<a href="/index.php/goods/index/id/3133">了解>></a></p>
        </li><li
                ><a href="/index.php/goods/index/id/1462" class="tu_left" style="background:url(/Uploads/Goods/2013-07-02/51d28604e63c4.jpg.50x50.jpg)" target="_blank"></a>
            <div class="wen"><a href="/index.php/goods/index/id/1462" target="_blank">永恒的守护首饰系列【红色典</a>
                <h2>￥48.00</h2>
            </div>
            <div class="clear"></div>
            <p>
                用心守护，在彼此手指相勾的那一刻……


                用生命绽放的红色的樱草花，是你温暖的守护。...<a href="/index.php/goods/index/id/1462">了解>></a></p>
        </li><li
                ><a href="/index.php/goods/index/id/1423" class="tu_left" style="background:url(/Uploads/Goods/2013-05-29/201209051100264303.jpg.50x50.jpg)" target="_blank"></a>
            <div class="wen"><a href="/index.php/goods/index/id/1423" target="_blank">MK潮人包-偷星款</a>
                <h2>￥158.00</h2>
            </div>
            <div class="clear"></div>
            <p>
                赠送编辑签名版明信片哦！（请在订单附言处注明所要签名的一位编编的名字，仅限漫客周刊的编...<a href="/index.php/goods/index/id/1423">了解>></a></p>
        </li><li
                ><a href="/index.php/goods/index/id/1422" class="tu_left" style="background:url(/Uploads/Goods/2013-05-29/201209051041109513.jpg.50x50.jpg)" target="_blank"></a>
            <div class="wen"><a href="/index.php/goods/index/id/1422" target="_blank">MK潮人包-暗夜款</a>
                <h2>￥158.00</h2>
            </div>
            <div class="clear"></div>
            <p>
                特别赠送编辑签名版明信片哦！（请在订单附言处注明所要签名的一位编编的名字，仅限漫客周刊...<a href="/index.php/goods/index/id/1422">了解>></a></p>
        </li>    </ul>
    <div class="clear"></div>
</div>
<div class="clear"></div>
