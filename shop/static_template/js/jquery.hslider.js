/**
 /*Author: maga
 /*鐢ㄤ簬姘村钩婊氬姩鐨勬彃浠�
 **/
(function($){

    var defaults = {
        width:730,
        gap:10
    };

    $.fn.hslider = function(options){

        var settings = $.extend(defaults, options);
        var ul = $("ul", this);
        if(settings.width == 0) settings.width = ul.parent().width();
        if(settings.gap == 0) settings.gap = 10;

        //褰撳墠鏈€宸﹁竟鐨勭储寮曞€�
        var index = 0;
        //li鐨勯暱搴�

        var length = $("li", ul).length;
        var li = $($("li", ul).get(0));
        var li_left_gap = parseInt(li.css("margin-left"));
        var li_right_gap = parseInt(li.css("margin-right"));
        settings.gap = li_left_gap + li_right_gap;

        var li_width = li.width() + settings.gap;
        ul.width(length * li_width);
        var display_num = 0
        while(Math.abs(display_num*li_width - settings.width) > li_width/2){
            display_num ++;
        }
        settings.width = display_num * li_width;
        ul.parent().width(settings.width);

        var ul_width = ul.width();
        var container_width = ul.parent().width();

        setStatus();

        $(".slide_control_l").click(function(){
            if(index > 0){
                index--;
                ul.animate({left: -index * li_width + "px"}, {complete: function(){
                    setStatus();
                }});
            }
            return false;
        });

        $(".slide_control_r").click(function(){
            var right = ul_width  - container_width - index*li_width;
            if(right > 0){
                index++;
                ul.animate({left: -index * li_width + "px"}, {complete:function(){
                    setStatus();
                }});
            }
            return false;
        });

        function setStatus(){
            if(index > 0){
                $(".slide_control_l").show();
            }else{
                $(".slide_control_l").hide();
            }
            var right = ul_width  - container_width - index*li_width;
            if(right > 0){
                $(".slide_control_r").show();
            }else{
                $(".slide_control_r").hide();
            }
        }

    };
})(jQuery);
