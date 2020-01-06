<div class="rss_wrap news">
    <h1 class="rss_tit">订阅列表</h1>
    <ul class="rss_list">
        <?php foreach($rss_list as $rss):?>
        <li><a href="<?php echo $rss['rss_siteurl'];?>" target="_blank"><?php echo $rss['rss_name'];?></a></li>
        <?php endforeach;?>
    </ul>
</div>