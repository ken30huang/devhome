<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">项目列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/project/add';">新增项目</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>项目ID</th>
                                <th>项目名</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['proj_id'];?></td>
                                <td><?php echo $row['proj_name'];?></td>
                                <td>
                                    <a href="/admin/project/funcs?proj_id=<?php echo $row['proj_id']; ?>">功能点</a>
                                    <a href="/admin/project/add?proj_id=<?php echo $row['proj_id'];?>">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['proj_id'];?>)">删除</a>
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
var moduleURL = '/admin/project';
</script>