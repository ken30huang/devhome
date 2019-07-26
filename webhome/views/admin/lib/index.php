<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">在线文档列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/lib/add';">新增库</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>库名称</th>
                            <th>库主页</th>
                            <th>类型</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['lib_name'];?></td>
                                <td><?php echo $row['lib_site'];?></td>
                                <td><?php echo (intval($row['lib_type'])==0?'开源项目':'DEMO模板');?></td>
                                <td>
                                    <a href="javascript:;" onclick="location.href='/admin/lib/add?lib_id=<?php echo $row['lib_id'];?>';">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['lib_id'];?>)">删除</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </thead>
                </table>
                <div class="pager"><?php echo $pager; ?></div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<script>
var moduleURL = '/admin/lib';
</script>