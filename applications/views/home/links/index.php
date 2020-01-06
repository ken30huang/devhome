<div class="links_wrap clearfix">
    <?php foreach($catemaps as $item): if(count($item['c_lists'])==0) { continue; } ?>
    <div class="list_item">
        <div class="link_body">
            <h1 id="nav-<?php echo $item['cate_idx']?>"><?php echo $item['cate_name'];?></h1>
            <div class="link_info">
                <ul>
                <?php foreach($item['c_lists'] as $c_item): ?>
                    <li>
                        <a href="<?php echo $c_item['c_link']?>" target="_blank"><?php echo $c_item['c_title'];?> <i class="fa fa-external-link" aria-hidden="true"></i></a>
                    </li>
                <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>

<script>
(function() {
    
})(jQuery);

</script>