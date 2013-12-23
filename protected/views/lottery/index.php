<style type="text/css">
    body{background:black;color:white;line-height:29px;}
    span{border:1px solid gray;background:#333;padding:4px;font-weight:bold;}
</style>
<h3 class='lottery-title'>Imaginato Christmas lottery</h3>
<div id="imgContainer" style="width:1200px; height:400px;border:none; margin:10px auto">
    <?php
    $i = 0;
    foreach($members as $member){
        $i ++;
        if( $i > 15){
            break;
        }
        ?>
    <img id="photo-<?php echo $member['lottery_customer_id'];?>"
         name='<?php echo $member['name'];?>'
         src="/assets/img/lottery/<?php echo $member['img_url']; ?>">
    <?php } ?>

    <input type='hidden' id='lottery-level' value="<?php echo 3 - $luckyDogsCount; ?>" />
</div>
<div class='lucky-dog-list'>
    <!--
    <div class='lucky-dog'>
        <img src="/assets/img/lottery/<?php echo $member['img_url']?>" width="160px" />
        <p><?php echo $member['lottery_customer_id'];?></p>
        <h3>一等奖</h3>
    </div>
    <div class='lucky-dog'>
        <img src="/assets/img/lottery/<?php echo $member['img_url']?>" width="160px"/>
        <p><?php echo $member['lottery_customer_id'];?></p>
        <h3>一等奖</h3>
    </div>
    <div class='lucky-dog'>
        <img src="/assets/img/lottery/<?php echo $member['img_url']?>" width="160px"/>
        <p><?php echo $member['lottery_customer_id'];?></p>
        <h3>一等奖</h3>
    </div>

    -->
    <?php foreach($luckyDogs as $luckyDog){ ?>
        <div class='lucky-dog'>
            <img src="/assets/img/lottery/<?php echo $luckyDog['img_url']?>" width="160px"/>
            <p><?php echo $luckyDog['name'];?></p>
            <h3><?php echo $luckyDog['lottery_level'];?>等奖</h3>
        </div>
    <?php } ?>
</div>
<div>
    <div class='lottery-btn'>
        <?php if( $luckyDogsCount < 3){ ?>
            <button id='lottery-start'
                    class="prize-<?php echo 3 - $luckyDogsCount;?>"><?php echo $lotteryType[3 - $luckyDogsCount]?>
            </button>
        <?php }else{ ?>
            <button id='lottery-start' class='completed'><?php echo $lotteryType[3 - $luckyDogsCount]?></button>
        <?php } ?>
        <button id='lottery-stop'>Stop</button>
        <button id='init-lottery'>Init Lottery</button>
    </div>
</div>
<script language="javascript">

    function imgRound(id,w,h,x,y,r,dv,rh,ah){
        r = parseInt( document.getElementById( id ).style.width ) / 2;

        if (ah==undefined) ah=1;
        if (rh==undefined) rh=10;
        var speed = dv * ah; //旋转速度

        var dv = 0; //即时旋转速度
        var pi=3.1415926575;
        var d=pi/2;
        var pd=Math.asin(w/2/r);
        this.smove=false;
        var moveStop = false;
        var friction = 0;
        var imgArr=new Array();
        var objectId=id;
        var o=document.getElementById(objectId);
        o.style.position="relative";
        var arrimg=o.getElementsByTagName("img");
        var pn=arrimg.length; //图片数量
        var ed=pi*2/pn;
        for (n=0;n<arrimg.length;n++){
            var lk=arrimg[n].getAttribute("link");
            if (lk!=null) arrimg[n].setAttribute("title",lk);
            arrimg[n].onclick=function(){
                if (this.getAttribute("link")!=null){
                    if (this.getAttribute("target")!="_blank") window.location=(this.getAttribute("link"))
                    else window.open(this.getAttribute("link"))
                }
            };
//            arrimg[n].onmouseout=function(){this.smove=true;}
//            arrimg[n].onmouseover=function(){this.smove=false;}
            arrimg[n].style.position="absolute";
            imgArr.push(arrimg[n]);
        }
        this.roundMove=function(){
            for (n=0;n<=pn-1;n++){
                var o=imgArr[n];
                var ta=Math.sin(d+ed*n),strFilter;
                if (ta<0) o.style.left=Math.cos(d+ed*n-pd)*r+x+"px";
                else o.style.left=Math.cos(d+ed*n+pd)*r+x+"px";
                o.style.top=ta*rh+rh+y+"px";
                var zoom=Math.abs(Math.sin((d+ed*n)/2+pi/4))*0.5+0.5;
                o.style.width=Math.abs(Math.cos(d+ed*n+pd)-Math.cos(d+ed*n-pd))*zoom*r+"px";
                o.style.height=zoom*h+"px";
                if (ta<0) {ta=(ta+1)*80+20;o.style.zIndex=0;}
                else {ta=100;o.style.zIndex=1}
                if (o.style.zIndex<=0) strFilter="FlipH(enabled:true)"
                else strFilter="FlipH(enabled:false)";
                strFilter=strFilter+" alpha(opacity="+ta+")";
                o.style.opacity=ta/100;
                o.style.filter=strFilter;
            }

            dv = dv - friction;

            if( dv < 0){
                dv = 0;
                if( moveStop ){
                    moveStop = false;
                    var luckyDog = this.findLuckyDog();
                    setLottery( luckyDog );
                }

            }
            d = d + dv;

        };
        this.stopRound = function(){
            moveStop = true;
            friction = 0.0004;

        };
        this.initSpeed = function(){

            dv = speed;
            friction = 0;

        };
        this.findLuckyDog = function(){
            var photos = o.getElementsByTagName('IMG');
            var l = photos.length;
            var luckyDog = {
                id : '',
                distance : 10000
            };
            for( var i = 0; i < l; i ++){
                var left = parseFloat( photos[i].style.left );
                var dis = x - left;
                dis = Math.abs( dis );
                if(luckyDog.distance == 100000){
                    luckyDog.distance = dis;
                }else if( luckyDog.distance > dis && photos[i].style.zIndex > 0){
                    luckyDog.distance = dis;
                    luckyDog.id = photos[i].id.split('-')[1];
                    luckyDog.name = $(photos[i]).attr('name');
                }
            }

            //todo : ajax 发送到后台
            return luckyDog;
        };
    }
</script>
<script>
    window.onload=function(){
//            var rt=new imgRound("imgContainer",120,90,300,80,230,0.01);
    };
    function showLuckyDog( data ){
        var html = "<div class='lucky-dog'>" +
            "<img src='" +
            data.img_url + "' width='160px' />" +
            "<p>" +
            data.name +
            "</p>" +
            "<h3>" + data.lottery_level + "等奖</h3>"+
            "</div>";
        $('.lucky-dog-list').append( html );
        var imgContainer = document.getElementById('imgContainer');
        var luckDogImg = document.getElementById('photo-' + data.lottery_customer_id);
        imgContainer.removeChild( luckDogImg );

    }

    function setLottery( luckyDog ){
        var url = "index.php?r=lottery/setLottery";
        var lotteryLevelInp = document.getElementById('lottery-level');
        var lotteryLevel = parseInt( lotteryLevelInp.value );
        if(lotteryLevel < 1){
            alert('操作有误');
        }
        var data = {
                lottery_customer_id : luckyDog.id,
                name : luckyDog.name,
                lottery_level : lotteryLevel
        };

        $.post(url, data, function( d ){
            if( d ){

                if(lotteryLevel < 1){
                    alert('操作有误');
                    return;
                }else{
                    lotteryLevel = lotteryLevel - 1;
                    lotteryLevelInp.value = lotteryLevel;
                    if(lotteryLevel < 1){
                        document.getElementById('lottery-start').innerHTML = '抽奖完毕';
                        document.getElementById('lottery-start').className = 'completed';
                    }else{
                        document.getElementById('lottery-start').innerHTML = lotteryLevel + '等奖';
                    }
                }
                data.img_url = document.getElementById('photo-' + data.lottery_customer_id).src;
                showLuckyDog( data );
            }else{
                alert( '奖已经抽完了， 等明年好不' );

            }
        },'json');
    }
    (function(){
        var turning = 0;

        var rt=new imgRound("imgContainer",120,90,600,120,630,0.08);

        setInterval(function(){rt.roundMove()},20);

        document.getElementById('lottery-start').onclick = function(){
            if(this.className.indexOf('completed') > -1 ){
                alert('抽奖已完毕');
                return;
            }
            rt.initSpeed();
        };
        document.getElementById('lottery-stop').onclick = function(){
            rt.stopRound();
        };

        document.getElementById('init-lottery').onclick = function(){
            var url = "index.php?r=lottery/initLottery";
            var data = {

            };
            $.post(url, data, function( d ){
                if( d ){
                    location.reload();
                }else{
                    alert('init failed');
                }
            },'json');
        };

    })();

</script>

