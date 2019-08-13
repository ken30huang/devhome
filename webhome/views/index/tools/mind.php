
<link href="/static/plugins/baidumind/style.css" rel="stylesheet" />
<style>
.mind-disabled a { color:#999; }
</style>
<div class="container mt-80">
    <div class="mind-btns mind-disabled">
        <a href="javascript:;" class="addChild">添加节点</a>
        <a href="javascript:;" class="editChild">编辑节点</a>
        <a href="javascript:;" class="delChild">删除节点</a>
        <a href="javascript:;" class="getChild">获取节点数据</a>
        <a href="javascript:;" class="getChild">导出</a>
    </div>
    <div class="minder-wrap">
        <div id="minder-container"></div>
    </div>
</div>
<script src="https://raw.githubusercontent.com/fex-team/kity/dev/dist/kity.min.js"></script>
<script src="https://raw.githubusercontent.com/fex-team/kityminder-core/dev/dist/kityminder.core.js"></script>
<script>
(function($) {
    var selNode;
    //初始化脑图编辑区
    var minder = new kityminder.Minder({
        renderTo: '#minder-container'
    });
    console.log(kityminder);
    //选中节点事件
    minder.on('selectionchange', function() {
        selNode = minder.getSelectedNode();
        if (selNode) {
            $('.mind-btns').removeClass('mind-disabled');
            console.log('You selected: "%s"', selNode.getText());
        } else {
            $('.mind-btns').addClass('mind-disabled');
            console.log('Nothing selected');
        }
    });

    $('.mind-btns').off().on('click' , '.addChild', function() {
        //新增子节点
        minder.execCommand('AppendChildNode', '1112');
    }).on('click' , '.editChild' , function() {
        //编辑当前节点
        console.log('编辑当前节点');
        minder.execCommand('text',"123")
    }).on('click' , '.delChild' , function() {
        //删除当前节点
    }).on('click' , '.getChild' , function() {
        //获取所有节点
        // console.log(minder);
        console.log(minder.exportData('markdown'));
    });
})(jQuery);
</script>