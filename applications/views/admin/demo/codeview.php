<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="/admin/demo">demo管理</a></li>
        <li class="active">分类列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">新增文件</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>文件名称</th>
                                <th>文件类型</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cf_list as $row):?>
                            <tr>
                                <td ><?php echo $row['cf_name'];?></td>
                                <td><?php echo $row['cf_type'];?></td>
                                <td>
                                    <a href="javascript:;" onclick="javascript:cvEdit(<?php echo $row['cf_id'];?>)">编辑</a>
                                    <a href="javascript:;" onclick="javascript:cvDel(<?php echo $row['cf_id'];?>)">删除</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->
		
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">编辑代码</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="editForm">
                    <input type="hidden" id="cf_id" value="0" />
                    <input type="hidden" id="demo_id" value="<?php echo $demo_id; ?>">
                    <div class="form-group">
                        <label>文件名称</label>
                        <input id="cf_name" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>文件类型</label>
                        <select class="form-control" id="cf_type" field="cf_type">
                            <option value="">请选择</option>
                            <option value="html">html</option>
                            <option value="css">css</option>
                            <option value="javascript">javascript</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>JS运行方式</label>
                        <select class="form-control" id="cf_jstype" field="cf_jstype">
                            <option value="javascript">javascript</option>
                            <option value="babel">babel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>编程语言</label>
                        <select class="form-control" id="cf_langid" field="cf_langid">
                            <option value="0">请选择</option>
                            <?php foreach($code_list as $c):?>
                            <option value="<?php echo $c['cate_id']; ?>"><?php echo $c['cate_name']; ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>文件内容</label>
                        <textarea id="cf_code" field="cf_code" class="form-control" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="javascript:codeClear()" data-dismiss="modal">取消</button>
                <button type="button" onclick="javascript:codeSave()" class="btn btn-primary">保存</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
var moduleURL = '/admin/demo';

function codeClear() {
    $('#cf_name').val('');
    $('#cf_id').val('0');
    $('#cf_code').val('');
    $('#cf_jstype').val('javascript');
    $('#cf_langid').val('0');
    $('#cf_type').val('');
}

function codeSave(lib_ids) {

    if($('#cf_name').val() == '') {
        alert('请输入文件名称');
        return;
    }
    if($('#cf_type').val() == '') {
        alert('请输入文件类型');
        return;
    }
    if($('#cf_code').val() == '') {
        alert('请输入文件内容');
        return;
    }
    var _saveData = {
        cf_name:$('#cf_name').val(),
        cf_id:$('#cf_id').val(),
        demo_id:parseInt($('#demo_id').val()),
        cf_code:$('#cf_code').val(),
        cf_jstype:($('#cf_jstype').val()),
        cf_langid:parseInt($('#cf_langid').val()),
        cf_type:$('#cf_type').val()
    };
    ajaxReq({
        url:'/admin/demo/codesave',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.reload();
            } else {
                alert(res.msg);
            }
        }
    });
}

function cvEdit(cf_id) {
    ajaxReq({
        url:'/admin/demo/codeedit',
        data: { 'edit_id': cf_id },
        succFun:function(res) {
            if(res.code == '000') {
                $('#cf_name').val(res.row.cf_name);
                $('#cf_id').val(cf_id);
                $('#cf_code').val(res.row.cf_code);
                $('#cf_jstype').val(res.row.cf_jstype);
                $('#cf_langid').val(res.row.cf_langid);
                $('#cf_type').val(res.row.cf_type);
                $('#myModal').modal();
            } else {
                alert(res.msg);
            }
        }
    });
}

function cvDel(cf_id) {
    ajaxReq({
        url:'/admin/demo/codedel',
        data: { 'del_id': cf_id },
        succFun:function(res) {
            if(res.code == '000') {
                location.reload();
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>