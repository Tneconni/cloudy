<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="www.w3.org/1999/xhtml">
<head>
    <title>3D图片旋转特效</title>
    <meta http-equiv="content-Type" content="text/html;charset=gb2312">
    <style type="text/css">
        body{background:black;color:white;line-height:29px;}
        span{border:1px solid gray;background:#333;padding:4px;font-weight:bold;}
    </style>

</head>
<body>
<div id="imgContainer" style="width:100%; height:600px;border:1px solid red">
    <?php foreach($members as $member){ ?>
    <img id="<?php echo $member['lottery_customer_id'];?>" src="/assets/img/lottery/<?php echo $member['img_url']; ?>" link="/" target="_blank">
    <?php } ?>

</div>
<div>
    lottery~

    <h3>抽奖页面:</h3>
    <div>
        <button id='lottery-start'>开始转动</button>
        <button id='lottery-btn'>停！</button>
    </div>
</div>
<script language="javascript">

    function imgRound(id,w,h,x,y,r,dv,rh,ah){
        if (ah==undefined) ah=1;
        if (rh==undefined) rh=10;
        var speed = dv * ah; //旋转速度
        console.log( dv );
        console.log( ah );
        console.log( speed );
        var dv = 0; //即时旋转速度
        var pi=3.1415926575;
        var d=pi/2;
        var pd=Math.asin(w/2/r);
        this.smove=false;
//        this.moveStop = false;
        friction = 0;
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
//            console.log( dv );
            if( dv < 0){
                dv = 0;
                if( moveStop ){
                    var luckyDog = this.findLuckyDog();

                }

            }
            d = d + dv;

        };
        this.stopRound = function(){
//            this.moveStop = true;

            friction = 0.0004;

        };
        this.initSpeed = function(){
            console.log( "speed :");
            console.log( speed );
            dv = speed;
            friction = 0;
        };
        this.findLuckyDog = function(){
            var photos = o.getElementsByTagName('IMG');
            var l = photos.length;
            var luckyDog = {
                id : '',
                distance : -10000
            };
            for( var i = 0; i < l; i ++){
                var left = parseFloat( photos[i].style.left );
                var dis = x - left;
                dis = dis.abs();
                if(luckyDog.distance == -100000){
                    luckyDog.distance = dis;
                }else if( luckyDog.distance > dis){
                    luckyDog.distance = dis;
                    luckyDog.id = photos[i].id.split('-')[1];
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
    (function(){
        var turning = 0;
        var rt=new imgRound("imgContainer",80,60,650,120,630,0.08);


        setInterval(function(){rt.roundMove()},20);

        document.getElementById('lottery-start').onclick = function(){
            rt.initSpeed();
        };
        document.getElementById('lottery-btn').onclick = function(){
            rt.stopRound();
//            rt.smove = false;
            var url = "index.php?r=lottery/getLuckyDog";
            var data = {
//                lala : '',
//                gaga : ''
                prize : 2
            };
            $.get(url, data, function( d ){
                if( d.status ){

//                    alert( d.luckyDog );
                }else{
                    alert( 'nothing~' );

                }
            },'json');

        };

    })();

</script>
</body>
</html>
