<div>
    <a href='project-edit.php'>Add new project</a>
    <ul>
        <?php foreach( $projects as $project ){ ?>
        <li>
            <span>
                <input type='checkbox'
                         name='project_<?php echo $project->project_id;?>'
                         id='project-<?php echo $project->project_id;?>' class='project-checkbox' />
            </span>
            <span><a href="project-edit.php?pjt_id=<?php echo $project->project_id ?>"><?php echo $project->name;?></a></span>
            <span><?php echo $project->description;?></span>
            <span><?php echo $project->iamge_url;?></span>
            <span><?php echo $project->work_date;?></span>
            <span><?php echo $project->update;?> </span>
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

    function removeProject( projectArr ){
        var l = projectArr.length;
        for(var i = 0; i < l; i ++){
            var project = document.getElementById('project-'+projectArr[i]);
            var li = project.parentNode.parentNode;
            var ul = project.parentNode.parentNode.parentNode;
            ul.removeChild(li);
        }
    }

    (function(){
        $('.delete-btn').click(function(){
            var data = {
                'projectIds' : ''
            };
            var pjt = [];
            $('.project-checkbox').each(function(){

                if(this.checked == true){
                    var currentId = this.id.split('-')[1];
                    data.projectIds += currentId + '|';
                    pjt.push( currentId );
                }
            });
            data.projectIds = data.projectIds.replace(/(\|)$/,'');
            var url = './project-delete.php';
            $.post(url, data, function(d){
                if(d){
                    removeProject(pjt);
                }
            },'json');
        });
    })();


</script>