<div class="list_wrap clearfix news">
    <?php foreach($all_list as $all):?>
    <div class="row news-grids-left mt-5">
        <div class="col-lg-12">
            <?php if($all['c_link']): ?>
            <h5><a href="<?php echo $all['c_link'] ?>" target="_blank"><?php echo $all['c_title'] ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></h5>
            <?php else:?>
            <h5><a href="/home/blog/detail/<?php echo $all['c_alias'] ?>"><?php echo $all['c_title'] ?></a></h5>
            <?php endif; ?>
            <div class="list_item_info">
                <span class="list_item_tags">
                    <?php $tagIndex=0; foreach($all['c_tags'] as $tag): ?>
                    <a href="/home/index?tag=<?php echo urlencode($tag);?>"><?php echo $tag;?></a><?php echo ($tagIndex<(count($all['c_tags'])-1)?',':''); ?>
                    <?php $tagIndex++; endforeach;?>
                </span>
                <span class="list_item_date"><?php echo $all['c_pubdate']; ?></span>
            </div>
            <p class="mt-3"><?php echo $all['c_summery']; ?></p>
        </div>
    </div>
    <?php endforeach;?>
</div>
<div class="list_pager"> <?php echo $pager; ?> </div>