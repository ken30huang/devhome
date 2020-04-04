<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="/admin/doc/nav">导航管理</a></li>
        <li class="active">导航管理</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/doc/cadd?dn_id=<?php echo $dn_id;?>'">新增文章</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>标题</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $row):?>
                        <tr>
                            <td><?php echo $row['c_title'];?></td>
                            <td><input type="text" size="4" name="c_order[]" data-id="<?php echo $row['c_id'];?>" value="<?php echo $row['c_order'];?>" /></td>
                            <td>
                                <a href="/admin/doc/cadd?c_id=<?php echo $row['c_id']?>&dn_id=<?php echo $dn_id;?>">编辑</a>
                                <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['c_id'];?>, 'cdel')">删除</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->	

<script>
var moduleURL = '/admin/doc';


</script>