<div>
    <div class=''>
        <form action='' method="post" >
            <input type='hidden' name='app_id' value="<?php echo $app->app_id ?>" />
            <ul>
                <li>App名称：
                    <input type='text' name='app_name' value="<?php echo $app->name ?>" />
                </li>
                <li>
                    <div id='' >
                        <span>图片</span>
                        <span id='add-post-image' class='insert-media' style="cursor:pointer">添加图片</span>
                        <div id="post-image-frm" >
                            <?php if(!empty($app->image_url)){ ?>
                                <img src="/blog/wp-content/uploads/<?php echo $app->image_url; ?>" />
                            <?php } ?>
                        </div>

                        <input type='hidden' name='app_image' id='post-image-path' value="<?php echo $app->image_url; ?>" />
                    </div>
                </li>
                <li>
                    作品链接 : <input type='text' name='link' value="<?php echo $app->link; ?> " />
                </li>
                <li>
                    <span id='add-desc'>描述：</span>
                    <textarea name='app_description' ><?php echo $app->description; ?></textarea>
                </li>
                <li>
                    <button>提交</button>
                </li>
            </ul>

        </form>
    </div>
</div>

<div style='display:none'>

    <?php wp_editor( $post->post_content, 'content', array(
        'dfw' => true,
        'tabfocus_elements' => 'insert-media-button,save-post,add-img',
        'editor_height' => 360,
    ) ); ?>

</div>
<div id="post-image-frm" style='display:none'></div>
<script>
    document.getElementById('add-post-image').onmouseup = function(){

        $(this).addClass("hanging");

    };

</script>