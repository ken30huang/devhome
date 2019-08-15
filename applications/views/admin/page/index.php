<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">页面列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/page/add';">新增文章</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>序号</th>
                            <th>页面名称</th>
                            <th>别名</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($pagetree as $row):?>
                            <tr>
                                <td ><input type="hidden" name="c_ids[]" value="<?php echo $row['c_id'];?>" /><input type="text" name="c_orders[]" size="4" value="<?php echo $row['c_order'];?>" /></td>
                                <td ><?php echo $row['c_title'];?></td>
                                <td><?php echo $row['c_alias'];?></td>
                                <td>
                                    <a href="javascript:;" onclick="location.href='/admin/page/add?c_id=<?php echo $row['c_id'];?>';">编辑</a>
                                    <?php if(count($row['childs']) == 0):?>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['c_id'];?>)">删除</a>
                                    <?php endif;?>
                                </td>
                            </tr>
                                <?php foreach($row['childs'] as $child):?>
                                <tr>
                                    <td ><input type="hidden" name="c_ids[]" value="<?php echo $child['c_id'];?>" /><input type="text" name="c_orders[]" size="4" value="<?php echo $child['c_order'];?>" /></td>
                                    <td > - <?php echo $child['c_title'];?></td>
                                    <td><?php echo $child['c_alias'];?></td>
                                    <td>
                                        <a href="javascript:;" onclick="location.href='/admin/page/add?c_id=<?php echo $child['c_id'];?>';">编辑</a>
                                        <a href="javascript:;" onclick="javascript:listDel(<?php echo $child['c_id'];?>)">删除</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
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