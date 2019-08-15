<link href="/static/plugins/baidumind/style.css" rel="stylesheet" />
<style>
.mind-disabled a { color:#999; }
</style>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/project">项目管理</a></li>
        <li>项目编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <input type="hidden" id="proj_id" value="<?php echo getRowVal('proj_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>项目标题</label>
                            <input id="proj_name" field="proj_name" class="form-control" placeholder="" value="<?php echo getRowVal('proj_name' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>脑图</label>
                            <div>
                                <div class="mind-btns mind-disabled">
                                    <a href="javascript:;" class="addChild">添加节点</a>
                                    <a href="javascript:;" class="delChild">删除节点</a>
                                    <a href="javascript:;" class="updateNode">更新节点</a>
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
    console.log(kityminder);
    //选中节点事件
    minder.on('selectionchange', function() {
        selNode = minder.getSelectedNode();
        if (selNode) {
            $('.mind-btns').removeClass('mind-disabled');
            console.log('You selected: "%s"', selNode.getText());
            $('#node_text').val(selNode.getText());
        } else {
            $('.mind-btns').addClass('mind-disabled');
            console.log('Nothing selected');
            $('#node_text').val('');
        }
    });

    $('.mind-btns').off().on('click' , '.addChild', function() {
        //新增子节点
        var _parent = selNode;
        minder.execCommand('AppendChildNode', '1112');
        console.log(_parent.getChildren());
        $('#node_text').val('');
    }).on('click' , '.updateNode' , function() {
        //编辑当前节点
        if($('#node_text').val() == '') {
            alert('请输入节点文本');
            return;
        }
        console.log('编辑当前节点');
        minder.execCommand('text',$('#node_text').val());
    }).on('click' , '.delChild' , function() {
        //删除当前节点
        minder.execCommand('RemoveNode');
    });

    function contSave() {
        if($('#proj_name').val() == '') {
            alert('请输入项目名称');
            return;
        }
        var minddata = minder.exportData('json');
        var _saveData = {
            proj_id:$('#proj_id').val(),
            proj_name:$('#proj_name').val(),
            proj_mind:minddata.fulfillValue
        };
        // console.log(_saveData);

        // return;
        ajaxReq({
            url:'/admin/project/save',
            data: _saveData,
            succFun:function(res) {
                if(res.code == '000') {
                    location.href = '/admin/project';
                } else {
                    alert(res.msg);
                }
            }
        });
    }


    var proj_id = parseInt($('#proj_id').val());
    if(proj_id > 0) {
        minder.importData('json', '<?php echo getRowVal('proj_mind' , $row);?>');
    }

})(jQuery);

</script>