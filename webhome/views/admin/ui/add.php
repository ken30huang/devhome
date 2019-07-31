<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/ui">模板管理</a></li>
        <li>模板编辑</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <input type="hidden" id="ui_id" value="<?php echo getRowVal('ui_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>模板名称</label>
                            <input id="ui_name" field="ui_name" class="form-control" maxlength="255" placeholder="" value="<?php echo getRowVal('ui_name' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>模板路径 </label>
                            <input id="ui_path" field="ui_path" class="form-control" placeholder="" value="<?php echo getRowVal('ui_path' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>顶部代码</label>
                            <textarea id="ui_headcont" field="ui_headcont" class="form-control" rows="4" placeholder=""><?php echo getRowVal('ui_headcont' , $row);?></textarea>
                        </div>
                        <div class="form-group">
                            <label>边栏代码</label>
                            <textarea id="ui_slidercont" field="ui_slidercont" class="form-control" rows="4" placeholder=""><?php echo getRowVal('ui_slidercont' , $row);?></textarea>
                        </div>
                        <div class="form-group">
                            <label>底部代码</label>
                            <textarea id="ui_footercont" field="ui_footercont" class="form-control" rows="4" placeholder=""><?php echo getRowVal('ui_footercont' , $row);?></textarea>
                        </div>
                        <button type="button" id="saveBtn" class="btn btn-primary">保存</button>
                        <button type="button" class="btn btn-default" onclick="javascript:history.back();">取消</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

<script>

(function($) {

    $('#saveBtn').on('click', function() {
        contSave();
    });

})(jQuery);

function contSave() {
    if($('#ui_name').val() == '') {
        alert('请输入模板名称');
        return;
    }
    if($('#ui_path').val() == '') {
        alert('请输入模板路径');
        return;
    }
    var _saveData = {
        ui_name:$('#ui_name').val(),
        ui_id:$('#ui_id').val(),
        ui_path:$('#ui_path').val(),
        ui_headcont:$('#ui_headcont').val(),
        ui_slidercont:$('#ui_slidercont').val(),
        ui_footercont:$('#ui_footercont').val(),
    };
    ajaxReq({
        url:'/admin/ui/save',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.href = '/admin/ui';
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>