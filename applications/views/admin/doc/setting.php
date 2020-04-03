<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">文档配置项</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">新增配置</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>配置名称</th>
                                <th>配置类型</th>
                                <th>是否打开</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['ds_key'];?></td>
                                <td><?php echo $row['ds_type'];?></td>
                                <td><?php echo ($row['ds_isopen']==1?'是':'否');?></td>
                                <td>
                                    <a href="javascript:;" onclick="javascript:listEdit(<?php echo $row['ds_id'];?> , 'setedit')">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['ds_id'];?>, 'setdel')">删除</a>
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
                <h4 class="modal-title">编辑配置</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="editForm">
                    <input type="hidden" id="ds_id" field="ds_id" value="0" />
                    <div class="form-group">
                        <label>配置名称</label>
                        <input id="ds_key" field="ds_key" class="form-control" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>配置值</label>
                        <input id="ds_value" field="ds_value" class="form-control" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>配置类型</label>
                        <select class="form-control" id="ds_type" field="ds_type">
                            <option value="Number">数字</option>
                            <option value="Boolean">布尔值</option>
                            <option value="String">字符串</option>
                            <option value="Content">内容</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>配置文件</label>
                        <input id="ds_name" field="ds_name" class="form-control" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>是否打开</label>
                        <select class="form-control" id="ds_isopen" field="ds_isopen">
                            <option value="1">是</option>
                            <option value="0">否</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>配置文件内容</label>
                        <textarea id="ds_content" field="ds_content" class="form-control" rows="6"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="javascript:clearForm()" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" onclick="javascript:formSave('setsave')" class="btn btn-primary">保存</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
var moduleURL = '/admin/doc';

function listEditCallback() {
    $('#myModal').modal('show');
}

</script>