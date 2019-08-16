<link href="/static/plugins/baidumind/style.css" rel="stylesheet" />
<script src="/static/plugins/baidumind/kity.min.js"></script>
<script src="/static/plugins/baidumind/kityminder.core.min.js"></script>
<style>
.mind-disabled>button { background-color:#999; }
.task_list { position: absolute ; top:0; left:15px; right:0; bottom:0; border:1px solid #ccc; border-radius:4px; padding:5px; }
</style>
<div class="container mt-80">
    <nav aria-label="breadcrumb">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:;">功能模块</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;">功能细分</a>
            </li>
        </ul>
    </nav>
    <div class="mind_box">
        <div class="proj_mid">
            <div id="minder-container" style="height:400px;"></div>
        </div>
    </div>
</div>

<div class="mind-btns" aria-label="Basic example">
    <div class="">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalTitle">编辑节点</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="node_text" placeholder="请输入节点信息">
            </div>
        </form>
      </div>
      <div id="modalbtns" class="modal-footer">
        <button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary btn-save">确定</button>
      </div>
    </div>
    <a href="javascript:;" class="addChild">添加节点</a>
    <a href="javascript:;" class="delChild">删除节点</a>
    <a href="javascript:;" class="updateNode">更改节点</a>
    <a href="javascript:;" class="saveNode">保存</a>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
</div>

<script>

(function($) {
    
    var _this = this;

    var selNode;
    var nodeAction = 0; //1-新增,2-编辑,3-删除
    var modalBox = $('#exampleModalCenter');
    //初始化脑图编辑区
    var minder = new kityminder.Minder({
        renderTo: '#minder-container'
    });
    <?php if(getRowVal('proj_mind' , $proj_row)): ?>
    minder.importData('json', '<?php echo getRowVal('proj_mind' , $proj_row);?>');
    <?php endif;?>
    
    //选中节点事件
    minder.on('selectionchange', function() {
        selNode = minder.getSelectedNode();
        showEditSlider();
        nodeAction = 0;
    });

    $('.mind-btns').off().on('click' , '.addChild', function() {
        //新增子节点
        nodeAction = 1;
        showEditSlider();
        $('#node_text').val('');
        $('#editModalTitle').text('新增节点信息');
    }).on('click' , '.updateNode' , function() {
        //编辑当前节点
        nodeAction = 2;
        $('#node_text').val(selNode.getText());
        $('#editModalTitle').text('编辑节点信息');
        showEditSlider();
    }).on('click' , '.delChild' , function() {
        //删除当前节点
        minder.execCommand('RemoveNode');
    }).on('click' , '.saveNode' , function() {
        //保存所有节点数据
        var minddata = minder.exportData('json');
        ajaxReq({
            url:'<?php echo module_url('/index/save'); ?>',
            data:{ proj_mind: minddata.fulfillValue, proj_id:'<?php echo getRowVal('proj_id' , $proj_row); ?>' },
            succFun:function(res) {
                if(res.code == '000') {
                    alert('保存成功');
                } else {
                    alert(res.msg);
                }
            }
        });
    });

    function _saveTask(taskdata) {
        ajaxReq({
            url:'<?php echo module_url('/task/save'); ?>',
            data: taskdata,
            succFun:function(res) {
                if(res.code == '000') {
                    // alert('保存成功');
                    modalBox.modal('hide');
                    $('#node_text').val('');
                    nodeAction = 0;
                } else {
                    alert(res.msg);
                }
            }
        });
    }

    $('#modalbtns').off().on('click' , '.btn-save' , function() {
        if($('#node_text').val() == '') {
            alert('请输入节点文本');
            return;
        }
        if(nodeAction == 1) {
            //添加子节点
            minder.execCommand('AppendChildNode', $('#node_text').val());
            setTimeout(function() {
                _saveTask(selNode.data);
            } , 800);
        } else if(nodeAction == 2) {
            //更新当前节点
            minder.execCommand('text',$('#node_text').val());
            _saveTask(selNode.data);
        } else if(nodeAction == 3) {
            minder.execCommand('Note',$('#node_text').val());
            modalBox.modal('hide');
            $('#node_text').val('');
            nodeAction = 0;
        }

    });


    function initPage() {
        var _top = $('.proj_mid').offset().top;
        var _height = $(window).height();
        $('#minder-container').css({ height: (_height-_top - 20)+'px'});
    }

    function showEditSlider() {
        $('.mind-btns').animate({ 'right':'0' } , 800);
    }

    initPage();

})(jQuery);

</script>