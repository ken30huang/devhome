<div class="mdl-grid site-max-width">
    <?php foreach($body_data as $bddata):?>
    <div class="demo-card-wide mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
        <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><?php echo $bddata['cate_name']; ?></h2>
        </div>
        <div class="mdl-card__supporting-text"></div>
        <div class="mdl-card__actions mdl-card--border">
            <?php foreach($bddata['lists'] as $c_item):?>
            <span class="mdl-chip mdl-cell mdl-cell--2-col">
                <span class="mdl-chip__text"><a target="_blank" href="<?php echo $c_item['c_link'];?>"><?php echo $c_item['c_title'];?></a></span>
            </span>
            <?php endforeach;?>
        </div>
    </div>
    <?php endforeach;?>
</div>