<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />
<div class="list_item_body c_wrap mgn-btm-80 ">
    <div href="javascript:;" class="c_dir_btn">目录</div>
    <div class="c_dir">
        <ul></ul>
    </div>
    <h1><?php echo $row['c_title'];?></h1>
    <ul class="list_item_info">
        <li class="list-group-item">发布时间：<?php echo $row['c_pubdate']; ?></li>
        <li class="list-group-item">标签：<?php echo $row['c_tag'];?></li>
    </ul>
    <div class="mt-40 c_cont">
        <?php echo $row['c_cont'];?>
    </div>
</div>

<script src="/static/plugins/highlight/highlight.pack.js"></script>
<script>
(function($) {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
    });

    var dirArr = [];
    $('.c_cont').find('h1,h2').each(function(){
        var _this = $(this);
        if(this.tagName == 'H1') {
            dirArr.push('<li class="c_dir_h1"><a href="#'+_this.text()+'">'+_this.text()+'</a></li>');
        } else if(this.tagName == 'H2') {
            dirArr.push('<li class="c_dir_h2"><a href="#'+_this.text()+'">'+_this.text()+'</a></li>');
        }
    });
    $('.c_dir ul').html(dirArr.join(''));
    if(dirArr.length > 0) {
        $('.c_dir_btn').show().off().on('click' , function() {
            $('.c_dir').toggle();
        });
    }
})(jQuery);
</script>