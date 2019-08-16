<div class="container links-top mb-60">
    <div class="cate-nav">
    <?php foreach($catemaps as $item):?>
    <a href="javascript:;" data-idx="<?php echo $item['cate_idx'];?>"><?php echo $item['cate_name'];?></a>
    <?php endforeach?>
    </div>
    <?php foreach($catemaps as $item):?>
    <div class="nav-wrap mb-40">
        <h5 id="nav-<?php echo $item['cate_idx']?>"><?php echo $item['cate_name'];?></h5>
        <div class="nav-list row">
            <?php foreach($item['c_lists'] as $c_item): ?>
            <div class="col-sm-4">
                <a href="<?php echo $c_item['c_link']?>" target="_blank"><?php echo $c_item['c_title'];?></a>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php endforeach;?>
</div>

<script>
(function() {
    $('.cate-nav').on('click' , 'a' , function() {
        var _idx = $(this).data('idx');
        var _top = $('#nav-'+_idx).offset().top-140;
        $('html,body').animate({scrollTop: _top+'px'}, 800);
    });
})(jQuery);
</script>