<div class="container mt-80 mb-60">
    <?php foreach($catemaps as $item):?>
    <div class="nav-wrap mb-40">
        <h5><?php echo $item['cate_name'];?></h5>
        <div class="nav-list row">
            <?php foreach($item['c_lists'] as $c_item): ?>
            <div class="col-sm-4">
                <a href="<?php echo $c_item['c_link']?>" target="_blank">
                    <?php echo $c_item['c_title'];?>
                    <img class="icons" src="<?php echo __STATIC__.'/icons/ico_link.svg'?>" />
                </a>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php endforeach;?>
</div>