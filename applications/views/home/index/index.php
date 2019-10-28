<div class="list_wrap clearfix">
    <?php foreach($all_list as $all):?>
    <div class="list_item">
        <!-- <img src="http://demo.sc.chinaz.net/Files/DownLoad/moban/201910/moban4105/images/thumbs/masonry/woodcraft-600.jpg" class="
        res_width" /> -->
        <div class="list_item_body">
            <h1><a href="/home/blog/detail/<?php echo $all['c_alias']; ?>"><?php echo $all['c_title'];?></a></h1>
            <div class="list_item_info">
                <span class="list_item_tags">
                    <?php $tagIndex=0; foreach($all['c_tags'] as $tag): ?>
                    <a href="/home/index?tag=<?php echo urlencode($tag);?>"><?php echo $tag;?></a><?php echo ($tagIndex<(count($all['c_tags'])-1)?',':''); ?>
                    <?php $tagIndex++; endforeach;?>
                </span>
                <span class="list_item_date"><?php echo $all['c_pubdate']; ?></span>
            </div>
            <div class="list_item_summery"><?php echo $all['c_summery']; ?></div>
        </div>
    </div>
    <?php endforeach;?>
</div>
<div class="list_pager"> <?php echo $pager; ?> </div>