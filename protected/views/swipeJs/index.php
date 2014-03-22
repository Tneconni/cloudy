<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/apps/mobile/swipe.js'></script>
<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/apps/mobile/slideMenu.js'></script>
<style>
    .swipe{ width:270px; overflow: hidden; height:30px;}
    .swipe ul{ width:550px;}
    .swipe ul li{ border-bottom : solid 1px #006687; float:left; border-right:solid 1px #006687; width:90px; }

</style>
<div>
    一个在移动端下的触摸滑动菜单， 支持pc端的鼠标拖拽
</div>
<div id="menu" class='swipe'>
    <ul >
        <li>cat</li>
        <li>cats</li>
        <li>donut</li>
        <li>christmas</li>
        <li>sailing</li>
        <li>island</li>
    </ul>
</div>
<div class='menuContent'>
    <div><img src="/assets/img/swipe/cat.jpg"></div>
    <div style="display:none"><img src="/assets/img/swipe/cats.jpg"></div>
    <div style="display:none"><img src="/assets/img/swipe/donut.jpg"></div>
    <div  style="display:none"><img src="/assets/img/swipe/christmas.jpg"></div>
    <div style="display:none"><img src="/assets/img/swipe/sailing.jpg"></div>
    <div style="display:none"><img src="/assets/img/swipe/island.jpg"></div>
</div>


<script>

    function initMenu(){
        $('#menu li').click(function(){
            var index = $(this).index();
            console.log( "index : ");
            console.log( index );
            $('.menuContent div').css({ display : 'none'});
            $('.menuContent div').slice(index, index + 1 ).css({ display: ''});
        });
    }

    $(document).ready(function(){
        initMenu();
        var slider = new slideMenu(document.getElementById('menu'),{

        });
    });

</script>