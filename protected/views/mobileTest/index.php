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
        <li>test 1</li>
        <li>test 2</li>
        <li>test 3</li>
        <li>test 4</li>
        <li>test 5</li>
        <li>test 6</li>
        <li>test 7</li>
        <li>test 8</li>
        <li>test 9</li>
    </ul>
</div>


<script>
    $(document).ready(function(){
        var slider = new Swipe(document.getElementById('menu'),{auto:4000});
    });
</script>