<div class="container mt-80">
    <div class="alert alert-primary" role="alert">整理收集来自于不同技术社区的技术类系列文章，目前共收录<?php echo $scount;?>个链接</div>

    <?php foreach($data_list as $year=>$lists):?>
    <div class="series-wrap">
        <h5><?php echo $year;?></h5>
        <ul class="series-list">
            <?php foreach($lists as $citem):?>
            <li><a href="<?php echo $citem['c_link']?>" target="_blank"><?php echo $citem['c_title']?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php endforeach;?>
</div>