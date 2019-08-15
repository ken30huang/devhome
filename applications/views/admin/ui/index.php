<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">模板管理</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/ui/add';">新增收藏</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>UI名称</th>
                            <th>UI路径</th>
                            <th>是否启用</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['ui_name'];?></td>
                                <td><?php echo $row['ui_path'];?></td>
                                <td ><a href="/admin/ui/active?ui_id=<?php echo $row['ui_id'];?>&active=<?php echo $row['ui_isactive'];?>"><?php echo ($row['ui_isactive']==0?'否':'是');?></a></td>
                                <td>
                                    <a href="javascript:;" onclick="location.href='/admin/ui/add?ui_id=<?php echo $row['ui_id'];?>';">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['ui_id'];?>)">删除</a>
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

<script>
var moduleURL = '/admin/ui';
</script>