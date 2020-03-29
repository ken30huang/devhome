<div class="paper container text-center mt-90">
    <div class="tabs">
        <?php $tabindex=1; foreach($catemaps as $item): if(count($item['c_lists'])==0) { continue; } ?>
        <input id="tab<?php echo $tabindex; ?>" type="radio" name="tabs" <?php if($tabindex==1):?>checked<?php endif;?> />
        <label for="tab<?php echo $tabindex; ?>"><?php echo $item['cate_name'];?></label>
        <?php $tabindex++; endforeach;?>

        <?php $cindex=1; foreach($catemaps as $item): if(count($item['c_lists'])==0) { continue; } ?>
        <div class="content" id="content<?php echo $cindex; ?>">
        <?php foreach($item['c_lists'] as $c_item): ?>
            <a href="<?php echo $c_item['c_link']?>" target="_blank" class="paper-btn margin"><?php echo $c_item['c_title'];?></a>
        <?php endforeach; ?>
        </div>
        <?php $cindex++; endforeach;?>
    </div>
</div>