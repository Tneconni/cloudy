<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/apps/mobile/swipe.js'></script>
<style>
    .swipe ul{}
    .swipe ul li{ border-bottom : solid 1px #006687}
</style>
<div>
    this is the mobile test page
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

    $(document).ready(function(){
        var slider = new Swipe(document.getElementById('menu'),{
            auto:4000,
            callback : function( event, index){

                prev = (index + 5 ) % 6;
                var menuContent = $('.menuContent')[0];

                $(menuContent.children[prev]).fadeOut();
                $(menuContent.children[index]).fadeIn();

            }

        });
    });
</script>