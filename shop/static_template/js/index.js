// JavaScript Document
$(document).ready(function(){
    //鏂板搧涓婃灦
    $('#news li').hover(function(){
        $(this).addClass('product-iWrap');
    },function(){
        $(this).removeClass('product-iWrap');
    });

    $('#hot li').hover(function(){
        $(this).addClass('product-iWrap');
    },function(){
        $(this).removeClass('product-iWrap');
    });


});
