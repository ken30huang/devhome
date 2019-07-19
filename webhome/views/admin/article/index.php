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
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/article/add';">新增文章</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>标题</th>
                            <th>内容类型</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['c_title'];?></td>
                                <td><?php echo $row['c_type'];?></td>
                                <td><?php echo $row['c_pubdate'];?></td>
                                <td>
                                    <a href="javascript:;" onclick="location.href='/admin/article/add?c_id=<?php echo $row['c_id'];?>';">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['c_id'];?>)">删除</a>
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
var moduleURL = '/admin/article';
</script>