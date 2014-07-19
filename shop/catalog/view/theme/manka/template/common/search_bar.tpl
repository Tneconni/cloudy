<div id="header_1">
    <div class="header_top Id">
        <div class="mantou"></div>
        <a class="logo" href="<?php echo $home;?>"><img src="image/logl.gif" /></a>
        <!--搜索-->
        <div class="search_big" style="padding-bottom:7px">

            <input name="search-word" type="text" value="<?php echo $search;?>" class="text"/>

            <input id="search-sbt" type="submit" class="button" value="搜索" />
            <div class="clear"></div>
            <!--
                        <div class="hotwords">热门搜索：
                            <a href="/index.php/home/search/index/keyword/绕线器">绕线器</a>
                            <a href="/index.php/home/search/index/keyword/暴走">暴走</a>
                            <a href="/index.php/home/search/index/keyword/斗罗">斗罗</a>
                            <a href="/index.php/home/search/index/keyword/卡贴">卡贴</a>
                            <a href="/index.php/home/search/index/keyword/2014">2014</a>
                            <a href="/index.php/home/search/index/keyword/斗破">斗破</a>
                            <a href="/index.php/home/search/index/keyword/抱枕">抱枕</a>
                            <a href="/index.php/home/search/index/keyword/偷星">偷星</a>
                        </div>
            -->
            <div class="clear"></div>
        </div>
    </div>
    <script>

        $('#search-sbt').click(function(){

            var word = $('input[name="search-word"]').val();

            var request  = '&search=' + word;

            location = "<?php echo $searchUrl; ?>" + request;
        });
        $('input[name="search-word"]').keydown(function( event ){


            if( navigator.userAgent.indexOf('MSIE') > -1){
                var key = event.keyCode;
            }else{
                var key = event.which;
            }

            if( key == 13 ){
                var word = $('input[name="search-word"]').val();

                var request  = '&search=' + word;

                location = "<?php echo $searchUrl; ?>" + request;
            }
        });
    </script>
</div>