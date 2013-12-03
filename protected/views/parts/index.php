<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/apps/rotation/rotate.js'></script>
<div id='container'>
    <div id='content'>

        <div>
            this is the single js app page , constructing ...

            <div><?php echo $app->name; ?></div>
            <div><?php echo $app->id;?></div>
            <div></div>

        </div>
        <?php if( !empty($app->js_file) ){ ?>
            <script src="<?php echo $app->js_file; ?>"></script>
        <? } ?>
        <?php echo $app->contents; ?>


    </div>
</div>
<script>
    rotate();
</script>

