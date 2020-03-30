<?php if(count($series_list) > 0):?>
<div class="list_wrap clearfix">
    <?php foreach($series_list as $series):?>
    <div class="list_row">
        <div class="list_item_body">
            <h1><a href="/home/series/detail/<?php echo $series['c_id']; ?>"><?php echo $series['c_title'];?></a></h1>
            <div class="list_item_info">
                <span class="list_item_date"><?php echo $series['c_pubdate']; ?></span>
            </div>
            <div class="list_item_summery"><?php echo $series['c_summery']; ?></div>
        </div>
    </div>
    <?php endforeach;?>
</div>
<?php else:?>
<div class="list_empty">
    <img src="/static/imgs/empty.png" class="list_empty_img" />
    <p class="list_empty_text">内容建设中...</p>
</div>
<?php endif;?>