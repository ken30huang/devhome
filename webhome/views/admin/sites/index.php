<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">网站列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">新增网站</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>网站名称</th>
                            <th>网站地址</th>
                            <th>收费类型</th>
                            <th>是否收录</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['site_name'];?></td>
                                <td><?php echo $row['site_url'];?></td>
                                <td><?php echo $row['site_charge'];?></td>
                                <td><?php echo $row['site_isrecord'];?></td>
                                <td>
                                    <a href="javascript:;" onclick="javascript:listEdit(<?php echo $row['site_id'];?>)">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['site_id'];?>)">删除</a>
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">编辑网站来源</h4>
        </div>
        <div class="modal-body">
            <form id="editForm" role="form">
                <input type="hidden" field="site_id" name="site_id" value="0" />
                <div class="form-group">
                    <label>网站名称</label>
                    <input field="site_name" id="site_name" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>网站主页</label>
                    <input field="site_url" id="site_url" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>网站介绍</label>
                    <textarea field="site_description" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label>收费类型</label>
                    <select field="site_charge" default="0" class="form-control">
                        <option value="0">全免费</option>
                        <option value="1">部分收费</option>
                        <option value="2">全收费</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>收录网站</label>
                    <select field="site_isrecord" default="0" class="form-control">
                        <option value="0">是</option>
                        <option value="1">否</option>
                    </select>
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
var moduleURL = '/admin/sites';
var formData = {};

function listEditCallback(res) {
    //编辑后的回调
    $('#myModal').modal();
}

function formValid() {
    if($('#site_name').val() == '') {
        alert('请输入网站名称');
        return false;
    }
    if($('#site_url').val() == '') {
        alert('请输入网站链接');
        return false;
    }

    return true;
}


</script>