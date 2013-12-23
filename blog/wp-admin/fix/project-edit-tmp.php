<div>
    <div class=''>
        <form action='' method="post" >
            <input type='hidden' name='project_id' value="<?php echo $project->project_id ?>" />

            <input type='text' name='project_name' value="<?php echo $project->name ?>" />
            <div id='' >
                <span>图片</span>
                <span id='addSpan'>添加图片</span>
                <input type='hidden' name='project_image' />
            </div>
            作品链接：<input type='text' name='link' value="<?php echo $project->link; ?> " />

            <textarea name='project_description' >
<?php echo $project->description; ?>
            </textarea>
            <button>提交</button>
        </form>
    </div>
</div>