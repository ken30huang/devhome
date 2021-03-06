<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />

<div class="row mt-100">
    <div class="paper container ">
        <div class="col card-btm-20">
                <article class="article c_cont">
                    <?php echo $row['c_cont']; ?>
                </article>
            </div>
        </div>
    </div>
</div>

<script src="/static/plugins/highlight/highlight.pack.js"></script>
<script src="/static/plugins/clipboard/clipboard.min.js"></script>
<script>
(function($) {
    $('.c_cont pre').each(function() {
        var _this = $(this);
        _this.append('<a href="javascript:;" class="clipboard c_clipboard" title="复制"><i class="fa fa-clone" aria-hidden="true"></i></a>');
        if(_this.find('code').length > 0) {
            hljs.highlightBlock(_this.find('code')[0]);
        }
    });
    
    var clipjs = new ClipboardJS('.c_cont .c_clipboard', {
        target: function(trigger) {
            var _target = $(trigger).parent().find('code')[0];
            // console.log($(trigger).parent().find('code'));
            return _target;
        }
    });
    clipjs.on('success', function(e) {
        alert('复制成功');
        e.clearSelection();
    });

    $('.c_cont table').addClass('table table-bordered');
})(jQuery);
</script>