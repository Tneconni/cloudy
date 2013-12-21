<div>
    lottery~

    <h3>抽奖页面:</h3>
    <div>
        <button id='lottery-btn'>抽奖</button>
    </div>
</div>
<script>
    (function(){

        $('#lottery-btn').click(function(){
            var url = "index.php?r=lottery/getLuckyDog";
            var data = {
//                lala : '',
//                gaga : ''
            };
            $.get(url, data, function( d ){
                if( d.status ){

                    alert( d.luckyDog );
                }else{
                    alert( 'nothing~' );

                }
            },'json');

        });

    })();

</script>