<div>
    <div class=''>
        <form action='' method="post" >
            <input type='hidden' name='project_id' value="<?php echo $project->project_id ?>" />
            <ul>
                <li>作品名称：
                    <input type='text' name='project_name' value="<?php echo $project->name ?>" />
                </li>
                <li>
                    <div id='' >
                        <span>图片</span>
                        <span id='add-post-image' class='insert-media' style="cursor:pointer">添加图片</span>
                        <div id="post-image-frm" >
                            <?php if(!empty($project->iamge_url)){ ?>
                                <img src="/blog/wp-content/uploads/<?php echo $project->iamge_url; ?>" />
                            <?php } ?>
                        </div>

                        <input type='hidden' name='project_image' id='post-image-path' value="<?php echo $project->iamge_url; ?>" />
                    </div>
                </li>
                <li>
                    作品链接 : <input type='text' name='link' value="<?php echo $project->link; ?> " />
                </li>
                <li>
                    <span id='add-desc'>描述：</span>
                    <textarea name='project_description' ><?php echo $project->description; ?></textarea>
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