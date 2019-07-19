<div class="row">
    <ol class="breadcrumb">
        <li><a href="/html/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">网站列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">新增分类</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>分类ID</th>
                                <th>分类名</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['cate_id'];?></td>
                                <td><?php echo $row['cate_name'];?></td>
                                <td>
                                    <a href="javascript:;" onclick="javascript:listEdit(<?php echo $row['cate_id'];?>)">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['cate_id'];?>)">删除</a>
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
                <h4 class="modal-title">编辑分类</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="editForm">
                    <input type="hidden" id="cate_id" field="cate_id" value="0" />
                    <div class="form-group">
                        <label>分类名称</label>
                        <input id="cate_name" field="cate_name" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>上级分类</label>
                        <select class="form-control" id="cate_pid" field="cate_pid">
                            <option value="0">请选择</option>
                            <?php foreach($parents as $p):?>
                            <option value="<?php echo $p['cate_id']; ?>"><?php echo $p['cate_name']; ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>分类ICON</label>
                        <input id="cate_icon" field="cate_icon" class="form-control" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>分类描述</label>
                        <textarea id="cate_cont" field="cate_cont" class="form-control" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="javascript:clearForm()" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" onclick="javascript:formSave()" class="btn btn-primary">保存</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
var moduleURL = '/admin/category';
var formData = {};

function listEditCallback(res) {
    //编辑后的回调
    $('#myModal').modal();
}

function formValid() {
    if($('#cate_name').val() == '') {
        alert('请输入分类名称');
        return false;
    }

    return true;
}

</script>