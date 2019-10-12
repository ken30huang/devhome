<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />
<div class="container mt-80 mb-40">
    <div class="row">
        <div class="col-sm-3">
            <ul>
                <li><a href="<?php echo module_url('/series/detail/'.$parentid);?>">序言</a></li>
                <?php foreach($dir_list as $dir): ?>
                <li><a href="<?php echo module_url('/series/detail/'.$dir['c_parentid'].'?c_id='.$dir['c_id']);?>"><?php echo $dir['c_title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="col-sm-6">
            <?php if($row['c_thumb']):?>
            <div class="book_thumb mb-40"><img width="240px" src="<?php echo $row['c_thumb'];?>" /></div>
            <?php endif;?>
            <article><?php echo $row['c_cont'];?></article>
        </div>
        <div class="col-sm-3">
            <div class="dir_wrap">

            </div>
        </div>
    </div>
</div>
<script src="/static/plugins/highlight/highlight.pack.js"></script>
<script>
window.onload = function(){
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
    });

    $('article').find('a').each(function() {
        $(this).attr('target' , '_blank');
    })

    var _wrap = $('.dir_wrap');
    _wrap.empty();
    $('article').find('h1,h2').each(function() {
        var _dom = $(this).get(0);
        _wrap.append('<div class="'+_dom.tagName+'"><a href="#'+_dom.innerHTML+'">'+_dom.innerHTML+'</a></div>');
    });
}
</script>