<div class="list_wrap clearfix">
    <?php foreach($all_list as $all):?>
    <div class="list_row">
        <div class="list_item_body">
            <h1><a href="/home/snippet/detail/<?php echo $all['c_id']; ?>"><?php echo $all['c_title'];?></a></h1>
            <div class="list_item_info">
                <div class="list_cate_name"><a href="/home/snippet?cate_id=<?php echo $all['c_cateid'];?>"><?php echo $cate_map[$all['c_cateid']];?></a></div>
                <span class="list_item_date"><?php echo $all['c_pubdate']; ?></span>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
<div class="list_pager"> <?php echo $pager; ?> </div>