
<div class="list_wrap clearfix">
    <?php foreach($catemaps as $item):?>
    <div class="list_item">
        <div class="list_item_body">
            <h1 id="nav-<?php echo $item['cate_idx']?>"><?php echo $item['cate_name'];?></h1>
            <div class="list_item_info">
                <ul>
                <?php foreach($item['c_lists'] as $c_item): ?>
                    <li><a href="<?php echo $c_item['c_link']?>" target="_blank"><?php echo $c_item['c_title'];?></a></li>
                <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>

<script>
(function() {
    $('.cate-nav').on('click' , 'a' , function() {
        $('.cate-nav a').removeClass('sel');
        $(this).addClass('sel');
        var _idx = $(this).data('idx');
        var _top = $('#nav-'+_idx).offset().top-60;
        $('html,body').animate({scrollTop: _top+'px'}, 800);
    });
})(jQuery);

</script>