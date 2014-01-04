<div>
    这里是apps 的列表页面
</div>

<div>
    <a href='app-edit.php'>Add new Apps</a>
    <ul>
        <?php foreach( $apps as $app ){ ?>
            <li>
            <span>
                <input type='checkbox'
                       name='app_<?php echo $app->app_id;?>'
                       id='app-<?php echo $app->app_id;?>' class='app-checkbox' />
            </span>
                <span><a href="app-edit.php?id=<?php echo $app->app_id ?>"><?php echo $app->name;?></a></span>
                <span><?php echo $app->description;?></span>
                <span><?php echo $app->image_url;?></span>
                <span><?php echo $app->work_date;?></span>
                <span><?php echo $app->update;?> </span>
            </li>
        <?php } ?>
    </ul>
    <div>
        <button class='delete-btn'>
            delete
        </button>
    </div>
</div>

<script>

    function removeapp( appArr ){
        var l = appArr.length;
        for(var i = 0; i < l; i ++){
            var app = document.getElementById('app-'+appArr[i]);
            var li = app.parentNode.parentNode;
            var ul = app.parentNode.parentNode.parentNode;
            ul.removeChild(li);
        }
    }

    (function(){
        $('.delete-btn').click(function(){
            var data = {
                'appIds' : ''
            };
            var pjt = [];
            $('.app-checkbox').each(function(){

                if(this.checked == true){
                    var currentId = this.id.split('-')[1];
                    data.appIds += currentId + '|';
                    pjt.push( currentId );
                }
            });
            data.appIds = data.appIds.replace(/(\|)$/,'');
            var url = './app-delete.php';
            $.post(url, data, function(d){
                if(d){
                    removeapp(pjt);
                }
            },'json');
        });
    })();


</script>