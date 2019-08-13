<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="/admin/project">项目管理</a></li>
        <li class="active">功能列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/project/funcsadd?proj_id=<?php echo $proj_id; ?>';">添加功能</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>功能模块</th>
                                <th>具体功能点</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows as $task_id=>$row):?>
                            <tr>
                                <td><?php echo $row['task_name'];?></td>
                                <td></td>
                                <td>
                                    <a href="/admin/project/funcsadd?proj_id=<?php echo $row['proj_id'];?>&task_pid=<?php echo $task_id;?>">新增功能点</a>
                                    <a href="/admin/project/funcsadd?proj_id=<?php echo $row['proj_id'];?>&task_id=<?php echo $task_id;?>">编辑</a>
                                    <?php if(count($row['childs']) == 0):?>
                                    <a href="javascript:;" onclick="javascript:taskDel(<?php echo $task_id;?>)">删除</a>
                                    <?php endif;?>
                                </td>
                            </tr>
                                <?php foreach($row['childs'] as $child):?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $child['task_name'];?></td>
                                    <td>
                                        <a href="/admin/project/funcsadd?proj_id=<?php echo $child['proj_id'];?>&task_id=<?php echo $child['task_id'];?>">编辑</a>
                                        <a href="javascript:;" onclick="javascript:taskDel(<?php echo $child['task_id'];?>)">删除</a>
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
var moduleURL = '/admin/project';

function taskDel(del_id) {
    ajaxReq({
        url:moduleURL+'/funcsdel',
        data:{ del_id: del_id },
        succFun:function(res) {
            if(res.code == '000') {
                location.reload();
            } else {
                alert(res.msg);
            }
        }
    });
}
</script>