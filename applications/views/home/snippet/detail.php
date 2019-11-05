<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />
<div class="list_item_body c_wrap mgn-btm-80 ">
    <h1><?php echo $row['c_title'];?></h1>
    <ul class="list_item_info">
        <li class="list-group-item">发布时间：<?php echo $row['c_pubdate']; ?></li>
    </ul>
    <div class="mt-40 c_cont">
        <?php foreach($files as $fitem):?>
        <h4><?php echo $fitem['c_filename']; ?></h4>
        <pre><code><?php echo htmlentities($fitem['c_filecont']);?></code></pre>
        <?php endforeach;?>
    </div>
</div>

<script src="/static/plugins/highlight/highlight.pack.js"></script>
<script>
(function($) {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
    });
})(jQuery);
</script>