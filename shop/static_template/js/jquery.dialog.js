/*
 * author maga
 * 浣跨敤art.dialog瀹炵幇鐨勫璇濇
 * 鍙彁渚涘父鐢ㄧ殑鎺ュ彛锛屽鏋滈渶瑕佷娇鐢ㄥ師鐢熺殑鎺ュ彛锛屽彲浠ョ洿鎺ュ弬鑰僪ttp://www.planeart.cn/demo/artDialog/_doc/API.html
 */

(function() {

    //瀵硅瘽妗嗗唴鏍稿湴鍧€
    var CORE_DIALOG = "/Public/js/jquery.artDialog.core.js?skin=default";
    //瀵硅瘽妗嗘牱寮忓湴鍧€
    var CORE_DIALOG_CSS = "";
    //鍒涘缓鑴氭湰
    var _dialog_script = document.createElement("SCRIPT");
    _dialog_script.src = CORE_DIALOG;
    _dialog_script.type = "text/javascript";
    //鍒涘缓鏍峰紡
    //var dialog_css = document.createElement("LINK");
    //dialog_script.href = CORE_DIALOG_CSS;
    //dialog_css.type = "text/css";
    //dialog_css.rel = "stylesheet";
    var _dialog_js = document.getElementById("dialog_js");
    //dialog_js.parentNode.insertBefore(dialog_css, dialog_js);
    var _parentNode = _dialog_js.parentNode;
    _parentNode.insertBefore(_dialog_script, _dialog_js);

})();



var shop = shop||{};

//甯哥敤娑堟伅妗�,濡傛灉闇€瑕佸洖璋冨嚱鏁帮紝鍙互璁剧疆鐐瑰嚮纭鍚庣殑鎿嶄綔锛屼竴鑸笉闇€瑕佽缃紝message鍙互涓篽tml浠ｇ爜

shop.msg = function(message, ok_op, cancel_text, cancel_op){

    var Obj = {};
    Obj.content = message;
    Obj.fixed = true;
    Obj.lock = true;
    Obj.opacity = 0.23;
    Obj.resize = false;
    Obj.width = 250;
    Obj.height = 90;
    if(typeof(ok_op) == "function"){
        Obj.ok = ok_op;
    }else{
        Obj.ok = true;
    }
    if(cancel_text){
        Obj.cancelVal = cancel_text;
        if(typeof(cancel_op) == "function"){
            Obj.cancel = cancel_op;
        }else{
            Obj.cancel = true;
        }
    }
    art.dialog(Obj);

    //art.dialog({

    //id: 'msg',

    //title: '鍏憡',

    //content: message,

    //width: 220,

    //height: 100,

    //left: '100%',

    //top: '100%',

    //fixed: true,

    //background: '#000', // 鑳屾櫙鑹�

    //opacity: 0.23,	// 閫忔槑搴�

    //lock: true,  //閿佸睆

    //drag: false, //涓嶅厑璁告嫋鍔�

    //resize: false, //涓嶅厑璁哥缉鏀�

    //cancelVal: cancel_text,

    //纭畾鎵ц鐨勫嚱鏁�

    //ok: function () {

    //if(typeof(ok_op) == "function")

    //ok_op();

    //this.close();

    //return false;

    //}

    //});

};

shop.msg2 = function(message, ok_text, ok_op, cancel_text, cancel_op){

    var Obj = {};
    Obj.content = message;
    Obj.fixed = true;
    Obj.lock = true;
    Obj.opacity = 0.23;
    Obj.resize = false;
    Obj.width = 250;
    Obj.height = 90;
    if(ok_text){
        Obj.okVal = ok_text;
        if(typeof(ok_op) == "function"){
            Obj.ok = ok_op;
        }else{
            Obj.ok = true;
        }
    }
    if(cancel_text){
        Obj.cancelVal = cancel_text;
        if(typeof(cancel_op) == "function"){
            Obj.cancel = cancel_op;
        }else{
            Obj.cancel = true;
        }
    }
    art.dialog(Obj);
};

shop.url = function(url, width, height,callback){

    var width = width?width:480;

    var height = height?height:320;

    var Obj = {};
    Obj.fixed = true;
    Obj.lock = true;
    Obj.opacity = 0.23;
    Obj.resize = false;
    Obj.width = width;
    Obj.height = height;
    if(callback){
        Obj.ok = callback;
    }

    art.dialog.open(url,Obj);
    /*art.dialog.open(url, {

     fixed: true,

     lock: true,

     opacity: 0.23,

     resize: false,

     width: width,

     height: height

     }); */

};

shop.load = function(url, width, height,callback,title){

    var width = width?width:480;

    var height = height?height:320;

    var Obj = {};
    Obj.fixed = true;
    Obj.lock = true;
    Obj.opacity = 0.23;
    Obj.resize = false;
    Obj.width = width;
    Obj.height = height;
    Obj.title = title;
    if(callback){
        Obj.ok = callback;
    }

    art.dialog.load(url,Obj);
    /*art.dialog.open(url, {

     fixed: true,

     lock: true,

     opacity: 0.23,

     resize: false,

     width: width,

     height: height

     }); */

};

//鍏朵粬鑷畾涔夋帴鍙�