<div class="paper container text-center mt-90">
    <div class="flex-spaces tabs">
        <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1">资源导航</label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2">RSS</label>
        <div class="content" id="content1">
            <div class="tabs links_nav">
                <?php $tabindex=1; foreach($catemaps as $item): if(count($item['c_lists'])==0) { continue; } ?>
                <label for="tab<?php echo $tabindex; ?>" class="<?php if($tabindex==1):?>active<?php endif;?>"><?php echo $item['cate_name'];?></label>
                <?php $tabindex++; endforeach;?>

                <?php $cindex=1; foreach($catemaps as $item): if(count($item['c_lists'])==0) { continue; } ?>
                <div class="content" id="content<?php echo $cindex; ?>" style="<?php if($cindex==1):?>display:block<?php endif;?>">
                <?php foreach($item['c_lists'] as $c_item): ?>
                    <a href="<?php echo $c_item['c_link']?>" target="_blank" class="paper-btn margin"><?php echo $c_item['c_title'];?></a>
                <?php endforeach; ?>
                </div>
                <?php $cindex++; endforeach;?>
            </div>
        </div>
        <div class="content" id="content2">
            <?php foreach($rss_list as $rss):?>
            <a href="<?php echo $rss['rss_siteurl']?>" target="_blank" class="paper-btn margin"><?php echo $rss['rss_name'];?></a>
            <?php endforeach;?>
        </div>
    </div>
</div>
<script>
(function($) {
    var navs = $('.links_nav label');
    var contents = $('.links_nav .content');
    navs.on('click' , function() {
        var _index = navs.index($(this));
        navs.removeClass('active').eq(_index).addClass('active');
        contents.hide().eq(_index).show();
    });
})(jQuery);
</script>