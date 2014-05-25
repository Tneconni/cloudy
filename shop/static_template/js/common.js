$(document).ready(function(){

    $("#my_account").mouseover(function(){
        $(".account_big").show();
    }).mouseout(function(){
            $(".account_big").hide();
        });


    //渚ц竟瀵艰埅
    $('.allnav_hover').hover(function(){
        $(this).find('.allnav_head').addClass('allnav_open');
        $(this).find('.allnav_content').show();
    },function(){
        $(this).find('.allnav_head').removeClass('allnav_open');
        $(this).find('.allnav_content').hide();
    });
    $('.Classification_navigation_big li').hover(function(){
        $(this).addClass('selected');
        $(this).find('.i-mc').show();
    },function(){
        $(this).removeClass('selected');
        $(this).find('.i-mc').hide();
    });
    //鏇存柊璐墿杞︽暟閲�
    cartNumber();

});

// JavaScript Document

//鏇存柊璐墿杞︽暟閲�

function cartNumber(){
    $.get('/index.php/Home/Cart/cartNumber',function(data){
        if(data.res == 1){
            $('#cart_number').html(data.data);
        } else{
            $('#cart_number').html(0);
        }
    },'json');
};
function AddFavorite(sURL, sTitle){
    try{
        window.external.addFavorite(sURL, sTitle);
    }catch (e){
        try{
            window.sidebar.addPanel(sTitle, sURL, "");
        }catch (e){
            alert("鍔犲叆鏀惰棌澶辫触锛岃浣跨敤Ctrl+D杩涜娣诲姞");
            return false;
        }
    }
};