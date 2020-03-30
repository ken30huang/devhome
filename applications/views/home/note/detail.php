<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />
<div class="row mt-100">
    <div class="md-8 sm-12 col card-btm-20">
        <div class="paper">
            <article class="article">
                <?php echo $row['c_cont']; ?>
            </article>
        </div>
    </div>
    <div class="md-4 sm-12 col sidebar">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">笔记 & 教程</h4>
                <div class="row">
                    <ul class="list-btm-20">
                        <?php foreach($dir_list as $dir):?>
                            <li><a href="/home/note/detail/<?php echo $dir['c_id'];?>"><?php echo $dir['c_title'];?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card mt-40">
            <div class="card-body">
                <h4 class="card-title">笔记 & 教程</h4>
                <div class="row">
                    <ul class="list-btm-20">
                        <?php foreach($dir_list as $dir):?>
                            <li><a href="/home/note/detail/<?php echo $dir['c_id'];?>"><?php echo $dir['c_title'];?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
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

    // var _wrap = $('.dir_wrap');
    // _wrap.empty();
    // $('article').find('h1,h2').each(function() {
    //     var _dom = $(this).get(0);
    //     _wrap.append('<div class="'+_dom.tagName+'"><a href="#'+_dom.innerHTML+'">'+_dom.innerHTML+'</a></div>');
    // });
}
</script>