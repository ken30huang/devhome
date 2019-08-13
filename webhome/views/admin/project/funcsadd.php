<link href="/static/plugins/baidumind/style.css" rel="stylesheet" />
<style>
.mind-disabled a { color:#999; }
</style>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/project">项目管理</a></li>
        <li class="active"><a href="/admin/project/funcs?proj_id=<?php echo $proj_id; ?>">项目管理</a></li>
        <li>项目编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <input type="hidden" id="proj_id" value="<?php echo $proj_id;?>" />
                        <input type="hidden" id="task_id" value="<?php echo getRowVal('task_id' , $row , '0');?>" />
                        <input type="hidden" id="task_pid" value="<?php echo $task_pid;?>" />
                        <div class="form-group">
                            <label>功能名称</label>
                            <input id="task_name" field="task_name" class="form-control" placeholder="" value="<?php echo getRowVal('task_name' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>脑图</label>
                            <div>
                                <div class="mind-btns mind-disabled">
                                    <a href="javascript:;" class="addChild">添加节点</a>
                                    <a href="javascript:;" class="delChild">删除节点</a>
                                    <a href="javascript:;" class="updateNode">更新节点</a>
                                    <a href="javascript:;" class="progressChild" data-val="1">开始</a>
                                    <a href="javascript:;" class="progressChild" data-val="5">4/8</a>
                                    <a href="javascript:;" class="progressChild" data-val="9">完成</a>
                                </div>
                                <div>
                                    <input id="node_text" class="form-control" placeholder="编辑节点信息" />
                                </div>
                                <div class="minder-wrap">
                                    <div id="minder-container" style="height:420px;"></div>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="saveBtn" class="btn btn-primary">保存</button>
                        <button type="button" class="btn btn-default" onclick="javascript:history.back();">取消</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

<script src="/static/plugins/baidumind/kity.min.js"></script>
<script src="/static/plugins/baidumind/kityminder.core.min.js"></script>
<script>

(function($) {
    var _this = this;

    $('#saveBtn').on('click', function() {
        contSave();
    });

    var selNode;
    //初始化脑图编辑区
    var minder = new kityminder.Minder({
        renderTo: '#minder-container'
    });
    //选中节点事件
    minder.on('selectionchange', function() {
        selNode = minder.getSelectedNode();
        if (selNode) {
            $('.mind-btns').removeClass('mind-disabled');
            $('#node_text').val(selNode.getText());
        } else {
            $('.mind-btns').addClass('mind-disabled');
            $('#node_text').val('');
        }
    });

    $('.mind-btns').off().on('click' , '.addChild', function() {
        //新增子节点
        if(!selNode) { return; }
        minder.execCommand('AppendChildNode', '1112');
        $('#node_text').val('');
    }).on('click' , '.updateNode' , function() {
        //编辑当前节点
        if(!selNode) { return; }
        if($('#node_text').val() == '') {
            alert('请输入节点文本');
            return;
        }
        minder.execCommand('text',$('#node_text').val());
    }).on('click' , '.delChild' , function() {
        //删除当前节点
        if(!selNode) { return; }
        minder.execCommand('RemoveNode');
    }).on('click' , '.progressChild' , function() {
        //设置进度表示
        if(!selNode) { return; }
        var _data_val = parseInt($(this).data('val'));
        minder.execCommand('Progress', _data_val);
    });

    function contSave() {
        if($('#task_name').val() == '') {
            alert('请输入功能名称');
            return;
        }
        var minddata = minder.exportData('json');
        var _saveData = {
            task_id:$('#task_id').val(),
            proj_id:$('#proj_id').val(),
            task_pid:$('#task_pid').val(),
            task_name:$('#task_name').val(),
            task_mind:minddata.fulfillValue
        };
        
        ajaxReq({
            url:'/admin/project/funcsave',
            data: _saveData,
            succFun:function(res) {
                if(res.code == '000') {
                    location.href = '/admin/project/funcs?proj_id='+_saveData.proj_id;
                } else {
                    alert(res.msg);
                }
            }
        });
    }


    var task_id = parseInt($('#task_id').val());
    if(task_id > 0) {
        minder.importData('json', '<?php echo getRowVal('task_mind' , $row);?>');
    }

})(jQuery);

</script>