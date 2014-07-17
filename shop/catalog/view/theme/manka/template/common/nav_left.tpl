<ul class="Classification_navigation_big">
    <?php $i = 0;?>
    <?php foreach( $categories as $category ){ ?>
    <li class="surrounding surrounding_<?php echo $i;?>" data="1">
        <div class="i-mc">
            <div class="item">
                <h4>EFGH</h4><dl>
                    <dt style="border:none"><a href="<?php echo $category['href'];?>"></a></dt>
                    <div class="clear"></div>
                </dl>
                <div class="clear">

                </div>
            </div>
            <div class="item">
                <h4>IJKL</h4><dl>
                    <dt><a href="/index.php/Category/index/id/221">礼包组合</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/269">客户订单</a></dt>
                    <div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>QRST</h4><dl>
                    <dt><a href="/index.php/Category/index/id/4">饰品挂件</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/108">日用生活</a></dt>
                    <div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>UVW</h4><dl>
                    <dt><a href="/index.php/Category/index/id/3">文具用品</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/118">玩偶手办</a></dt>
                    <div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div>
            <div class="item">
                <h4>XYZ</h4><dl>
                    <dt><a href="/index.php/Category/index/id/2">箱包收纳</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/117">休闲娱乐</a></dt>
                    <div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div>
        </div>
        <h3 class="item-hd item-hd_1 ">
            <s></s>
            <a href="<?php echo $category['href'];?>"><?php echo $category['name'];?></a>
        </h3>
        <span class="menuIcon hidden"></span>
        <p class="item-col">

            <?php foreach($category['children'] as $child ){ ?>
            <a href="<?php echo $child['href'];?>"><?php echo $child['name'];?></a>
            <?php } ?>

        </p>
    </li>
    <?php $i ++; }?>

    <!--
    <li class="surrounding surrounding_1" data="100">
        <div class="i-mc">
            <div class="item">
                <h4>EFGH</h4><dl>
                    <dt><a href="/index.php/Category/index/id/111">绘心&绘意</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/225">火星少女</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>MNOP</h4><dl>
                    <dt style="border:none"><a href="/index.php/Category/index/id/260">漫客栈</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>QRST</h4><dl>
                    <dt style="border:none"><a href="/index.php/Category/index/id/112">童话绘</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>XYZ</h4><dl>
                    <dt><a href="/index.php/Category/index/id/109">知音漫客</a></dt><dt><a href="/index.php/Category/index/id/110">小说绘</a></dt><dt><a href="/index.php/Category/index/id/113">星期天</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/114">漫客·悬疑</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div>			</div>
        <h3 class="item-hd item-hd_3 "> <s></s> <a href="/index.php/Category/index/id/100">杂志</a> </h3>
        <span class="menuIcon hidden"></span>
        <p class="item-col">
            <a href="/index.php/Category/index/id/109">知音漫客</a><a href="/index.php/Category/index/id/110">小说绘</a><a href="/index.php/Category/index/id/111">绘心&绘意</a>			 </p>
    </li>
    <li class="surrounding surrounding_2" data="116">
        <div class="i-mc">
            <div class="item">
                <h4>ABCD</h4><dl>
                    <dt><a href="/index.php/Category/index/id/120">暗夜协奏曲</a></dt><dt><a href="/index.php/Category/index/id/126">打工吧天师</a></dt><dt><a href="/index.php/Category/index/id/128">阿SA专用</a></dt><dt><a href="/index.php/Category/index/id/133">盗墓笔记</a></dt><dt><a href="/index.php/Category/index/id/135">斗罗大陆</a></dt><dt><a href="/index.php/Category/index/id/138">班长大人</a></dt><dt><a href="/index.php/Category/index/id/148">斗破苍穹</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/151">暴走邻家</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>EFGH</h4><dl>
                    <dt><a href="/index.php/Category/index/id/123">绯色安娜</a></dt><dt><a href="/index.php/Category/index/id/132">花卷Y传</a></dt><dt><a href="/index.php/Category/index/id/137">hello甜心</a></dt><dt><a href="/index.php/Category/index/id/147">宫保吉丁</a></dt><dt><a href="/index.php/Category/index/id/154">黄金大劫案</a></dt><dt><a href="/index.php/Category/index/id/240"> 幻世记</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/262">混沌少女</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>IJKL</h4><dl>
                    <dt><a href="/index.php/Category/index/id/121">龙族</a></dt><dt><a href="/index.php/Category/index/id/129">浪漫果味C</a></dt><dt><a href="/index.php/Category/index/id/136">机甲熊猫PUNK</a></dt><dt><a href="/index.php/Category/index/id/144">见习侦探团</a></dt><dt><a href="/index.php/Category/index/id/146">蓝鲤镇</a></dt><dt><a href="/index.php/Category/index/id/152">九九八十一</a></dt><dt><a href="/index.php/Category/index/id/153">浪漫传说</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/251">疾风少年</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>MNOP</h4><dl>
                    <dt><a href="/index.php/Category/index/id/134">魔人</a></dt><dt><a href="/index.php/Category/index/id/141">MIC男团</a></dt><dt><a href="/index.php/Category/index/id/149">魔法骑士</a></dt><dt><a href="/index.php/Category/index/id/219">哪吒传</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/278">MK8周年漫画短篇集</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>QRST</h4><dl>
                    <dt><a href="/index.php/Category/index/id/119">偷星九月天</a></dt><dt><a href="/index.php/Category/index/id/122">神精榜</a></dt><dt><a href="/index.php/Category/index/id/143">时间之外</a></dt><dt><a href="/index.php/Category/index/id/155">天行轶事</a></dt><dt><a href="/index.php/Category/index/id/236">甜蜜城堡</a></dt><dt><a href="/index.php/Category/index/id/241">STEP</a></dt><dt><a href="/index.php/Category/index/id/250">土星玩具店</a></dt><dt><a href="/index.php/Category/index/id/254">同桌公式</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/261">盛骑之舞</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>UVW</h4><dl>
                    <dt><a href="/index.php/Category/index/id/150">我的哥哥是小狗</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/131">武道球魂</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>XYZ</h4><dl>
                    <dt><a href="/index.php/Category/index/id/124">逍遥奇侠</a></dt><dt><a href="/index.php/Category/index/id/125">1区212</a></dt><dt><a href="/index.php/Category/index/id/127">星海镖师</a></dt><dt><a href="/index.php/Category/index/id/130">主题世界</a></dt><dt><a href="/index.php/Category/index/id/139">香子兰小镇</a></dt><dt><a href="/index.php/Category/index/id/140">镇魂歌</a></dt><dt><a href="/index.php/Category/index/id/142">云海之上</a></dt><dt><a href="/index.php/Category/index/id/145">御狐之绊</a></dt><dt><a href="/index.php/Category/index/id/233">野人娃哈哈</a></dt><dt><a href="/index.php/Category/index/id/249">左边左边</a></dt><dt><a href="/index.php/Category/index/id/256">哑舍漫画版</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/266">终极发明师</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div>			</div>
        <h3 class="item-hd item-hd_11 "> <s></s> <a href="/index.php/Category/index/id/116">漫画单行本</a> </h3>
        <span class="menuIcon hidden"></span>
        <p class="item-col">
            <a href="/index.php/Category/index/id/119">偷星九月天</a><a href="/index.php/Category/index/id/120">暗夜协奏曲</a><a href="/index.php/Category/index/id/121">龙族</a>			 </p>
    </li>
    <li class="surrounding surrounding_3" data="101">
        <div class="i-mc">
            <div class="item">
                <h4>ABCD</h4><dl>
                    <dt><a href="/index.php/Category/index/id/159">城</a></dt><dt><a href="/index.php/Category/index/id/160">橙子故事</a></dt><dt><a href="/index.php/Category/index/id/184">贝比的世界</a></dt><dt><a href="/index.php/Category/index/id/263">长信宫灯</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/279">等风来</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>EFGH</h4><dl>
                    <dt><a href="/index.php/Category/index/id/156">画集</a></dt><dt><a href="/index.php/Category/index/id/182">国王先生</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/223">飞鱼和几何猫</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>IJKL</h4><dl>
                    <dt><a href="/index.php/Category/index/id/172">将爱</a></dt><dt><a href="/index.php/Category/index/id/190">Kylooe系列</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/237">空域</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>MNOP</h4><dl>
                    <dt><a href="/index.php/Category/index/id/162">那些蛋疼的日子</a></dt><dt><a href="/index.php/Category/index/id/174">猫言猫语</a></dt><dt><a href="/index.php/Category/index/id/230">那些无所事事的日子</a></dt><dt><a href="/index.php/Category/index/id/242">你们仨</a></dt><dt><a href="/index.php/Category/index/id/243">猫城纪</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/245">摩都手记</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>QRST</h4><dl>
                    <dt><a href="/index.php/Category/index/id/157">世说新语八周刊</a></dt><dt><a href="/index.php/Category/index/id/176">洒落的时光</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/264">深度拥抱症</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>UVW</h4><dl>
                    <dt><a href="/index.php/Category/index/id/196">王小熊猫·心之绘本系列</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/252">我们的夏天·比利时</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>XYZ</h4><dl>
                    <dt><a href="/index.php/Category/index/id/158">寻找自我的世界</a></dt><dt><a href="/index.php/Category/index/id/161">昨日青空</a></dt><dt><a href="/index.php/Category/index/id/163">在重庆</a></dt><dt><a href="/index.php/Category/index/id/178">樱花男孩</a></dt><dt><a href="/index.php/Category/index/id/180">隐匿城</a></dt><dt><a href="/index.php/Category/index/id/244">也许，那一瞬间</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/248">甄嬛传叙花列</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div>			</div>
        <h3 class="item-hd item-hd_6 "> <s></s> <a href="/index.php/Category/index/id/101">绘本/画集</a> </h3>
        <span class="menuIcon hidden"></span>
        <p class="item-col">
            <a href="/index.php/Category/index/id/156">画集</a><a href="/index.php/Category/index/id/157">世说新语八周刊</a><a href="/index.php/Category/index/id/158">寻找自我的世界</a>			 </p>
    </li>
    <li class="surrounding surrounding_4" data="102">
        <div class="i-mc">
            <div class="item">
                <h4>ABCD</h4><dl>
                    <dt><a href="/index.php/Category/index/id/170">成长的18个瞬间</a></dt><dt><a href="/index.php/Category/index/id/175">北航悠游记</a></dt><dt><a href="/index.php/Category/index/id/191">白夜灵异事件簿</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/192">第一辩手</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>EFGH</h4><dl>
                    <dt><a href="/index.php/Category/index/id/169">浮生物语</a></dt><dt><a href="/index.php/Category/index/id/181">盖亚冥想曲</a></dt><dt><a href="/index.php/Category/index/id/189">火花</a></dt><dt><a href="/index.php/Category/index/id/194">2012末夜</a></dt><dt><a href="/index.php/Category/index/id/199">非常手札</a></dt><dt><a href="/index.php/Category/index/id/200">2013</a></dt><dt><a href="/index.php/Category/index/id/206">光年</a></dt><dt><a href="/index.php/Category/index/id/211">惠理的时光</a></dt><dt><a href="/index.php/Category/index/id/213">风玫瑰</a></dt><dt><a href="/index.php/Category/index/id/226">幻眼神童</a></dt><dt><a href="/index.php/Category/index/id/247">画仙</a></dt><dt><a href="/index.php/Category/index/id/253">肥探白皮猪</a></dt><dt><a href="/index.php/Category/index/id/257">风虎北望</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/259">幻味奇缘</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>IJKL</h4><dl>
                    <dt><a href="/index.php/Category/index/id/186">九州</a></dt><dt><a href="/index.php/Category/index/id/195">猎物者</a></dt><dt><a href="/index.php/Category/index/id/203">昆仑</a></dt><dt><a href="/index.php/Category/index/id/214">灵飞经</a></dt><dt><a href="/index.php/Category/index/id/224">龙族</a></dt><dt><a href="/index.php/Category/index/id/238">镜</a></dt><dt><a href="/index.php/Category/index/id/239">芥子</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/258">浪客行</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>MNOP</h4><dl>
                    <dt><a href="/index.php/Category/index/id/188">MKT梦开始的地方</a></dt><dt><a href="/index.php/Category/index/id/210">MK珍藏版世界名著</a></dt><dt><a href="/index.php/Category/index/id/215">魔道鲜师</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/265">派先生的奇幻家具店</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>QRST</h4><dl>
                    <dt><a href="/index.php/Category/index/id/168">推理笔记</a></dt><dt><a href="/index.php/Category/index/id/173">听说每颗星都会寂寞</a></dt><dt><a href="/index.php/Category/index/id/177">蔷薇纷飞 一路向北</a></dt><dt><a href="/index.php/Category/index/id/228">少年空侠</a></dt><dt><a href="/index.php/Category/index/id/193">三界宅急送</a></dt><dt><a href="/index.php/Category/index/id/197">情动是一生最初的苍老</a></dt><dt><a href="/index.php/Category/index/id/202">少年心理师</a></dt><dt><a href="/index.php/Category/index/id/204">偷星同人小说集</a></dt><dt><a href="/index.php/Category/index/id/205">死神来了</a></dt><dt><a href="/index.php/Category/index/id/212">诠释爱</a></dt><dt><a href="/index.php/Category/index/id/218">四色狐</a></dt><dt><a href="/index.php/Category/index/id/231">青春奇妙物语</a></dt><dt><a href="/index.php/Category/index/id/234">十三绣衣使</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/277">拳无敌</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>UVW</h4><dl>
                    <dt><a href="/index.php/Category/index/id/235">微成长</a></dt><dt><a href="/index.php/Category/index/id/171">我在天堂说爱你</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/246">无尽长门</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div><div class="item">
                <h4>XYZ</h4><dl>
                    <dt><a href="/index.php/Category/index/id/179">哑舍</a></dt><dt><a href="/index.php/Category/index/id/183">异现场调查科</a></dt><dt><a href="/index.php/Category/index/id/185">宅男腐女神马的最讨厌了</a></dt><dt><a href="/index.php/Category/index/id/187">月夜幻谈</a></dt><dt><a href="/index.php/Category/index/id/198">冤鬼路</a></dt><dt><a href="/index.php/Category/index/id/201">妖物</a></dt><dt><a href="/index.php/Category/index/id/207">窒息</a></dt><dt><a href="/index.php/Category/index/id/208">侦讯记录</a></dt><dt><a href="/index.php/Category/index/id/209">震旦</a></dt><dt><a href="/index.php/Category/index/id/216">仙楚</a></dt><dt><a href="/index.php/Category/index/id/217">星座</a></dt><dt><a href="/index.php/Category/index/id/229">致命差评</a></dt><dt><a href="/index.php/Category/index/id/232">夜不语诡秘档案</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/255">星云幻想</a></dt>					<div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div>			</div>
        <h3 class="item-hd item-hd_13 "> <s></s> <a href="/index.php/Category/index/id/102">小说文学</a> </h3>
        <span class="menuIcon hidden"></span>
        <p class="item-col">
            <a href="/index.php/Category/index/id/169">浮生物语</a><a href="/index.php/Category/index/id/168">推理笔记</a><a href="/index.php/Category/index/id/170">成长的18个瞬间</a>			 </p>
    </li>

    -->

    <div class="clear"></div>
</ul>

<script>
    $(document).ready(function(){
        if( $('#nav-show').length == 0 ){
            $('.Classification_navigation_big').css({ display:'none'});

            $('#navigation').mouseover(function(){
                $('.Classification_navigation_big').css({ display:''});
            });
            $('#navigation').mouseout(function(){
                $('.Classification_navigation_big').css({ display:'none'});
            });
        }
    });


</script>