<div class="list_wrap clearfix">
    <?php foreach($demo_list as $row):?>
    <div class="list_row">
        <?php if(!empty($row['demo_thumb'])):?>
        <img src="<?php echo $row['demo_thumb']?>" class="res_width" />
        <?php endif;?>
        <div class="list_item_body">
            <h1><?php echo $row['demo_name'];?></h1>
            <p class="list_item_summery"><?php echo $row['demo_desc']?></p>
            <div class="list_item_btns">
                <?php if($row['demo_iscompile'] == 0):?>
                <a href="<?php echo module_url('/demos/front?demo_id='.$row['demo_id']);?>" class="card-link">效果演示</a>
                <?php else:?>
                <a href="<?php echo module_url('/demos/coderun?demo_id='.$row['demo_id']);?>" class="card-link">在线运行</a>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>