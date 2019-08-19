<link href="/static/plugins/baidumind/style.css" rel="stylesheet" />
<script src="/static/plugins/baidumind/kity.min.js"></script>
<script src="/static/plugins/baidumind/kityminder.core.min.js"></script>
<style>
.mind-disabled>button { background-color:#999; }
</style>
<div class="container mt-80">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo module_url('');?>">项目管理</a></li>
            <li class="breadcrumb-item"><?php echo getRowVal('proj_name' , $proj_row);?></li>
            <li class="breadcrumb-item"><a href="<?php echo module_url('/task/index/'.$proj_row['proj_id']);?>">计划任务</a></li>
        </ol>
    </nav>
    <div class="btn-group mind-btns mind-disabled" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary addChild">添加节点</button>
        <button type="button" class="btn btn-secondary delChild">删除节点</button>
        <button type="button" class="btn btn-secondary updateNode" data-toggle="modal" data-target="#exampleModalCenter">更改节点</button>
        <button type="button" class="btn btn-secondary saveNode">保存</button>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="" placeholder="请输入"  />
    </div>
    <div class="proj_mid">
        <div id="minder-container" style="height:500px;"></div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
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
  </div>
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
    
    //选中节点事件
    minder.on('selectionchange', function() {
        selNode = minder.getSelectedNode();
        nodeAction = 0;
        if (selNode) {
            $('.mind-btns').removeClass('mind-disabled');
        } else {
            $('.mind-btns').addClass('mind-disabled');
        }
    });

    $('.mind-btns').off().on('click' , '.addChild', function() {
        //新增子节点
        nodeAction = 1;
        modalBox.modal();
        $('#node_text').val('');
        $('#editModalTitle').text('新增节点信息');
    }).on('click' , '.updateNode' , function() {
        //编辑当前节点
        nodeAction = 2;
        $('#node_text').val(selNode.getText());
        $('#editModalTitle').text('编辑节点信息');
        modalBox.modal();
    }).on('click' , '.delChild' , function() {
        //删除当前节点
        minder.execCommand('RemoveNode');
    }).on('click' , '.saveNode' , function() {
        //保存所有节点数据
        var minddata = minder.exportData('json');
        ajaxReq({
            url:'<?php echo module_url('/task/save'); ?>',
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

    $('#modalbtns').off().on('click' , '.btn-save' , function() {
        if($('#node_text').val() == '') {
            alert('请输入节点文本');
            return;
        }
        if(nodeAction == 1) {
            minder.execCommand('AppendChildNode', $('#node_text').val());
        } else if(nodeAction == 2) {
            minder.execCommand('text',$('#node_text').val());
        } else if(nodeAction == 3) {
            minder.execCommand('Note',$('#node_text').val());
        }
        modalBox.modal('hide');
        $('#node_text').val('');
        nodeAction = 0;

    });

})(jQuery);

</script>