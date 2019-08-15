<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">收藏列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/collect/add';">新增收藏</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>网站名称</th>
                            <th>网站链接</th>
                            <th>收藏分类</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['c_title'];?></td>
                                <td><?php echo $row['c_pubdate'];?></td>
                                <td ><?php echo $codenames[$row['c_cateid']];?></td>
                                <td>
                                    <a href="javascript:;" onclick="location.href='/admin/collect/add?c_id=<?php echo $row['c_id'];?>';">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['c_id'];?>)">删除</a>
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
var moduleURL = '/admin/collect';
</script>