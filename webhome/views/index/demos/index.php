<div class="container mt-80">
    <div class="card-columns">
        <?php foreach($demo_list as $row):?>
        <div class="card">
            <?php if(!empty($row['demo_thumb'])):?>
            <img class="card-img-top" src="<?php echo $row['demo_thumb']?>" alt="Card image cap" />
            <?php endif;?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['demo_name']?></h5>
                <p class="card-text"><?php echo $row['demo_desc']?></p>
            </div>
            <div class="card-body">
                <?php if($row['demo_iscompile'] == 0):?>
                <a href="/demos/front?demo_id=<?php echo $row['demo_id'];?>" class="card-link">效果演示</a>
                <?php else:?>
                <a href="/demos/coderun?demo_id=<?php echo $row['demo_id'];?>" class="card-link">在线运行</a>
                <?php endif;?>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>