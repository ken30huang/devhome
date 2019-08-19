<div class="container mt-80">
    <div class="row task_list">
        <ul>
            <?php foreach($task_map as $task_id=>$task):?>
            <li><?php echo $task['task_name'];?>
                <a href="<?php echo module_url('/task/edit/'.$proj_id.'/'.$task_id)?>"><i class="fa fa-edit"></i></a>
                <a href="<?php echo module_url('/task/add/'.$proj_id.'/'.$task_id)?>"><i class="fa fa-plus"></i></a>
                <ul>
                    <?php foreach($task['task_childs'] as $child):?>
                    <li><?php echo $child['task_name']; ?>
                        <a href="<?php echo module_url('/task/edit/'.$proj_id.'/'.$child['task_id'])?>"><i class="fa fa-edit"></i></a>
                        <a href="<?php echo module_url('/task/trash/'.$proj_id.'/'.$child['task_id'])?>"><i class="fa fa-trash-o"></i></a></li>
                    <?php endforeach;?>
                </ul>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>