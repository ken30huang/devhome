<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">文档导航管理</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">新增导航</button>
                <button type="button" id="saveBtn" class="btn btn-primary">保存</button>
            </div>
            <div class="panel-body">
                <?php foreach($navdata as $nav):?>
                <h4><?php echo $nav['name'];?></h4>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>导航名称</th>
                            <th>导航路径</th>
                            <th>导航排序</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($nav['navs'] as $row):?>
                        <tr>
                            <td ><?php if(count($row['childs'])>0) { echo '└── '; } else { echo '├── ';} ?><?php echo $row['name'];?></td>
                            <td></td>
                            <td><input type="text" data-orderid="<?php echo $row['id']?>" size="4" value="<?php echo $row['order'];?>" /></td>
                            <td>
                                <a href="javascript:;" onclick="javascript:listEdit(<?php echo $row['id'];?> , 'navedit')">编辑</a>
                                <?php if(count($row['childs'])==0):?>
                                <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['id'];?>, 'navdel')">删除</a>
                                <?php endif;?>
                            </td>
                        </tr>
                            <?php foreach($row['childs'] as $item):?>
                            <tr>
                                <td ><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├── '.$item['dn_name'];?></td>
                                <td><?php echo $item['dn_path'];?></td>
                                <td><input type="text" data-orderid="<?php echo $item['dn_id']?>" size="4" value="<?php echo $item['dn_order'];?>" /></td>
                                <td>
                                    <a href="/admin/doc/clist?dn_id=<?php echo $item['dn_id'];?>">文档管理</a>
                                    <a href="javascript:;" onclick="javascript:listEdit(<?php echo $item['dn_id'];?> , 'navedit')">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $item['dn_id'];?>, 'navdel')">删除</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <?php endforeach;?>
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
                <h4 class="modal-title">编辑导航</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="editForm">
                    <input type="hidden" id="dn_id" field="dn_id" value="0" />
                    <div class="form-group">
                        <label>导航名称</label>
                        <input id="dn_name" field="dn_name" class="form-control" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>配置路径</label>
                        <input id="dn_path" field="dn_path" class="form-control" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>导航类型</label>
                        <select class="form-control" id="dn_type" field="dn_type">
                            <option value="1">顶部导航</option>
                            <option value="2">侧边导航栏</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>上级导航</label>
                        <select class="form-control" id="dn_pid" field="dn_pid">
                            <option value="0">一级导航</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>主页</label>
                        <textarea id="dn_content" field="dn_content" class="form-control" rows="6"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="javascript:clearForm()" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" onclick="javascript:formSave('navsave')" class="btn btn-primary">保存</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
var moduleURL = '/admin/doc';

function getChildNav() {
    var dn_type = parseInt($('#dn_type').val());
    ajaxReq({
        url:moduleURL+'/navchild',
        data: { dn_type:dn_type },
        succFun:function(res) {
            var rows = res.rows||[];
            $('#dn_pid')[0].length = 1;
            rows.forEach(function(item) {
                $('#dn_pid').append('<option value="'+item.dn_id+'">'+item.dn_name+'</option>');
            });
        },
    });
}

function listEditCallback(data) {
    getChildNav();
    $('#myModal').modal('show');
}

$('#dn_type').on('change' , function() {
    getChildNav();
});

getChildNav();

$('#saveBtn').on('click' , function() {
    var orders = [];
    $('input[data-orderid]').each(function() {
        var orderId = $(this).data('orderid');
        orders.push({ id:parseInt(orderId) , order:parseInt($(this).val()) });
    });
    ajaxReq({
        url:moduleURL+'/navordersave',
        data: { orders:orders },
        succFun:function(res) {
            location.reload();
        },
    });
});


</script>