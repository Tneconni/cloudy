<div>

    this is the app list <a href='apps-edit.php'>add new app</a>
    <ul>
        <?php foreach( $appList as $app ){ ?>
        <li>

            <span><a href="<?php echo $app->url; ?>"><?php echo $app->name; ?></a></span>
            <span><?php echo $app->description; ?></span>

        </li>
        <?php } ?>
    </ul>


</div>