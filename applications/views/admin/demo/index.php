<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">DEMO列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/demo/add';">新增DEMO</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>名称</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['demo_name'];?></td>
                                <td>
                                    <a href="/admin/demo/codeview?demo_id=<?php echo $row['demo_id'];?>">代码管理</a>
                                    <a href="javascript:;" onclick="location.href='/admin/demo/add?demo_id=<?php echo $row['demo_id'];?>';">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['demo_id'];?>)">删除</a>
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
var moduleURL = '/admin/demo';
</script>