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
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['tag_id'];?></td>
                                <td><?php echo $row['tag_name'];?></td>
                                <td>
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

<script>
var moduleURL = '/admin/tag';
var formData = {};

</script>