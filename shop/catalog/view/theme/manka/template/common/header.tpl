
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>漫客商城 - 你身边的动漫商店</title>
    <link href="css/common.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" id="dialog_js" src="js/jquery.dialog.js" ></script>
    <script type="text/javascript" src="js/common.js"></script>
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
            <li class="fore cof"> <a href="/">漫客商城首页</a> </li>
            <li class="fore"> 请<span class="dunlu"><a href="/index.php/user/login/index">登录</a><a href="/index.php/user/login/register">免费注册</a></span> </li>
            <!--登录之后-->
            <li class="fore Id"><s></s> <a href="javascript:void(0);"  onclick="AddFavorite(window.location.href,document.title);">收藏本店</a> </li>
        </ul>
        <ul class="fr">
            <li class="fore cof menu_2" id="my_account"> <a href="/index.php/User/User/index">我的账户<b></b></a>
                <div class="account_big">
                    <ul>
                        <li><a href="/index.php/User/Order/index/status/1">待付款订单</a></li>
                        <li><a href="/index.php/User/Order/index/status/2">已付款订单</a></li>
                        <li><a href="/index.php/User/Message/index">短消息<!--<span style="font-weight:bold; color:#990000">&nbsp;(<font color="#990000" >0</font>)</span>--></a></li>
                    </ul>
                </div>
            </li>
            <!--<li class="fore Id"> <a href="#">联系客服</a> <s></s> </li>-->
            <li class="fore Id menu"><s></s><a href="/index.php/Cart/index"><span class="gouwu"></span>购物车<span class="naber" id="cart_number">0</span>件</a>
            </li>
            <li class="fore Id menu_1"><s></s><a href="/index.php/User/Collect/index">收藏夹</a>

            </li>
            <!--<li class="fore Id menu_2"><s></s><a href="#">网站导航<b></b></a></li>-->
        </ul>
    </div>
</div>


<!--logo+搜索-->
<div id="header_1">
    <div class="header_top Id">
        <div class="mantou"></div>
        <a class="logo" href="/"><img src="images/logl.gif" /></a>
        <!--搜索-->
        <div class="search_big">
            <form action="/index.php/home/search/index" method="get" >
                <input name="keyword" type="text" value="" class="text"/>
                <input type="submit" class="button" value="搜索" />
            </form>
            <div class="clear"></div>
            <div class="hotwords">热门搜索：<a href="/index.php/home/search/index/keyword/绕线器">绕线器</a><a href="/index.php/home/search/index/keyword/暴走">暴走</a><a href="/index.php/home/search/index/keyword/斗罗">斗罗</a><a href="/index.php/home/search/index/keyword/卡贴">卡贴</a><a href="/index.php/home/search/index/keyword/2014">2014</a><a href="/index.php/home/search/index/keyword/斗破">斗破</a><a href="/index.php/home/search/index/keyword/抱枕">抱枕</a><a href="/index.php/home/search/index/keyword/偷星">偷星</a></div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--导航-->
<div id="navigation">
<div class="navigation_big">
    <!--分类导航-->
    <h2>所有商品分类</h2>
    <ul class="Classification_navigation_big">
        <li class="surrounding surrounding_0" data="1">
            <div class="i-mc">
                <div class="item">
                    <h4>EFGH</h4><dl>
                        <dt style="border:none"><a href="/index.php/Category/index/id/5">服装鞋帽</a></dt>					<div class="clear"></div>
                    </dl>
                    <div class="clear"></div>
                </div><div class="item">
                    <h4>IJKL</h4><dl>
                        <dt><a href="/index.php/Category/index/id/221">礼包组合</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/269">客户订单</a></dt>					<div class="clear"></div>
                    </dl>
                    <div class="clear"></div>
                </div><div class="item">
                    <h4>QRST</h4><dl>
                        <dt><a href="/index.php/Category/index/id/4">饰品挂件</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/108">日用生活</a></dt>					<div class="clear"></div>
                    </dl>
                    <div class="clear"></div>
                </div><div class="item">
                    <h4>UVW</h4><dl>
                        <dt><a href="/index.php/Category/index/id/3">文具用品</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/118">玩偶手办</a></dt>					<div class="clear"></div>
                    </dl>
                    <div class="clear"></div>
                </div><div class="item">
                    <h4>XYZ</h4><dl>
                        <dt><a href="/index.php/Category/index/id/2">箱包收纳</a></dt><dt style="border:none"><a href="/index.php/Category/index/id/117">休闲娱乐</a></dt>					<div class="clear"></div>
                    </dl>
                    <div class="clear"></div>
                </div>			</div>
            <h3 class="item-hd item-hd_1 "> <s></s> <a href="/index.php/Category/index/id/1">周边</a> </h3>
            <span class="menuIcon hidden"></span>
            <p class="item-col">
                <a href="/index.php/Category/index/id/5">服装鞋帽</a><a href="/index.php/Category/index/id/4">饰品挂件</a><a href="/index.php/Category/index/id/3">文具用品</a>			 </p>
        </li><li class="surrounding surrounding_1" data="100">
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
        </li><li class="surrounding surrounding_2" data="116">
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
        </li><li class="surrounding surrounding_3" data="101">
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
        </li><li class="surrounding surrounding_4" data="102">
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
        </li>      <div class="clear"></div>
    </ul>

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
<!--==============================正文开始=================================================-->
<!--内容上部==============分类导航+幻灯+抢购=============-->
<div class="index_nav_top">
    <!--============================================================left-->

    <!--mid幻灯-->
    <div class="slide_show_big">
        <a href="http://shop.zymk.cn/index.php/goods/index/id/3302" target="_blank"><img src="/Uploads/Ad/2014-05-15/53748548abc8f.jpg"  width="590" height="280" alt="舞星空之约" /></a><a href="/index.php/Goods/index/id/3281" target="_blank"><img src="/Uploads/Ad/2014-05-04/5365a950eff59.jpg"  width="590" height="280" alt="绕线器" /></a><a href="http://shop.zymk.cn/index.php/home/search/index?keyword=%E8%83%BD%E9%87%8F%E6%B0%B4%E6%9D%AF" target="_blank"><img src="/Uploads/Ad/2014-05-06/5368905e6ed3b.jpg"  width="590" height="280" alt="能量水杯" /></a><a href="http://shop.zymk.cn/index.php/goods/index/id/3271" target="_blank"><img src="/Uploads/Ad/2014-04-17/534f7cefda424.jpg"  width="590" height="280" alt="深度拥抱症" /></a><a href="http://shop.zymk.cn/index.php/goods/index/id/3248" target="_blank"><img src="/Uploads/Ad/2014-03-21/532bfe96bd2e2.jpg"  width="590" height="280" alt="交换日记" /></a>  </div>

    <!--right===抢购吧-->
    <div class="snap_up_big"> <a class="snap_up" href="#"></a>
        <div class="security">正品保障</div>
        <!--广告-->
        <div class="clear"></div>
        <div class="index_advertising_top"><a href="http://shop.zymk.cn/index.php/home/search/index?keyword=%E8%83%BD%E9%87%8F%E6%B0%B4%E6%9D%AF" id="lingqu" data="1" target="_blank"><img src="images/53741a5182e1a.jpg" /></a></div>
        <!--公告资讯-->
        <div class="news_top">
            <div class="news_top_biao">
                <!--<a href="#">更多>></a>-->
                公告资讯</div>
            <ul>
                <li><a href="/index.php/article/show/id/38" target="_blank">【公告】关于预售产品</a></li><li><a href="/index.php/article/show/id/39" target="_blank">关于商品库存说明</a></li><li><a href="/index.php/article/show/id/11" target="_blank">2014年新品发布（持续更新）</a></li><li><a href="/index.php/article/show/id/12" target="_blank">在线客服工作时间</a></li>      </ul>
        </div>
    </div>
    <div class="clear"></div>
    <!--新品上架===========================left-->
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
    <!--==独家发布============================================right============-->
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
</div>


<div class="da_beijing">
    <div class="classify_biao classify_biao_1"> <a href="/index.php/Home/Category/index/id/1" class="cate_more">更多&gt;&gt;</a> <a href="/index.php/Home/Category/index/id/1" class="cate_link"></a></div>
    <!--图片排列-->
    <div class="Picture_Arrangement">
        <ul class="product_shelves" id="news">
            <li> <a href="/index.php/goods/index/id/3281" class="tupian" style="background:url(/Uploads/Goods/2014-04-25/5359c0d7697c6.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3281" target="_blank">爱萌1.0绕线器</a>
                    <p> ￥15.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3279" class="tupian" style="background:url(/Uploads/Goods/2014-04-23/535729b795e64.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3279" target="_blank">魔力果冻卡贴</a>
                    <p> ￥4.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3264" class="tupian" style="background:url(/Uploads/Goods/2014-04-04/533e74bba0117.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3264" target="_blank">MK梦想快递明信片</a>
                    <p> ￥12.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3258" class="tupian" style="background:url(/Uploads/Goods/2014-04-01/533a7dd65a56e.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3258" target="_blank">MK NOTEBOOK活页笔记本</a>
                    <p> ￥20.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3255" class="tupian" style="background:url(/Uploads/Goods/2014-04-10/5346539812dae.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3255" target="_blank">MK能量水杯 新款特惠</a>
                    <p> ￥39.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3248" class="tupian" style="background:url(/Uploads/Goods/2014-03-18/53280df7d5e0b.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3248" target="_blank">MK交换日记</a>
                    <p> ￥18.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3244" class="tupian" style="background:url(/Uploads/Goods/2014-03-14/5322afd16fc5a.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3244" target="_blank">MK星球集换卡扩充包v1</a>
                    <p> ￥3.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3224" class="tupian" style="background:url(/Uploads/Goods/2014-02-20/5305797632d00.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3224" target="_blank">MK加油站2014第一弹</a>
                    <p> ￥16.00</p>
                </div>
            </li>	  <div class="clear"></div>
        </ul>
    </div>
    <!--最热排行榜-->
    <div class="list_big list_beijing_1">
        <ul class="list_host">
            <li class="lihover"><a href="/index.php/goods/index/id/3305" class="Text_color_1" target="_blank">MK姓名贴..</a>
                <div class="graphic"><a href="/index.php/goods/index/id/3305" style="background:url(/Uploads/Goods/2014-05-16/5375ddf2e9848.jpg.50x50.jpg)" class="tu" target="_blank"></a>
                    <div class="wen">￥5.00</div>
                </div>
                <div class="clear"></div>
            </li>
            <li><a href="/index.php/goods/index/id/3304" title="MK小小漫画家" target="_blank">MK小小漫画家</a></li>          <li><a href="/index.php/goods/index/id/3302" title="现货！舞·星空之约（绿檀木梳子）" target="_blank">现货！舞·星空之约（绿檀木梳</a></li>          <li><a href="/index.php/goods/index/id/3300" title="MK大徽章" target="_blank">MK大徽章</a></li>          <li><a href="/index.php/goods/index/id/3295" title="MK魔力眼罩" target="_blank">MK魔力眼罩</a></li>          <li><a href="/index.php/goods/index/id/3288" title="MK能量水杯 新上架" target="_blank">MK能量水杯 新上架</a></li>          <li><a href="/index.php/goods/index/id/3281" title="爱萌1.0绕线器" target="_blank">爱萌1.0绕线器</a></li>          <li><a href="/index.php/goods/index/id/3279" title="魔力果冻卡贴" target="_blank">魔力果冻卡贴</a></li>          <li><a href="/index.php/goods/index/id/3264" title="MK梦想快递明信片" target="_blank">MK梦想快递明信片</a></li>          <li><a href="/index.php/goods/index/id/3258" title="MK NOTEBOOK活页笔记本" target="_blank">MK NOTEBOOK活页笔记本</a></li>    </ul>
    </div>
    <div class="clear"></div>

    <!--广告-->

    <div style="height:95px; padding-top:5px;"><a href="http://shop.zymk.cn/index.php/home/search/index?keyword=%E8%83%BD%E9%87%8F%E6%B0%B4%E6%9D%AF" target="_blank"><img src="images/534f3c5de7ca6.jpg" width="480" height="90"  style="padding-left:1px;"/></a>
        <a href="http://shop.zymk.cn/index.php/home/search/index?keyword=集换卡" target="_blank"><img src="images/532945cddc644.jpg" width="480" height="90" style="padding-left:5px;" /></a></div>
</div><div class="da_beijing">
    <div class="classify_biao classify_biao_2"> <a href="/index.php/Home/Category/index/id/100" class="cate_more">更多&gt;&gt;</a> <a href="/index.php/Home/Category/index/id/100" class="cate_link"></a></div>
    <!--图片排列-->
    <div class="Picture_Arrangement">
        <ul class="product_shelves" id="news">
            <li> <a href="/index.php/goods/index/id/3307" class="tupian" style="background:url(/Uploads/Goods/2014-05-21/537c662f7e91f.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3307" target="_blank">73辑《漫客·绘意》 [</a>
                    <p> ￥9.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3306" class="tupian" style="background:url(/Uploads/Goods/2014-05-21/537c552b66d1f.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3306" target="_blank">312期《知音漫客》萌周</a>
                    <p> ￥5.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3301" class="tupian" style="background:url(/Uploads/Goods/2014-05-15/5374265172942.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3301" target="_blank">311期《知音漫客》幻周</a>
                    <p> ￥5.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3291" class="tupian" style="background:url(/Uploads/Goods/2014-05-04/5365b6b3826f9.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3291" target="_blank">75期《漫客星期天》</a>
                    <p> ￥6.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3290" class="tupian" style="background:url(/Uploads/Goods/2014-05-04/5365b49043edd.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3290" target="_blank">74期《漫客星期天》</a>
                    <p> ￥6.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3285" class="tupian" style="background:url(/Uploads/Goods/2014-04-28/535e12a79dc16.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3285" target="_blank">VOL.02《漫客栈》</a>
                    <p> ￥4.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3273" class="tupian" style="background:url(/Uploads/Goods/2014-04-18/535078389e06d.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3273" target="_blank">71辑《漫客·绘意》 [</a>
                    <p> ￥8.50</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3269" class="tupian" style="background:url(/Uploads/Goods/2014-04-11/534792e9664cd.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3269" target="_blank">99期《漫客·小说绘》</a>
                    <p> ￥7.50</p>
                </div>
            </li>	  <div class="clear"></div>
        </ul>
    </div>
    <!--最热排行榜-->
    <div class="list_big list_beijing_2">
        <ul class="list_host">
            <li class="lihover"><a href="/index.php/goods/index/id/3307" class="Text_color_2" target="_blank">73辑《漫客·绘意》 [赠飞..</a>
                <div class="graphic"><a href="/index.php/goods/index/id/3307" style="background:url(/Uploads/Goods/2014-05-21/537c662f7e91f.jpg.50x50.jpg)" class="tu" target="_blank"></a>
                    <div class="wen">￥9.00</div>
                </div>
                <div class="clear"></div>
            </li>
            <li><a href="/index.php/goods/index/id/3306" title="312期《知音漫客》萌周刊" target="_blank">312期《知音漫客》萌周刊</a></li>          <li><a href="/index.php/goods/index/id/3301" title="311期《知音漫客》幻周刊" target="_blank">311期《知音漫客》幻周刊</a></li>          <li><a href="/index.php/goods/index/id/3294" title="310期《知音漫客》锐周刊" target="_blank">310期《知音漫客》锐周刊</a></li>          <li><a href="/index.php/goods/index/id/3291" title="75期《漫客星期天》" target="_blank">75期《漫客星期天》</a></li>          <li><a href="/index.php/goods/index/id/3290" title="74期《漫客星期天》" target="_blank">74期《漫客星期天》</a></li>          <li><a href="/index.php/goods/index/id/3285" title="VOL.02《漫客栈》" target="_blank">VOL.02《漫客栈》</a></li>          <li><a href="/index.php/goods/index/id/3282" title="309期《知音漫客》燃周刊" target="_blank">309期《知音漫客》燃周刊</a></li>          <li><a href="/index.php/goods/index/id/3277" title="308期《知音漫客》萌周刊" target="_blank">308期《知音漫客》萌周刊</a></li>          <li><a href="/index.php/goods/index/id/3273" title="71辑《漫客·绘意》 [赠精美大海报]" target="_blank">71辑《漫客·绘意》 [赠精美大</a></li>    </ul>
    </div>
    <div class="clear"></div>

    <!--广告-->


    <div style="height:95px; padding-top:5px;"><a href="http://shop.zymk.cn/index.php/goods/index/id/3231" target="_blank"><img src="/Uploads/Ad/2014-03-19/5329411301c13.jpg" width="968" height="90" /></a></div></div><div class="da_beijing">
    <div class="classify_biao classify_biao_3"> <a href="/index.php/Home/Category/index/id/116" class="cate_more">更多&gt;&gt;</a> <a href="/index.php/Home/Category/index/id/116" class="cate_link"></a></div>
    <!--图片排列-->
    <div class="Picture_Arrangement">
        <ul class="product_shelves" id="news">
            <li> <a href="/index.php/goods/index/id/3299" class="tupian" style="background:url(/Uploads/Goods/2014-05-13/537176ecd759d.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3299" target="_blank">7-8册《浪漫传说》单行</a>
                    <p> ￥15.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3292" class="tupian" style="background:url(/Uploads/Goods/2014-05-05/53673dcf7bffd.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3292" target="_blank">9-10册《九九八十一》</a>
                    <p> ￥18.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3286" class="tupian" style="background:url(/Uploads/Goods/2014-04-29/535f5a41c7c88.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3286" target="_blank">3-4册《龙族Ⅱ》漫画版</a>
                    <p> ￥18.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3284" class="tupian" style="background:url(/Uploads/Goods/2014-04-28/535dca20f089d.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3284" target="_blank">7-8册《见习侦探团》单</a>
                    <p> ￥15.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3276" class="tupian" style="background:url(/Uploads/Goods/2014-04-18/5350c3ececb75.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3276" target="_blank">1-4册《终极发明师》全</a>
                    <p> ￥30.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3275" class="tupian" style="background:url(/Uploads/Goods/2014-04-18/53509e37d0a94.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3275" target="_blank">5-6册《甜蜜城堡》单行</a>
                    <p> ￥18.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3259" class="tupian" style="background:url(/Uploads/Goods/2014-04-03/533d0bfaea6d9.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3259" target="_blank">1-2册《盛骑之舞》单行</a>
                    <p> ￥18.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3243" class="tupian" style="background:url(/Uploads/Goods/2014-03-14/53226fe1551b4.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3243" target="_blank">1-2册《哑舍》漫画版</a>
                    <p> ￥18.00</p>
                </div>
            </li>	  <div class="clear"></div>
        </ul>
    </div>
    <!--最热排行榜-->
    <div class="list_big list_beijing_3">
        <ul class="list_host">
            <li class="lihover"><a href="/index.php/goods/index/id/3303" class="Text_color_3" target="_blank">《逍遥奇侠》09-10册..</a>
                <div class="graphic"><a href="/index.php/goods/index/id/3303" style="background:url(/Uploads/Goods/2014-05-16/5375ac35254c0.jpg.50x50.jpg)" class="tu" target="_blank"></a>
                    <div class="wen">￥15.00</div>
                </div>
                <div class="clear"></div>
            </li>
            <li><a href="/index.php/goods/index/id/3299" title="7-8册《浪漫传说》单行本" target="_blank">7-8册《浪漫传说》单行本</a></li>          <li><a href="/index.php/goods/index/id/3297" title="MK8周年漫画短篇集" target="_blank">MK8周年漫画短篇集</a></li>          <li><a href="/index.php/goods/index/id/3296" title="39册《偷星九月天》单行本" target="_blank">39册《偷星九月天》单行本</a></li>          <li><a href="/index.php/goods/index/id/3292" title="9-10册《九九八十一》单行本" target="_blank">9-10册《九九八十一》单行本</a></li>          <li><a href="/index.php/goods/index/id/3286" title="3-4册《龙族Ⅱ》漫画版" target="_blank">3-4册《龙族Ⅱ》漫画版</a></li>          <li><a href="/index.php/goods/index/id/3284" title="7-8册《见习侦探团》单行本" target="_blank">7-8册《见习侦探团》单行本</a></li>          <li><a href="/index.php/goods/index/id/3283" title="5-6册《见习侦探团》单行本" target="_blank">5-6册《见习侦探团》单行本</a></li>          <li><a href="/index.php/goods/index/id/3280" title="5-6册《HELLO甜心》完结" target="_blank">5-6册《HELLO甜心》完结</a></li>          <li><a href="/index.php/goods/index/id/3276" title="1-4册《终极发明师》全集" target="_blank">1-4册《终极发明师》全集</a></li>    </ul>
    </div>
    <div class="clear"></div>

    <!--广告-->


</div><div class="da_beijing">
    <div class="classify_biao classify_biao_4"> <a href="/index.php/Home/Category/index/id/101" class="cate_more">更多&gt;&gt;</a> <a href="/index.php/Home/Category/index/id/101" class="cate_link"></a></div>
    <!--图片排列-->
    <div class="Picture_Arrangement">
        <ul class="product_shelves" id="news">
            <li> <a href="/index.php/goods/index/id/3271" class="tupian" style="background:url(/Uploads/Goods/2014-04-14/534b9a5e52ded.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3271" target="_blank">《深度拥抱症》精装</a>
                    <p> ￥40.50</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3218" class="tupian" style="background:url(/Uploads/Goods/2014-02-17/5301a5c996ca4.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3218" target="_blank">《我们的夏天比利时》</a>
                    <p> ￥30.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3172" class="tupian" style="background:url(/Uploads/Goods/2013-12-11/52a8162a387a1.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3172" target="_blank">精装绘本《城2》LOST7</a>
                    <p> ￥35.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3171" class="tupian" style="background:url(/Uploads/Goods/2013-12-11/52a7c68f7be05.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3171" target="_blank">《橙子故事3》伍肆[内</a>
                    <p> ￥25.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3165" class="tupian" style="background:url(/Uploads/Goods/2013-12-02/529c4c54bff6d.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3165" target="_blank">精装《甄嬛传·叙花列</a>
                    <p> ￥38.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3151" class="tupian" style="background:url(/Uploads/Goods/2013-11-19/528b20fa2ab63.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3151" target="_blank">《摩都手记》慕容引刀</a>
                    <p> ￥28.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3139" class="tupian" style="background:url(/Uploads/Goods/2013-11-04/52775898ddbc3.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3139" target="_blank">精装《也许，那一瞬间</a>
                    <p> ￥35.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3132" class="tupian" style="background:url(/Uploads/Goods/2013-10-31/5271aa8673378.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3132" target="_blank">《猫城纪》①南方物语</a>
                    <p> ￥28.00</p>
                </div>
            </li>	  <div class="clear"></div>
        </ul>
    </div>
    <!--最热排行榜-->
    <div class="list_big list_beijing_4">
        <ul class="list_host">
            <li class="lihover"><a href="/index.php/goods/index/id/3298" class="Text_color_4" target="_blank">《等风来》精装绘本..</a>
                <div class="graphic"><a href="/index.php/goods/index/id/3298" style="background:url(/Uploads/Goods/2014-05-13/53716b9718998.jpg.50x50.jpg)" class="tu" target="_blank"></a>
                    <div class="wen">￥36.00</div>
                </div>
                <div class="clear"></div>
            </li>
            <li><a href="/index.php/goods/index/id/3271" title="《深度拥抱症》精装" target="_blank">《深度拥抱症》精装</a></li>          <li><a href="/index.php/goods/index/id/3218" title="《我们的夏天比利时》绘本" target="_blank">《我们的夏天比利时》绘本</a></li>          <li><a href="/index.php/goods/index/id/3172" title="精装绘本《城2》LOST7玄色[内赠精美明信片+海报]" target="_blank">精装绘本《城2》LOST7玄色[内赠</a></li>          <li><a href="/index.php/goods/index/id/3171" title="《橙子故事3》伍肆[内赠精美卡贴+贴纸]" target="_blank">《橙子故事3》伍肆[内赠精美卡</a></li>          <li><a href="/index.php/goods/index/id/3165" title="精装《甄嬛传·叙花列》1" target="_blank">精装《甄嬛传·叙花列》1</a></li>          <li><a href="/index.php/goods/index/id/3151" title="《摩都手记》慕容引刀[随书赠上海建筑志精美书签]" target="_blank">《摩都手记》慕容引刀[随书赠上</a></li>          <li><a href="/index.php/goods/index/id/3139" title="精装《也许，那一瞬间》口袋巧克力绘本[附赠精美明信片]" target="_blank">精装《也许，那一瞬间》口袋巧</a></li>          <li><a href="/index.php/goods/index/id/3132" title="《猫城纪》①南方物语" target="_blank">《猫城纪》①南方物语</a></li>          <li><a href="/index.php/goods/index/id/3131" title="《你们仨》1扫把[随书附赠宠物书签夹]" target="_blank">《你们仨》1扫把[随书附赠宠物</a></li>    </ul>
    </div>
    <div class="clear"></div>

    <!--广告-->


</div><div class="da_beijing">
    <div class="classify_biao classify_biao_5"> <a href="/index.php/Home/Category/index/id/102" class="cate_more">更多&gt;&gt;</a> <a href="/index.php/Home/Category/index/id/102" class="cate_link"></a></div>
    <!--图片排列-->
    <div class="Picture_Arrangement">
        <ul class="product_shelves" id="news">
            <li> <a href="/index.php/goods/index/id/3254" class="tupian" style="background:url(/Uploads/Goods/2014-03-28/53352cb91846e.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3254" target="_blank">龙族3黑月之潮纪念精装</a>
                    <p> ￥226.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3252" class="tupian" style="background:url(/Uploads/Goods/2014-03-24/532fd363ebc33.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3252" target="_blank">《幻味奇缘》白饭如霜</a>
                    <p> ￥22.50</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3251" class="tupian" style="background:url(/Uploads/Goods/2014-03-24/532fcd3756d66.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3251" target="_blank">《浪客行》霜城著</a>
                    <p> ￥25.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3247" class="tupian" style="background:url(/Uploads/Goods/2014-03-17/5326b047849ed.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3247" target="_blank">《风虎北望》君天 [赠</a>
                    <p> ￥22.50</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3242" class="tupian" style="background:url(/Uploads/Goods/2014-03-12/53201de3e13f1.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3242" target="_blank">星云幻想1游戏学园篇（</a>
                    <p> ￥18.00</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3229" class="tupian" style="background:url(/Uploads/Goods/2014-02-25/530c4cfd57801.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3229" target="_blank">《少年心理师2 遗传密</a>
                    <p> ￥22.50</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3228" class="tupian" style="background:url(/Uploads/Goods/2014-02-24/530b0d3a514d1.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3228" target="_blank">《白夜灵异事件薄3》Ⅲ</a>
                    <p> ￥22.50</p>
                </div>
            </li><li> <a href="/index.php/goods/index/id/3225" class="tupian" style="background:url(/Uploads/Goods/2014-02-21/5306a21e71d1e.jpg.150x150.jpg)" target="_blank"></a>
                <div class="wen_sm"><a href="/index.php/goods/index/id/3225" target="_blank">《龙族3黑月之潮 ·下</a>
                    <p> ￥33.20</p>
                </div>
            </li>	  <div class="clear"></div>
        </ul>
    </div>
    <!--最热排行榜-->
    <div class="list_big list_beijing_5">
        <ul class="list_host">
            <li class="lihover"><a href="/index.php/goods/index/id/3293" class="Text_color_5" target="_blank">《拳无敌》司马嘶风著..</a>
                <div class="graphic"><a href="/index.php/goods/index/id/3293" style="background:url(/Uploads/Goods/2014-05-09/536c39855bcd1.jpg.50x50.jpg)" class="tu" target="_blank"></a>
                    <div class="wen">￥22.50</div>
                </div>
                <div class="clear"></div>
            </li>
            <li><a href="/index.php/goods/index/id/3272" title="《派先生的奇幻家具店》由得林洛斯著" target="_blank">《派先生的奇幻家具店》由得林</a></li>          <li><a href="/index.php/goods/index/id/3254" title="龙族3黑月之潮纪念精装礼盒" target="_blank">龙族3黑月之潮纪念精装礼盒</a></li>          <li><a href="/index.php/goods/index/id/3252" title="《幻味奇缘》白饭如霜著" target="_blank">《幻味奇缘》白饭如霜著</a></li>          <li><a href="/index.php/goods/index/id/3251" title="《浪客行》霜城著" target="_blank">《浪客行》霜城著</a></li>          <li><a href="/index.php/goods/index/id/3247" title="《风虎北望》君天 [赠全新九州绝版大地图]" target="_blank">《风虎北望》君天 [赠全新九州</a></li>          <li><a href="/index.php/goods/index/id/3242" title="星云幻想1游戏学园篇（双子星罗著）" target="_blank">星云幻想1游戏学园篇（双子星罗</a></li>          <li><a href="/index.php/goods/index/id/3229" title="《少年心理师2 遗传密令》风念南[内赠少年双雄卡贴]" target="_blank">《少年心理师2 遗传密令》风念</a></li>          <li><a href="/index.php/goods/index/id/3228" title="《白夜灵异事件薄3》Ⅲ风魂著" target="_blank">《白夜灵异事件薄3》Ⅲ风魂著</a></li>          <li><a href="/index.php/goods/index/id/3225" title="《龙族3黑月之潮 ·下》" target="_blank">《龙族3黑月之潮 ·下》</a></li>    </ul>
    </div>
    <div class="clear"></div>

    <!--广告-->


</div>


<!--bottom-->
<div class="bottom_big">
    <div class="help_big">
        <div class="help">
            <div class="biao_help"><span class="biao_help_1"></span>新手指南</div>
            <ul>
                <li><a href="/index.php/Home/Article/show/id/17">个人中心功能介绍</a></li><li><a href="/index.php/Home/Article/show/id/13">新用户注册</a></li><li><a href="/index.php/Home/Article/show/id/16">找回密码</a></li><li><a href="/index.php/Home/Article/show/id/18">怎样下订单</a></li>      </ul>
        </div><div class="help">
            <div class="biao_help"><span class="biao_help_2"></span>付款|退款方式</div>
            <ul>
                <li><a href="/index.php/Home/Article/show/id/19">支付方式</a></li><li><a href="/index.php/Home/Article/show/id/20">如何退款</a></li><li><a href="/index.php/Home/Article/show/id/21">支付常见问题</a></li>      </ul>
        </div><div class="help">
            <div class="biao_help"><span class="biao_help_3"></span>配送方式</div>
            <ul>
                <li><a href="/index.php/Home/Article/show/id/23">发货时间及方式</a></li><li><a href="/index.php/Home/Article/show/id/25">配送范围及费用 </a></li><li><a href="/index.php/Home/Article/show/id/29">配送常见问题</a></li><li><a href="/index.php/Home/Article/show/id/30">商品验货与签收</a></li>      </ul>
        </div><div class="help">
            <div class="biao_help"><span class="biao_help_4"></span>售后服务</div>
            <ul>
                <li><a href="/index.php/Home/Article/show/id/26">退换货原则</a></li><li><a href="/index.php/Home/Article/show/id/27">退换货流程</a></li><li><a href="/index.php/Home/Article/show/id/28">补发货流程</a></li>      </ul>
        </div><div class="help">
            <div class="biao_help"><span class="biao_help_5"></span>帮助中心</div>
            <ul>
                <li><a href="/index.php/Home/Article/show/id/22">新手上路</a></li><li><a href="/index.php/Home/Article/show/id/24">联系我们</a></li>      </ul>
        </div>    <div class="clear"></div>
    </div><div id="footer">
        <div class="friendship">
            <p >友情链接:
                <a href="http://pic.emland.net/" target="_blank">动漫萌图</a>
                |<a href="http://www.findtuan.com/" target="_blank">团购网站排名</a>
                |<a href="http://toriko.17dm.com/" target="_blank">美食的俘虏</a>
                |<a href="http://mowang.17dm.com/" target="_blank">恶魔奶爸</a>
                |<a href="http://gintama.17dm.com/" target="_blank">银魂</a>
                |<a href="http://fairytail.manmankan.com" target="_blank">妖精的尾巴</a>
                |<a href="http://www.1kkk.com/" target="_blank">在线漫画</a>
                |<a href="http://www.mkzhan.com/" target="_blank">漫客栈</a>
                |<a href="http://hunter.17dm.com/" target="_blank">全职猎人</a>
                |<a href="http://www.pobaby.net/" target="_blank">小破孩</a>
                |<a href="http://www.lebeibei.com/" target="_blank">乐贝贝童装网</a>
                |<a href="http://www.43423.com/" target="_blank">漫画在线</a>
                |<a href="http://sao.52pk.com/" target="_blank">刀剑神域</a>
                |<a href="http://wqwz.52pk.com/" target="_blank">新网球王子</a>
                |<a href="http://www.k76.com/" target="_blank">漫画盒子</a>
                |</p>
        </div>
        <p><a href="http://www.zymk.cn/jianjie.html" target="_blank">漫客简介</a> | <a href="http://www.zymk.cn/ggzs.html" target="_blank">广告招商</a> | <a href="http://www.zymk.cn/hzzq.html" target="_blank">合作专区</a> | <a href="mailto:manke_zhy@qq.com">联系我们</a></p>
        <p style="text-align: center;">互联网出版许可证　新出网证（鄂）字　006　号
            信息产业部许可证号： 鄂B2-20030034-1</p>
    </div><div class="clear"></div>
</div>
<!-- 在线客服 -->
<a style="position:fixed;width:36px;height:113px;right:10%; top:270px; z-index:10000;_position:absolute;_top:expression(documentElement.scrollTop + 270 + 'px');" href="http://wpa.qq.com/msgrd?v=3&uin=800079027&site=qq&menu=yes" target="_blank" title="在线咨询"><img src="images/kefu.gif" /></a>
<!-- 在线客服 End -->
<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F992dda5e3ea01d3537047d36bfe2cb92' type='text/javascript'%3E%3C/script%3E"));
</script>
</body></html>