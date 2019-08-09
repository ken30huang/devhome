<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />
<div class="container mt-80">
    <div class="row">
        <div class="col-sm-3">
            <ul>
                <li><a href="/series/detail/<?php echo $parentid;?>">序言</a></li>
                <?php foreach($dir_list as $dir): ?>
                <li><a href="/series/detail/<?php echo $dir['c_parentid']?>?c_id=<?php echo $dir['c_id']?>"><?php echo $dir['c_title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="col-sm-6">
            <?php if($row['c_thumb']):?>
            <div class="book_thumb mb-40"><img src="<?php echo $row['c_thumb'];?>" /></div>
            <?php endif;?>
            <article><?php echo $row['c_cont'];?></article>
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
    });
}
</script>