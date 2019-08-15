<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/series">系列文章</a></li>
        <li class="active">目录</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/series/subadd?c_parentid=<?php echo $c_parentid; ?>';">新增文章</button>
                <button type="button" class="btn btn-primary" onclick="javascript:saveOrder();">保存排序</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>序号</th>
                            <th>标题</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><input type="text" size="3" value="<?php echo $row['c_order'];?>" name="c_order[]" data-id="<?php echo $row['c_id']; ?>" /></td>
                                <td ><?php echo $row['c_title'];?></td>
                                <td>
                                    <a href="/admin/series/subadd?c_parentid=<?php echo $c_parentid; ?>&c_id=<?php echo $row['c_id'];?>">编辑</a>
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
var moduleURL = '/admin/series';

function saveOrder() {

}
</script>