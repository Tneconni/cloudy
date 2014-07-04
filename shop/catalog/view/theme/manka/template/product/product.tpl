<?php echo $header; ?>
<link href="catalog/view/theme/manka/stylesheet/manka/Goods_details_test.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/manka/stylesheet/manka/Inside_pages_common.css" rel="stylesheet" type="text/css" />

<div class="nav_big">
<!--导航指示牌-->
<div class="position Id"> <s></s> 您的当前位置：<a href="/">首页</a>
    <span>＞</span> <a href="/index.php/Home/Category/index/id/101">绘本/画集</a><span>＞</span> <a href="/index.php/Home/Category/index/id/161">昨日青空</a>  </div>
<!--商品展示-->
<div class="Product_presentation_big">
    <!--大图片展示-->
    <div class="tu_presentation_big"> <a href="javascript:void(0);" class="tu_big" style="background:url(/Uploads/Goods/2013-05-29/201206151004011684.jpg.340x340.jpg)"></a>
        <!--小图片展示-->
        <div class="tu_xiao"> <a href="javascript:void(0);" class="spec-control" style="left:3px"></a> <a style="right:2px" href="javascript:void(0);" class="spec-control_1"></a>
            <div style="position:relative;width:332px; margin:0px auto; overflow:hidden; height:100%" class="xiaotu_container">
                <ul class="xiaotu" style="width:1000%; left:0">
                    <li style="margin-left:0"><a href="javascript:void(0);" class="tu_mini img_hover" style="background:url(/Uploads/Goods/2013-05-29/201206151004011684.jpg.50x50.jpg);"></a></li><li style=""><a href="javascript:void(0);" class="tu_mini " style="background:url(/Uploads/Goods/2013-06-28/51cd336665fca.jpg.50x50.jpg);"></a></li>          </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!--文字介绍-->
    <div class="Text_introduce_big">
        <input type="hidden" name="goods_id" id="goods_id" value="1327"/>
        <!--标题介绍-->
        <h1> 《昨日青空》（下）随书附赠精美卡贴 <span>货  号：<font id="goods_sn" title=""></font></span> </h1>
        <!--定价-->
        <ul class="price_big">
            <li class="sale_price">
                <span>价 格：</span>

                <span class="tm-yen">￥</span>
			<span><strong id="shop_price" title="28.00">28.00</strong>
			</span>
            </li>
            <li> <span>配 送 至：</span>
                <div id="TreeSelectTrigger"> <a href="javascript:void(0)" style="line-height:28px; float:left;">
                        请选择
                    </a>
			<span class="nan" id="shipping" style="line-height:28px; margin-left:10px">
          		          	</span>
                </div>
            </li>
        </ul>
        <!--商品选择-->
        <div class="Product_selection">
            <!--图书类型-->
            <dl  class="huibj">
                <dt>购买数量：</dt>
                <dd class="number"> <span>
            <input name="" type="text" value="1" class="buy_num"/>
            <s class="add_button"></s> <b class="sub_button"></b> </span>件<font style="display:none" id="goods_number" title="28">(库存28件)</font>
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

        addToCart( this.id.split('-')[1], 1);

    });

</script>
<!--新品上架=================left-->
<div class="New_product">     <div class="new_left mt_left">
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
        <div style="height:89px; padding-bottom:8px;">
            <a class="record_left" style="background: url(/Uploads/Goods/2014-05-16/5375af57e98dc.jpg.50x50.jpg)" href="/index.php/home/goods/index/id/3304" title="MK小小漫画家"></a>
            <div class="record_right">
                <p><a href="/index.php/home/goods/index/id/3304"  title="MK小小漫画家">MK小小漫画家</a></p>
                <p>商城价<font>￥16.00</font></p>

            </div>
        </div><div style="height:89px; padding-bottom:8px;border-top: 1px dashed #FA802A;">
            <a class="record_left" style="background: url(/Uploads/Goods/2013-06-28/51cd335d19adc.jpg.50x50.jpg)" href="/index.php/home/goods/index/id/1327" title="《昨日青空》（下）随书附赠精美卡贴"></a>
            <div class="record_right">
                <p><a href="/index.php/home/goods/index/id/1327"  title="《昨日青空》（下）随书附赠精美卡贴">《昨日青空》（下）随书附赠精美卡贴</a></p>
                <p>商城价<font>￥28.00</font></p>

            </div>
        </div></div>    <div class="clear"></div>
</div>
<!--商品组合================right-->
<div class="combination_right">

<!--产品详情===============================================================-->
<ul class="Product_introduction_biao">
    <li ><a href="javascript:void(0);" class="goods_desc hongdi">产品详情</a></li>
    <li><a href="javascript:void(0);" class="goods_qa">购买咨询(1)</a></li>
    <!--<li><a href="javascript:void(0);" class="goods_comment">商品评价(12)</a></li>-->
</ul>
<!--================================================================这一块暂时隐藏-->
<div class="Product_introduction">

    <div class="wen"><p> <p style="text-align:left;">
            <span style="font-size:medium;color:#337FE5;"><span style="color:#337FE5;"><strong>著名漫画家口袋巧克力倾情奉献&nbsp;&nbsp; 宽大的中国式校服下的青春</strong></span></span>
        </p>
        <p style="text-align:left;">
            <span style="font-size:medium;color:#337FE5;"><span style="color:#337FE5;"><strong>少年&nbsp; 青春&nbsp;&nbsp; 成长&nbsp;&nbsp; 时光</strong></span></span>
        </p>
        <p style="text-align:left;">
            <span style="font-size:medium;color:#337FE5;"><span style="color:#337FE5;"><strong>纯美&nbsp; 温暖&nbsp;&nbsp; 治愈&nbsp;&nbsp; 怀旧</strong></span></span>
        </p>
        <p style="text-align:left;">
            <span style="font-size:medium;color:#337FE5;"><span style="color:#337FE5;"><strong>《昨日青空》（下）精彩大结局！</strong></span></span>
        </p>
        <p style="text-align:left;">
            <span style="font-size:medium;color:#337FE5;"><span style="color:#337FE5;"><strong>漫客周刊执行主编吹沙 倾情作序</strong></span></span>
        </p>
        <p style="text-align:left;">
            <span style="font-size:medium;color:#E53333;"><span style="color:#E53333;"><strong>神秘大礼54P番外， 心动呈现！</strong></span></span>
        </p>
        <p style="text-align:left;">
            <span style="font-size:medium;color:#E53333;"><span style="color:#E53333;"><strong>随书附赠精美卡贴</strong></span></span>
        </p>
        <p>
            <br />
            <span style="font-size:14px;">少年们，在时间的晨光里，</span>
        </p>
        <p>
            <span style="font-size:14px;">赤脚跳舞，踏过生活的荆棘和碎石。</span>
        </p>
        <p>
            <span style="font-size:14px;">青春，最接近的触碰，是轻抚你发端，</span>
        </p>
        <p>
            <span style="font-size:14px;">最亲密的交会，是两颗心的颤动。</span>
        </p>
        <p>
            <span style="font-size:14px;">喜欢，又美好又寂寞，</span>
        </p>
        <p>
            <span style="font-size:14px;">隔岸默默相望，最终去往不同的方向。</span>
        </p>
        <p>
            <span style="font-size:14px;">少年们，沿着光阴仓促的脚步，越走越远。</span>
        </p>
        <p>
            <span style="font-size:14px;">回首时，只剩下记忆里澄澈的青空。</span>
        </p>
        <p>
            <span style="font-size:medium;"> </span>
        </p>
        <p>
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-family:宋体;font-size:14px;"><strong>目录</strong></span><span style="font-size:14px;">&nbsp;</span></span></span></span>
        </p>
        <p>
            <span style="color:#000000;font-size:14px;"><span style="font-size:14px;"><span style="font-family:宋体;font-size:14px;">序言</span></span></span>
        </p>
        <p>
            <span style="font-size:14px;"><span style="font-family:宋体;font-size:14px;"><span style="color:#000000;font-size:14px;">第6章 雨中的彼岸花</span></span></span>
        </p>
        <p>
            <span style="font-size:14px;"><span style="font-family:宋体;font-size:14px;"><span style="color:#000000;font-size:14px;">第7章 柏拉图的距离</span></span></span>
        </p>
        <p>
            <span style="font-size:14px;">终 章 永恒的青空</span>
        </p>
        <p>
            <span style="font-size:14px;">创作手记</span>
        </p>
        <p>
            <span style="font-size:14px;">寂静喜欢——宽大的中国式校服下的青春</span>
        </p>
        <p>
            <span style="font-size:14px;">明月清风</span>
        </p>
        <p>
            <span style="font-size:14px;">再见，旧时光</span>
        </p>
        <p>
            <br />
        </p>
        <p>
            <span style="font-size:medium;"> </span>
        </p>
        <p class="MsoNormal">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-family:宋体;"><strong>编辑推荐</strong></span><span><span>&nbsp;</span></span></span></span></span>
        </p>
        <p class="MsoNormal">
            <span style="font-size:medium;font-family:宋体;text-indent:10.5pt;">《昨日青空》被读者誉为记忆重现的青春漫画，淡淡的暖暖的，很像我们真实平凡的高中生活。</span><span style="font-size:medium;">&nbsp;</span><span style="font-size:medium;font-family:宋体;">青春怀旧</span><span style="font-size:medium;">，</span><span style="font-size:medium;font-family:宋体;">印刻流年</span><span style="font-size:medium;">，</span><span style="font-size:medium;font-family:宋体;">唯美文艺</span><span style="font-size:medium;">——</span><span style="font-size:medium;font-family:宋体;">致最美好的年少时光。</span><span style="font-size:medium;font-family:宋体;">这就是口袋巧克力带给我们的最美青春纪念绘本《昨日青空》。</span>
        </p>
        <p>
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-family:宋体;"> </span></span></span></span>
        </p>
        <p class="MsoNormal">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-size:medium;"><span style="font-family:宋体;"><strong>作者简介</strong></span><span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span><span>&nbsp;&nbsp;</span></span><span><span>&nbsp;&nbsp;</span></span></span></span></span></span>
        </p>
        <p class="MsoNormal">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-size:medium;"><span style="font-family:宋体;font-size:14px;">笔名：口袋巧克力</span><span style="font-size:14px;"><span style="font-size:14px;">&nbsp;&nbsp;&nbsp; </span></span><span style="font-family:宋体;font-size:14px;">本名：龚毅坚，</span></span></span></span></span><span style="font-size:14px;font-family:宋体;">中国漫画家，代表作</span><span style="font-size:14px;">:</span><span style="font-size:14px;font-family:宋体;">《昨日青空》、《</span><span style="font-size:14px;">1</span><span style="font-size:14px;font-family:宋体;">区</span><span style="font-size:14px;">212</span><span style="font-size:14px;font-family:宋体;">》、《南山之忆》等。</span><span style="font-size:14px;">&nbsp;</span>
        </p>
        <p class="MsoNormal" style="text-align:left;text-indent:21pt;" align="left">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-size:small;"><span style="font-family:宋体;background-color:white;font-size:14px;">口袋巧克力的作品旨在表现人性的真善美，作品多以围绕着青春、梦想和爱为主题展开。是国内少数始终坚持追求彩色漫画并力求还原生活情感的青年漫画家。早在</span><span style="background-color:white;font-size:14px;">2004</span><span style="font-family:宋体;background-color:white;font-size:14px;">年就以其出众的色彩能力参与了中国第一部长篇彩色漫画——《蝴蝶飞飞》并打入国际市场。之后将自己对彩色漫画的追求提升到了全新的高度，创作并出版了《南山之忆》这一超越漫画形式的个人作品。《南山之忆》的出现，打破了国外读者对中国漫画用色的传统观念，其画面和镜头表现力的运用嫁接于绘本和电影之间。</span></span></span></span></span>
        </p>
        <p class="MsoNormal" style="text-align:left;text-indent:21pt;" align="left">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-size:small;"><span style="background-color:white;font-size:14px;">2006</span><span style="font-family:宋体;background-color:white;font-size:14px;">年，漫画杂志《知音漫客》创刊，当时以口袋巧克力担当编创的创作团队开始了《</span><span style="background-color:white;font-size:14px;">1</span><span style="font-family:宋体;background-color:white;font-size:14px;">区</span><span style="background-color:white;font-size:14px;">212</span><span style="font-family:宋体;background-color:white;font-size:14px;">》的创作，经历长达</span><span style="background-color:white;font-size:14px;">3</span><span style="font-family:宋体;background-color:white;font-size:14px;">年的艰辛创作成就了《知音漫客》创刊以来的经典之作，并开创了中国现代漫画的一个全新流派——新概念四格漫画。</span></span></span></span></span>
        </p>
        <p class="MsoNormal" style="text-align:left;text-indent:21pt;" align="left">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-size:small;"><span style="background-color:white;font-size:14px;">2008</span><span style="font-family:宋体;background-color:white;font-size:14px;">年以后，口袋巧克力开始探索改变中国漫画公司“盈利难”的模式，投身到【</span><span style="background-color:white;font-size:14px;">S-ACG</span><span style="font-family:宋体;background-color:white;font-size:14px;">】模式作品的开拓中，促成了游戏业界和漫画界的首次合作，并在作品中担当监督，完成了国内首部官方网游漫画——《梦幻西游》，赢得了巨大市场回报的同时进一步向网游动画发起冲击。</span></span></span></span></span>
        </p>
        <p class="MsoNormal" style="text-align:left;text-indent:21pt;" align="left">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-size:small;"><span style="font-family:宋体;background-color:white;font-size:14px;">在开拓【</span><span style="background-color:white;font-size:14px;">S-ACG</span><span style="font-family:宋体;background-color:white;font-size:14px;">】模式的同时，口袋巧克力依然坚持自己在绘本漫画上的探索，</span><span style="background-color:white;font-size:14px;">2010</span><span style="font-family:宋体;background:white;"><span style="font-size:14px;">年开始企划全新作品《昨日青空》，</span><span style="font-size:14px;">2011</span><span style="font-size:14px;">年开始在知音集团旗下绘本刊物《漫客·绘心》上连载，被读者誉为记忆重现的青春漫画，荣居读者排名榜首。</span></span></span></span></span></span>
        </p>
        <p>
            <br />
        </p>
        <p class="MsoNormal">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-family:宋体;"><span style="font-size:medium;"><img src="/Uploads/Goods_descimg/201206151258488167.jpg" alt="IMG_2059.jpg" /></span></span></span></span></span>
        </p>
        <p class="MsoNormal">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-family:宋体;"><span style="font-size:medium;"><img src="/Uploads/Goods_descimg/201206151258486492.jpg" alt="IMG_2060.jpg" /></span></span></span></span></span>
        </p>
        <p class="MsoNormal">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-family:宋体;"><span style="font-size:medium;"><img src="/Uploads/Goods_descimg/201206151258487502.jpg" alt="IMG_2061.jpg" /></span></span></span></span></span>
        </p>
        <p class="MsoNormal">
            <span style="font-size:small;"><span style="color:#000000;"><span style="font-size:medium;"><span style="font-family:宋体;"><span style="font-size:medium;"><img src="/Uploads/Goods_descimg/201206151303293597.jpg" alt="书页.jpg" /></span></span></span></span></span>
        </p> </p></div>
</div>

<div id="comment" class="content_2"> </div>
</div>
<div class="clear"></div>
</div>

<?php echo $footer; ?>