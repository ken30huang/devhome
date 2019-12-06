<h1>我关注的库</h1>
<div class="home_search clearfix">
    <div class="home_search_result">
        <?php foreach($rows as $item): ?>
        <div class="lib_item">
            <p class="lib_name"><?php echo $item['lib_name'];?></p>
            <p class="lib_intro"><?php echo $item['lib_intro_show'];?></p>
            <p class="lib_link">
                <?php if($item['lib_site']):?>
                <a href="<?php echo $item['lib_site'];?>" target="_blank">官网</a>
                <?php endif;?>
                <?php if($item['lib_github']):?>
                <a href="<?php echo $item['lib_github'];?>" target="_blank">Github地址</a>
                <?php endif;?>
                <a href="/admin/lib/add?lib_id=<?php echo $item['lib_id'];?>&page=1" target="_blank">编辑</a>
                <a href="/home/maintain/libdel?lib_id=<?php echo $item['lib_id'];?>">删除</a>
            </p>
        </div>
        <?php endforeach;?>
    </div>
</div>