<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />
<div class="container mt-80 mb-60">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">属性</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">发布时间：<?php echo $row['c_pubdate']; ?></li>
                    <li class="list-group-item">标签：<?php echo $row['c_tag'];?></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-9">
            <p class="h1"><?php echo $row['c_title'];?></p>
            <div class="mt-40">
                <?php echo $row['c_cont'];?>
            </div>
        </div>
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