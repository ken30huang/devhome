<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">标签列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>名称</th>
                                <th>类型</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['tag_id'];?></td>
                                <td><?php echo $row['tag_name'];?></td>
                                <td><?php echo $row['tag_type'];?></td>
                                <td>
                                    <a href="javascript:;" onclick="javascript:listEdit(<?php echo $row['tag_id'];?>)">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['tag_id'];?>)">删除</a>
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
                <h4 class="modal-title">编辑标签</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="editForm">
                    <input type="hidden" id="tag_id" field="tag_id" value="0" />
                    <div class="form-group">
                        <label>名称</label>
                        <input id="tag_name" field="tag_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>标识</label>
                        <input id="tag_type" field="tag_type" class="form-control" />
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
var moduleURL = '/admin/tag';
var formData = {};

function formValid() {
    if($('#tag_name').val() == '') {
        alert('请输入标签名称');
        return false;
    }

    return true;
}

function listEditCallback(res) {
    //编辑后的回调
    $('#myModal').modal();
}
</script>