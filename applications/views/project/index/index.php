<div class="container mt-80">
    <div class="row">
        <ul>
            <?php foreach($proj_list as $proj):?>
            <li><?php echo $proj['proj_name'];?>
                <ul>
                    <li><a href="<?php echo module_url('/index/funcs/'.$proj['proj_id']);?>">功能模块</a></li>
                    <li><a href="<?php echo module_url('/task/index/'.$proj['proj_id']);?>">任务计划</a></li>
                </ul>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>