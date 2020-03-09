<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/online">预设环境管理</a></li>
        <li>编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <input type="hidden" id="ol_id" value="<?php echo getRowVal('ol_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>环境名称</label>
                            <input id="ol_name" field="ol_name" class="form-control" placeholder="" value="<?php echo getRowVal('ol_name' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>环境描述</label>
                            <input id="ol_desc" field="ol_desc" class="form-control" placeholder="" value="<?php echo getRowVal('ol_desc' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>预设CSS</label>
                            <input id="ol_input_css" class="form-control" placeholder="" />
                            <a href="javascript:;" id="add_links" data-type="css">添加</a>
                            
                        </div>
                        <div class="form-group">
                            <label>预设JS</label>
                            <input id="ol_input_js" class="form-control" placeholder="" />
                            <a href="javascript:;" id="add_links" data-type="js">添加</a>
                        </div>
                        <div class="form-group">
                            <label>JS运行方式</label>
                            <select class="form-control" id="ol_jstype" field="ol_jstype">
                                <option value="javascript">javascript</option>
                                <option value="babel">babel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>预设执行脚本</label>
                            <textarea id="ol_jscode" field="ol_jscode" class="form-control" rows="5"></textarea>
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
    var _this = this;
    

    $('#saveBtn').on('click', function() {
        var lib_ids = [];
        contSave();
    });

    var link_maps = {};
    $('#add_links').on('click' , function() {
        var _type = $(this).data('type');
        if(_type == 'js') {
            //添加js类库
            
        }
        
    });

    $('.sel_list').on('click' , '.lib_del' , function(){
        var _id = $(this).data('id');
        if(_sel[_id]) {
            delete _sel[_id];
            _renderSel();
        };
    });

})(jQuery);

function contSave(lib_ids) {

    if($('#ol_name').val() == '') {
        alert('请输入环境名称');
        return;
    }
    if($('#ol_desc').val() == '') {
        alert('请输入环境描述');
        return;
    }
    var _saveData = {
        ol_name:$('#ol_name').val(),
        ol_id:$('#ol_id').val(),
        ol_desc:$('#ol_desc').val(),
        ol_jstype:$('#ol_jstype').val()
    };
    ajaxReq({
        url:'/admin/online/save',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.href = '/admin/online';
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>