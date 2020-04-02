<div class="pager container">
<div class="row mt-100 demos_wrap">
    <?php foreach($demo_list as $demo): ?>
    <div class="card" >
        <div class="card-body">
            <h4 class="card-title"><?php echo $demo['demo_name']?></h4>
            <p class="card-text"><?php echo $demo['demo_desc']?></p>
            <a class="card-link" href="/home/demos/code/<?php echo $demo['demo_id'];?>">代码</a>
            <a class="card-link" target="_blank" href="/home/demos/front/<?php echo $demo['demo_id'];?>">效果</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>